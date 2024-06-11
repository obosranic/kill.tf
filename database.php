<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "button_clicks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get click count from database
$sql = "SELECT click_count FROM click_counter WHERE id=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$click_count = $row['click_count'];

// Update database with new click count
$click_count++;
$sql = "UPDATE click_counter SET click_count=$click_count WHERE id=1";
$conn->query($sql);

// Display click count on website
echo "Number of clicks: " . $click_count;

$conn->close();
?>
