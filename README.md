# Symfony Black
A playground area for building simple and beautiful layouts with Bootstrap, Twig and SASS, all under Symfony 4. 

## Get started by installing the following components

* WAMPSERVER 3.1.9+ with a virtual host name and location for the project
* node.js 8.10+
* npm 6.12+
* Composer 1.8.5+
* Symfony 4.3.8+

## Initiate your first Symfony development project

* From the terminal, in your project directory location, install a minimal version of Symfony

```
symfony new myproject
```

* From the terminal install the following bundles for our new project

    - WebServerBundle | `composer require server --dev`
    - TwigBundle | `composer require twig`
    - Maker Bundle | `composer require make --dev`
    - Doctrine Annotations | `composer require doctrine/annotations`
    - WebProfilerBundle  | `composer require symfony/web-profiler-bundle --dev`
    - DebugBundle | `composer require symfony/debug-bundle`

* From the terminal run the server

```powershell
php bin/console server:run
```

* From the terminal create a controller with `make`

```powershell
php bin/console make:controller
```

* Within the controller, adjust the newly created route to make it the home page `@Route("/", name="default")`.  

* You can review your route structures. Do so often.

```powershell
php bin/console debug:router
```

* Get a feel for how your new Twig template is attached to your new controller.

### Get Encore for Webpack needs

* From the terminal get encore for your Symfony project via Composer.

```powershell
composure require encore
```

* Review the new package.json file and install all dependencies - followed by a commit on your work branch.

```powershell
npm install
```

* From the terminal review all registered actions with Twig

```powershell
php bin/console debug:twig
```
## Get a grip on the webpack.config.js file

* Re-modify this config file to register your new assets/ directory. It's from the assets directory that SASS and JavaScript files will be created. 

```js
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .splitEntryChunks()
    .disableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .configureBabel(() => {}, {
        useBuiltIns: 'usage',
        corejs: 3
    })
    .enableSassLoader()
    .copyFiles({
        from: './assets/images',
        to: 'images/[path][name].[hash:8].[ext]'
    })
```

## Fun with Bootstrap 4

* From the terminal get Bootstrap 4 via npm `npm i -D boostrap` then import it `import  'bootstrap';` into our assets/js/app.js file.

* Tweak your twig template(s) to be BS4 compatible.

* When working with stylesheet &amp; JavaScript links, use the following encore tags in your Twig template(s).

```twig
{{ encore_entry_link_tags('app')}}
{{ encore_entry_script_tags('app')}}
```

* From the terminal start watching

```powershell
npm run watch
```

* Open your browser, access your local site and let the journey continue!

