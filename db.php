<?php

$host = "sql107.infinityfree.com";
$username = "if0_43028671";
$password = "9ojrI4zz546DzPk";
$database = "if0_43028671_feedback system";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {

    die("Database connection failed: "
        . $conn->connect_error);

}

?>