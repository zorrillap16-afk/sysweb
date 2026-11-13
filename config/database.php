<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "sysweb";

$mysqli = new mysqli($server, $username, $password, $database, 3307);

if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>
