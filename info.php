<?php
$servername = "localhost";
$username = "Raz";
$password = "*B2C5D0135C1F720Ae1967FF8D12222CB911c8011";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully :)";
?>