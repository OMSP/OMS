<?php

// Checking for config.php file, else redirect to the setup to create one.
if (!file_exists('app/config.php')) {
  include $_SERVER['DOCUMENT_ROOT'].'/app/setup.php';
} else {
  require_once __DIR__ . '/app/core.php';
}
//needed an updated for heroku to work...
?>
