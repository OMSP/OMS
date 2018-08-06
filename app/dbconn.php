<?php

require_once APP_DIR . '/config.php';

$connection = mysqli_connect($config['DatabaseServer'], $config['DatabaseUser'], $config['DatabasePass'], $config['DatabaseName']);

// Now we have the object, remove the values from the config array.
unset($config["DatabaseServer"]);
unset($config["DatabaseUser"]);
unset($config["DatabasePass"]);
unset($config["DatabaseName"]);
