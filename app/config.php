<?php

// Everything here can be edited from the control panel, there's no reason to touch this.
// You can edit this, but it's not recommended. Code might break as a result.

$config = [
    // Meta and titles
    'title'             => "My Website", // Title, used all over the site.
    'logo'              => "https://cdn.energysys.com/wp-content/uploads/2012/03/Energysys_avatar-logo-transparent-bg.png", // Logo, must be a direct url or direct path to file, used all over the site.
    'alt'               => "Alternative", // Alternative, used when the logo does not load, mainly in meta.
    'favicon'           => "https://cdn.energysys.com/wp-content/uploads/2012/03/Energysys_avatar-logo-transparent-bg.png", // Favicon, must be a direct url or direct path to file, used all over the site.
    'description'       => "Your website description here", // Description, used for meta purposes.
    'author'            => "OMS", // Website author, your name or alias, used for meta purposes.
    'keywords'          => "Sleek, nice, fast", // Keywords, please divide all keywords using a comma, used for meta purposes.
    'country_lang'      => "en_US", // Country and language, if you don't know what to put here, don't change it, used for meta purposes.

    // General
    'basePath'          => "http://localhost", // Your website url and installation path, ex; http://localhost/oms.
    'homePage'          => "index", // Ability to change the homePage file will come in a future update.
    'homeExtension'     => "tpl", // Standard Smarty template extension
    'errorDocument'     => "error.tpl", // Ability to change the homePage file will come in a future update.
    'credityn'          => "true", // Credits, set to true if you want to add credits to OpenCMS in your footer.
    'homepageJumbotron' => "true", // Homepage Jumbotron, set to true if you want to add a homepage jumbotron to OpenCMS on your homepage.
    'navbaryn'          => "true", // Site navigation bar, set to true if you want to add a navigation bar to OpenCMS.
    'usessl'            => "false", // Not functional yet.

    // Database
    'DatabaseServer'    => "localhost", // Database server you want to connect to.
    'DatabaseUser'      => "root", // Database username you have set, usually root when running locally.
    'DatabasePass'      => "", // Database password you have set, usually empty when running locally.
    'DatabaseName'      => "omswip", // Database name you have set, can't be empty.

    // Theme
    'theme'             => "default", // Enter the theme name here

    // Widgets

    // Advanced, WARNING DO NOT EDIT THIS UNLESS YOU KNOW WHAT YOU'RE DOING!
    'debug'             => "true", // WARNING; Using this on live sites is dangerous, as it exposes PHP code!
    'corever'           => "1", // Do not touch this
    'corevernr'         => "20983", // Do not touch this
    'corestatus'        => "dev", // Do not touch this
    'year'              => date("Y"), // Do not touch this
    'phpversion'        => phpversion(), // Do not touch this
    'credit'            => "OMSP", // Do not touch this
    'crediturl'         => "https://omsp.org", // Do not touch this
    'charset'           => "utf-8",
    'bootstrapyn'       => "true",

];

// Compiled

// Advanced, DO NOT EDIT THIS UNLESS YOU KNOW WHAT YOU'RE DOING!

// General compiled variables
$config["omsfullver"] = "OpenCMS R".$config['corever']." (".$config['corever'].".".$config['corevernr']."-".$config['corestatus'].")";
$config["homePageInt"] = $config['homePage'].".".$config['homeExtension'];

// Easy variables for theme makers

// Meta variables
$config["og_img"] = '<meta property="og:image" content="'.$config['logo'].'" />';
$config["og_img_alt"] = '<meta property="og:image:alt" content="'.$config['alt'].'" />';
$config["og_locale"] = '<meta property="og:locale" content="'.$config['country_lang'].'" />';
