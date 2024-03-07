const Encore = require('@symfony/webpack-encore');

Encore
 // Set the output path for compiled assets
 .setOutputPath('public/build/')
 // Set the public path used by the web server to access the output path
 .setPublicPath('/build')

 // Add entry points for your stylesheets
 .addStyleEntry('styles_front', './assets/css/style.css')
 .addStyleEntry('styles_back', './assets/css/style_backoffice.css')
 .addStyleEntry('styles_invest_main_front', './assets/css/addloan.css')
 .addStyleEntry('styles_dashboard', './assets/css/style_back_dashboard.css')
 .setPublicPath('/build')
 .addStyleEntry('styles', './assets/css/style.css')
 .addStyleEntry('styleformpret', './assets/css/styles_pret.css')
 .addStyleEntry('styletableBank','./assets/css/bankShowfront.css')
 .addStyleEntry('styleaddbank', './assets/css/addbank.css')
 .addStyleEntry('styleaffiche', './assets/css/affiche_bank.css')
 .addStyleEntry('styleCalc','./assets/css/stylecalc.css')

 

 

 // only needed for CDN's or subdirectory deploy
 //.setManifestKeyPrefix('build/')
 .addEntry('app', './assets/js/script.js')
 .addEntry('loancalc','./assets/js/loancalc.js')


 // Add entry points for your JavaScript files
 .addEntry('app_front', './assets/js/addloan.js')
 .addEntry('app_back', './assets/js/backoffice.js')
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
