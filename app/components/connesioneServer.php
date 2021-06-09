<?php
$servername = "localhost";
$username = "id16007570_chellini1";
$password = "j-bwKb9G2dLU-4a";
$dbname = "id16007570_hotel";

$local = false;
if ($local) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
}

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
