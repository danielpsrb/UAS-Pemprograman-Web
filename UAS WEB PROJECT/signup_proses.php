<?php

if (empty($_POST["name"])) {
    die("Nama harus diisi");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Diperlukan email yang valid");
}

if (strlen($_POST["password"]) < 8) {
    die("Kata sandi harus minimal 8 karakter");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("kata sandi harus mengandung sedikitnya satu huruf");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("kata sandi harus mengandung sedikitnya satu angka");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/config.php";

$sql = "INSERT INTO user (nama, email, password_hash)
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: signup-sukses.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}