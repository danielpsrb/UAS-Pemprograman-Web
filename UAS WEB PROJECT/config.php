<?php

$host = "localhost";
$dbname = "db_name";
$username = "db_userhost";
$password = "db_pass";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);

if ($mysqli->connect_errno) {
die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
