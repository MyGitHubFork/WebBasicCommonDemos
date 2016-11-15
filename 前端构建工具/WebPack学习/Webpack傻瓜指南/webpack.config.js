/*
 * @Author: huangchengdu
 * @Date:   2016-11-15 15:52:36
 * @Last Modified by:   huangchengdu
 * @Last Modified time: 2016-11-15 15:56:23
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
        })
    ]
};
