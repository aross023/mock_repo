<!-- configuration for the project -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "us_employees";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>