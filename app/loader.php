<?php

// Register router/service autoloader
// This will load anything you request from the folders listed below
spl_autoload_register(function ($class) {
    $filename = "$class.php";

    if (file_exists(__DIR__ . '/router/' . $filename)) {
        include __DIR__ . '/router/' . $filename;
    } else if (file_exists(__DIR__ . '/service/' . $filename)) {
        include __DIR__ . '/service/' . $filename;
    } else if (file_exists(__DIR__ . '/libs/' . $filename)) {
       include __DIR__ . '/libs/' . $filename;
   }
});
