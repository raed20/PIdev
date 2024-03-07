const Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    .addStyleEntry('styles', './assets/css/style.css')
    .addStyleEntry('styles_blog_main', './assets/css/style_blog_main.css')
    .addStyleEntry('styles_Affichage', './assets/css/style_affichage.css')
    .addStyleEntry('styles_addblog', './assets/css/style_addblog.css')
    .addStyleEntry('styles_editblog', './assets/css/style_editblog.css')
    .addStyleEntry('styles_blog_single', './assets/css/styles_blog_single.css')
    .addStyleEntry('styles_back', './assets/css/back_office/style_backoffice.css')
    .addStyleEntry('searchbar', './assets/css/back_office/searchbar.css')
    .addStyleEntry('styleaddcomment', './assets/css/back_office/styleaddcomment.css')
    

    // only needed for CDN's or subdirectory deploy
    //.setManifestKeyPrefix('build/')
    .addEntry('app', './assets/js/script.js')
    .addEntry('app_back', './assets/js/back_office/backoffice.js')
    
    
    // enable Sass/SCSS support
    .enableSassLoader()

    // create hashed filenames (e.g., app.abc123.css)
    .enableVersioning()

    /*
     * ENTRY CONFIG
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // configure Babel
    // .configureBabel((config) => {
    //     config.plugins.push('@babel/a-babel-plugin');
    // })

    // enables and configure @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })

    // enables Sass/SCSS support
    //.enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use React
    //.enableReactPreset()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()
    ;

module.exports = Encore.getWebpackConfig();
