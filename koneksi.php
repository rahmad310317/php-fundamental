<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_fundamental";

// Create connection
$conn = mysqli_connect($localhost, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   die();
}
