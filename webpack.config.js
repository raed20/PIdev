const Encore = require('@symfony/webpack-encore');

Encore
    // Set the output path for compiled assets
    .setOutputPath('public/build/')
    // Set the public path used by the web server to access the output path
    .setPublicPath('/build')

    // Add entry points for your stylesheets
    .addStyleEntry('styles_front', './assets/css/front_office/style_frontoffice.css')
    .addStyleEntry('styles_back', './assets/css/back_office/style_backoffice.css')
    // Add entry points for your stylesheets
    .addStyleEntry('styles_dashbaord', './assets/css/back_office/style_back_dashboard.css')
    .addStyleEntry('styleCategory','./assets/css/back_office/categorie.css')
    .addStyleEntry('styleProduct','./assets/css/back_office/product.css')
    //Shop Page
    .addStyleEntry('shopPage1','./assets/css/front_office/bootstrap.min.css')
    .addStyleEntry('shopPage2','./assets/css/front_office/slick.css')
    .addStyleEntry('shopPage3','./assets/css/front_office/style.css')
    // back office
    .addStyleEntry('styles_backaddopp','./assets/css/back_office/style_backaddopp.css')


    // Add entry points for your JavaScript files
    .addEntry('app_front', './assets/js/front_office/frontoffice.js')
    .addEntry('app_back', './assets/js/back_office/backoffice.js')
    //Shop Page
    .addEntry('app_shop1', './assets/js/front_office/jquery.min.js')
    .addEntry('app_shop2', './assets/js/front_office/slick.min.js')
    .addEntry('app_shop3', './assets/js/front_office/main.js')


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
