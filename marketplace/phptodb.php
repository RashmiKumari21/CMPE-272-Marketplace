<?php
$servername = "3.234.254.199";
$username = "cmpe272";
$password = "cmpe272";

// Create connection
$mysqli = new mysqli($servername, $username, $password, "cmpe272");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>