<?php

$host = "localhost";
$dbname = "id20905997_tourtravel_db";
$username = "id20905997_daniel";
$password = "Asusrog070809.";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);

if ($mysqli->connect_errno) {
die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;