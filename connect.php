<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "mybook_db";

// Connect to the database
$connection = mysqli_connect($host, $username, $password, $db);
// Close the connection
mysqli_close($connection);
?>
