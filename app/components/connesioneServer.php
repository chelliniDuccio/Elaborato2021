<?php
$servername = "localhost";
$username = "id16007570_chellini1";
$password = "wuGPom-4r5L9=L_b";
$dbname = "id16007570_hotel";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
