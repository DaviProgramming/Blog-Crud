<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "blog_crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION["connect"] = 0;






?>