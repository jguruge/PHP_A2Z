<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "mybook_db";

// Connect to the database
$connection = mysqli_connect($host, $username, $password, $db);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "✅ Connected to the database successfully!";

// Close the connection
mysqli_close($connection);
//comment for test
?>
