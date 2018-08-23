<?php

session_start();

use Klein\Klein;

// Constants
define('DEBUG', TRUE);
define('APP_DIR', __DIR__);
define('CACHE_DIR', APP_DIR . '/cache');
define('VENDOR_DIR', APP_DIR . '/vendor');
define('VIEW_DIR', APP_DIR . '/view');

// Making cache folders if non existant
if (!is_dir(CACHE_DIR)) {
    mkdir(CACHE_DIR."/cache", 0777, true);
    mkdir(CACHE_DIR."/compile", 0777, true);
}

// Register loaders
require_once APP_DIR . '/vendor/autoload.php';
require_once APP_DIR . '/config.php';

// Enable debug system if in development mode
$DEBUG_MODE = !empty($config["debug"]) && strtolower($config["debug"]) == "true";
if($DEBUG_MODE) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}

require_once APP_DIR . '/loader.php';
require_once APP_DIR . '/lang.php';
require_once APP_DIR . '/dbconn.php';

// Create klein.php
$klein = new Klein();
$service = $klein->service();

// Create Database service object
$service->Database = $connection;

// Register Smarty
$smarty = new SmartyService();
$smarty->setCacheDir(CACHE_DIR . '/cache');
$smarty->setCompileDir(CACHE_DIR . '/compile');
$smarty->setCaching(defined('CACHE_DIR'));
$smarty->setCachingLifetime(120);

//If we are in development mode, we want to disable caching as this is not going to help
$smarty->setCaching(!$DEBUG_MODE); // Turn on caching - ONLY use this if you are going to use is_cache on EVERY page
// If you want to restart the site delete the files under app/cache/cache
$smarty->setDebugging($DEBUG_MODE); // Enable the smarty console so you can see what it's doing
$service->smarty = $smarty->create();
$service->smarty->setTemplateDir(array(
    'one' => "./assets/themes/{$config["theme"]}",
    'two' => 'app/view',
));
$service->smartyParams = $config;

// Register parameters
$service->cacheDir = CACHE_DIR;
$service->viewDir = VIEW_DIR;

// Error handler
$klein->onHttpError(function ($code, $router) {
    $router->service()->smarty->assign($router->service()->smartyParams);
    $router->service()->smarty->assign('errorCode', $code);
    $router->service()->smarty->display($router->service()->smartyParams["errorPageInt"]);
});

// Register routers
$siteLinks = [];
$files = glob('app/router/*.{php}', GLOB_BRACE);
foreach ($files as $line) {
    include_once $line;
    $file = pathinfo($line);
    $route = new $file["filename"]();

    $route->create($klein);

    $links = $route->getLinks();

    if ($links != null) {
        foreach ($links as $key => $value) {
            array_push($siteLinks, $value);
        }
    }
}
$service->smarty->assign("siteLinks", $siteLinks);
$service->smarty->assign("langString", $lang);

// Run!
$klein->dispatch();
