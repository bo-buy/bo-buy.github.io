<?php
$host_name = "127.0.0.1";
$database = "bobuy";
$user_name = "bobuy";
$password = "a0p7EHLyrVVAi6O5";
$conn = mysqli_connect($host_name, $user_name, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>