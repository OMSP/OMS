<?php

require_once APP_DIR . '/config.php';

$connection = mysqli_connect($config['DatabaseServer'], $config['DatabaseUser'], $config['DatabasePass'], $config['DatabaseName']);

?>
