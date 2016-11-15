/*
 * @Author: huangchengdu
 * @Date:   2016-11-15 15:52:36
 * @Last Modified by:   huangchengdu
 * @Last Modified time: 2016-11-15 17:40:57
 */


var path = require('path');
var HtmlwebpackPlugin = require('html-webpack-plugin');
//定义了一些文件夹的路径 
var ROOT_PATH = path.resolve(__dirname);
var APP_PATH = path.resolve(ROOT_PATH, 'app');
var BUILD_PATH = path.resolve(ROOT_PATH, 'build');
module.exports = {
    //项目的文件夹 可以直接用文件夹名称 默认会找index.js 也可以确定是哪个文件名字
    entry: APP_PATH,
    //输出的文件名 合并以后的js会命名为bundle.js 
    output: {
        path: BUILD_PATH,
        filename: 'bundle.js'
    },
    //添加我们的插件 会自动生成一个html文件 
    plugins: [
        new HtmlwebpackPlugin({
            title: 'Hello World app'
        }),
        //引入一个需要引用jquery的库,这里会出错。不止到为啥
        // new webpack.ProvidePlugin({
        //       $: "jquery",
        //       jQuery: "jquery",
        //       "window.jQuery": "jquery"
        //     })
    ],
    //用于定位错误
    devtool: 'eval-source-map',
    //配置开发服务器
    devServer: {
        historyApiFallback: true,
        hot: true,
        inline: true,
        progress: true,
        //既然常用webpack做React一类的SPA，那么一个典型的例子就是前后端分离。后端是一个RESTful的server不管用什么写的。假定在本机他是类似http://localhost:5000/api/*这类的请求，现在添加配置让ajax请求可以直接proxy过去。
        // proxy: {
        //     '/api/*': {
        //         target: 'http://localhost:5000',
        //         secure: false
        //     } 
        // }
    },
    //通过不同的模块处理不同类型的文件
    module: {
        perLoaders: [{
            test: /\.jsx?$/,
            include: APP_PATH,
            loader: 'jshint-loader'
        }],
        loaders: [{
            test: /\.scss$/,
            loaders: ['style', 'css', 'sass'],
            include: APP_PATH
        }, {
            test: /\.(png|jpg)$/,
            loader: 'url?limit=40000'
        }, {
            test: /\.jsx?$/,
            loader: 'babel',
            include: APP_PATH,
            query: {
                presets: ['es2015']
            }
        }]
    },
    jshint: {
      "esnext": true
    },
};
