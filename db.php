<?php

$host = "sql104.infinityfree.com";
$username = "if0_42904520";
$password = "BOnn75052028a";
$database = "if0_42904520_XXX";

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