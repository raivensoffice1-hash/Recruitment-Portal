<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "recruitment_portal";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed : " . $conn->connect_error);
}

date_default_timezone_set("Asia/Kolkata");

?>
