<?php
$dbconfig = parse_ini_file(".env");
$servername = $dbconfig["DB_HOST"];
$username  = $dbconfig["DB_USERNAME"];
$password = $dbconfig["DB_PASSWORD"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully". "<br>";

$sql = "CREATE DATABASE IF NOT EXISTS task";
if ($conn->query($sql) === TRUE) {
  echo "Database task is created". "<br>";
} else {
  echo "Error creating database: " . $conn->error. "<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS task.userDomain (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Domain VARCHAR(30) NOT NULL,
    domaincount INT(6) DEFAULT 1
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table userDomain is created". "<br>";
  } else {
    echo "Error creating table: " . $conn->error. "<br>";
  }
?>