<?php
// Database connection parameters
$host = 'localhost'; // Change this if your MySQL server is hosted on a different machine
$username = 'root'; // Change this if your MySQL username is different
$password = ''; // Change this if your MySQL password is different
$database = 'aitsad'; // Change this if your database name is different

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful
echo "Connected successfully";


?>
