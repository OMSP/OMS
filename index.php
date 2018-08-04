<?php

if (!file_exists('app/config.php')) {
  include $_SERVER['DOCUMENT_ROOT'].'/app/setup/index.php';
} else {
  require_once __DIR__ . '/app/core.php';
}



?>
