<?php
include '/config.php';

$connection = mysqli_connect($DatabaseServer, $DatabaseUser, $DatabasePass, $DatabaseName);

if ($connection->ping()) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", $connection->error);
}

?>
