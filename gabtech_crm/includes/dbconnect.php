<?php
//variable names
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "gabtech32";
    $database = "gtcrm_db";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

?>