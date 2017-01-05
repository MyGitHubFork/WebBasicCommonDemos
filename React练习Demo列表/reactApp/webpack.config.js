/*
* @Author: huangchengdu
* @Date:   2017-01-05 21:08:44
* @Last Modified by:   huangchengdu
* @Last Modified time: 2017-01-05 21:21:22
*/

 var config = {
   entry: './main.js',
	
   output: {
      path:'./',
      filename: 'index.js',
   },
	
   devServer: {
      inline: true,
      port: 7777
   },
	
   module: {
      loaders: [ {
         test: /\.jsx?$/,
         exclude: /node_modules/,
         loader: 'babel',
			
         query: {
            presets: ['es2015', 'react']
         }
      }]
   }
	
}

module.exports = config;