const mix = require('laravel-mix');

let ImageminPlugin = require('imagemin-webpack-plugin').default;
mix.webpackConfig({
    plugins: [
        new ImageminPlugin({
            pngquant: {
                quality: '95-100',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        }),
    ],
    module: {
        rules: [
            {
                test: /\.(png|jpe?g|gif|svg)$/i,
                use:{
                    loader:'file-loader'
                }
            },
            {
                test: /\.(png|jpe?g|gif|svg)$/i,
                use:{
                    loader:'asset/resource'
                }
            }
        ]
    }
})
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css').options({
    processCssUrls: false
})
    .copy('resources/images', 'public/images');


