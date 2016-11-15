module.exports = {
    entry: './src',
    output: {
        path: 'builds',
        filename: 'bundle.js',
    },
    module: {
        loaders: [{
            test: /\.js/,
            loader: 'babel',
            include: __dirname + '/src',
        }, {
            test: /\.scss/,
            loader: 'style!css!sass',
            // Or
            loaders: ['style', 'css', 'sass'],
        }, {
            test: /\.html/,
            loader: 'html',
        }],
    }
};
