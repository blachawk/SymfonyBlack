# Symfony Black
A playground area for building simple and beautiful layouts with Bootstrap, Twig and SASS, all under Symfony 4. 

## Get started by installing the following components

* WAMPSERVER 3.1.9+ with a virtual host name and location for the project
* node.js
* npm
* Composer 1.8.5+
* Symfony 4.3.8+
* All packages listed in composer.json and package.json

## Initiate your first Symfony development project

* From the terminal

```
symfony new myproject
```

* Install the following bundles

    - WebServerBundle | `composer require server --dev`
    - TwigBundle | `composer require twig`
    - Maker Bundle | `composer require make --dev`
    - Doctrine Annotations | `composer require doctrine/annotations`
    - WebProfilerBundle  | `composer require symfony/web-profiler-bundle --dev`
    - DebugBundle | `composer require symfony/debug-bundle`

* Run the server

```powershell
php bin/console server:run
```

* Create a controller with make

```powershell
php bin/console make:controller
```

* Adjust the newly created route to make it the home page `@Route("/", name="default")`.  

* Check to see what are our route structures by typing:

```powershell
php bin/console debug:router
```

### Get Encore for Webpack needs

* From the terminal initiate the following:

```powershell
composure require encore
```

* Review the new package.json file and get all dependencies and commit all assets

```powershell
npm install
```

* From the terminal start watching

```powershell
npm run watch
```

* When working with stylesheet links and javascript links, use the following encore tags

```twig
{{ encore_entry_link_tags('app')}}
{{ encore_entry_script_tags('app')}}
```

* Review all registered actions with Twig

```powershell
php bin/console debug:twig
```


## Fun with Bootstrap 4

* Get Bootstrap 4 via npm `npm i -D boostrap` then import it `import  'bootstrap';` into our assets/js/app.js file.


