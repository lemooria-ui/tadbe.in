<?php
$servername = "localhost";
$username = "tadbein_database";
$password = "tadbein_database";
$dbname = "tadbein_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>