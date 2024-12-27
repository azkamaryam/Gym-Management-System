<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "gym_management";

$conn = new mysqli($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed !" . mysqli_error($conn));
}
