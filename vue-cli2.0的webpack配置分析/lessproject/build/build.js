// 检查 Node 和 npm 版本
require('./check-versions')()
// 使用了 shelljs 插件，可以让我们在 node 环境的 js 中使用 shell
require('shelljs/global')
env.NODE_ENV = 'production'
// 使用 NodeJS 自带的文件路径工具
var path = require('path')
//获取confit/index.js的默认配置
var config = require('../config')
// 一个很好看的 loading 插件
var ora = require('ora')
// 加载 webpack
var webpack = require('webpack')
// 加载 webpack.prod.conf
var webpackConfig = require('./webpack.prod.conf')
//  输出提示信息 ～ 提示用户请在 http 服务下查看本页面，否则为空白页
console.log(
  '  Tip:\n' +
  '  Built files are meant to be served over an HTTP server.\n' +
  '  Opening index.html over file:// won\'t work.\n'
)
// 使用 ora 打印出 loading + log
var spinner = ora('building for production...')
// 开始 loading 动画
spinner.start()
// 拼接编译输出文件路径
var assetsPath = path.join(config.build.assetsRoot, config.build.assetsSubDirectory)
// 删除这个文件夹 （递归删除）
rm('-rf', assetsPath)
// 创建此文件夹 
mkdir('-p', assetsPath)
// 复制 static 文件夹到我们的编译输出目录
cp('-R', 'static/*', assetsPath)
//  开始 webpack 的编译
webpack(webpackConfig, function (err, stats) {
   // 编译成功的回调函数
  spinner.stop()
  if (err) throw err
  process.stdout.write(stats.toString({
    colors: true,
    modules: false,
    children: false,
    chunks: false,
    chunkModules: false
  }) + '\n')
})
