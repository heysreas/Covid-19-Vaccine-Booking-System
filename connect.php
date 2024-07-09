<!-- connect.php -->
<?php
$servername = "localhost";
$username = "root"; // Change this if different
$password = ""; // Change this if different
$dbname = "vaccine_booking_system"; // Change this if different

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
