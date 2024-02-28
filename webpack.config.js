const Encore = require('@symfony/webpack-encore');

Encore
    // Set the output path for compiled assets
    .setOutputPath('public/build/')
    // Set the public path used by the web server to access the output path
    .setPublicPath('/build')

    // Add entry points for your stylesheets
    .addStyleEntry('styles_front', './assets/css/front_office/style_frontoffice.css')
    .addStyleEntry('styles_back', './assets/css/back_office/style_backoffice.css')
    .addStyleEntry('styles_invest_main_front', './assets/css/front_office/style_invest_main_front.css')
    // Add entry points for your stylesheets
    .addStyleEntry('styles_dashbaord', './assets/css/back_office/style_back_dashboard.css')
    .addStyleEntry('styles_backopp', './assets/css/back_office/style_backopp.css')
    .addStyleEntry('styles_backaddopp', './assets/css/back_office/style_backaddopp.css')
    .addStyleEntry('styles_invest_front', './assets/css/front_office/styles_invest_front.css')







    // Add entry points for your JavaScript files
    .addEntry('app_front', './assets/js/front_office/frontoffice.js')
    .addEntry('app_back', './assets/js/back_office/backoffice.js')

    // Enable Sass/SCSS support
    .enableSassLoader()

    // Enable versioning for cache busting in production
    .enableVersioning()

    // Split entry chunks for better optimization
    .splitEntryChunks()

    // Enable single runtime chunk
    .enableSingleRuntimeChunk()

    // Cleanup output directory before build
    .cleanupOutputBeforeBuild()

    // Enable build notifications
    .enableBuildNotifications()

    // Enable source maps only in development
    .enableSourceMaps(!Encore.isProduction())

    // Configure Babel preset-env for polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    });

// Add configuration for resolving aliases if needed

// Retrieve and export the Webpack configuration
module.exports = Encore.getWebpackConfig();
