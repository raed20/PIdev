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
    .addStyleEntry('styles_invest_main', './assets/css/style_invest_main.css')
    .addStyleEntry('google_fonts', './assets/css/google_fonts.css')

    // Include Font Awesome stylesheet
    .addStyleEntry('font_awesome', './assets/css/font_awesome.css')

    // Include Bootstrap Icons stylesheet
    .addStyleEntry('bootstrap_icons', './assets/css/bootstrap_icon.css')

    // Include other libraries' stylesheets if needed
    // .addStyleEntry('animate_css', 'path/to/animate.min.css')
    // .addStyleEntry('owl_carousel_css', 'path/to/owl.carousel.min.css')

    // Compile your own CSS files
    .addStyleEntry('style', './assets/css/style.css')

    // only needed for CDN's or subdirectory deploy
    //.setManifestKeyPrefix('build/')
    .addEntry('app', './assets/js/script.js')

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
