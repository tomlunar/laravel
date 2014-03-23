<?php

/*
|--------------------------------------------------------------------------
| Application Paths
|--------------------------------------------------------------------------
|
| Laravel allows you to use the directory structure that fits your needs.
| Note that you might also need to update composer.json and global.php, 
| and that some paths are not set here as not used by the framework.
|
*/

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Path
	|--------------------------------------------------------------------------
	|
	| Here we just defined the path to the application directory. Most likely
	| you will never need to change this value as the default setup should
	| work perfectly fine for the vast majority of all our applications.
	|
	*/

	'app' => __DIR__.'/../app',

	/*
	|--------------------------------------------------------------------------
	| Public Path
	|--------------------------------------------------------------------------
	|
	| The public path contains the assets for your web application, such as
	| your JavaScript and CSS files, and also contains the primary entry
	| point for web requests into these applications from the outside.
	|
	*/

	'public' => __DIR__.'/../public',

	/*
	|--------------------------------------------------------------------------
	| Base Path
	|--------------------------------------------------------------------------
	|
	| The base path is the root of the Laravel installation. Most likely you
	| will not need to change this value. But, if for some wild reason it
	| is necessary you will do so here, just proceed with some caution.
	|
	*/

	'base' => __DIR__.'/..',

	/*
	|--------------------------------------------------------------------------
	| Storage Path
	|--------------------------------------------------------------------------
	|
	| The storage path is used by Laravel to store cached Blade views, logs
	| and other pieces of information. You may modify the path here when
	| you want to change the location of this directory for your apps.
	|
	*/

	'storage' => __DIR__.'/../app/storage',

	/*
	|--------------------------------------------------------------------------
	| Commands Path
	|--------------------------------------------------------------------------
	|
	| You may store your custom commands in this folder. This default path is 
	| used by the command:make command, though you can set it using --path.
	| Change this path here and update your composer.json and global.php.
	|
	*/

	'commands' => __DIR__.'/../app/commands',

	/*
	|--------------------------------------------------------------------------
	| Configuration Path
	|--------------------------------------------------------------------------
	|
	| The configuration path contains the configuration files of your Laravel
	| application, for cache, database, mail, session, etc... You can move
	| or rename this configuration path here, to accomodate your needs.
	|
	*/

	'config' => __DIR__.'/../app/config',
	
	/*
	|--------------------------------------------------------------------------
	| Controllers Path
	|--------------------------------------------------------------------------
	|
	| Controllers may be store in the controllers path. This default path is
	| used by some artisan commands to generate controllers. If you want to
	| change it, also update your composer.json and the start/global.php.
	|
	*/

	'controllers' => __DIR__.'/../app/controllers',

	/*
	|--------------------------------------------------------------------------
	| Language Path
	|--------------------------------------------------------------------------
	|
	| The language strings are stored in files inside the app/lang directory,
	| which is the default path. It contains subfolders for each language,
	| where resides the files. You can specify your own path if needed.
	| 
	*/

	'lang' => __DIR__.'/../app/lang',

	/*
	|--------------------------------------------------------------------------
	| Migrations Path
	|--------------------------------------------------------------------------
	|
	| Migrations are a type of version control for your database. This folder
	| is used to store your migration classes. If for some reasons you need
	| to change this path, don't forget to update the composer.json file.
	| 
	*/

	'migrations' => __DIR__.'/../app/database/migrations',

	/*
	|--------------------------------------------------------------------------
	| Start Path
	|--------------------------------------------------------------------------
	|
	| Files inside the start path are related to your application. In the life
	| request cycle they are loaded once the framework has been initialized.
	| If for some reason you want to change that path, you can do it here.
	|
	*/

	'start' => __DIR__.'/../app/start',

	/*
	|--------------------------------------------------------------------------
	| Views Path
	|--------------------------------------------------------------------------
	|
	| Here you may set the default path that should be checked for your views.
	| This path is the primary views path used by the framework ; note that
	| you may specify additional views paths in the config/view.php file.
	|
	*/

	'views' => __DIR__.'/../app/views',

);
