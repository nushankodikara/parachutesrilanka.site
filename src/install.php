<?php

include "servers.php";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = file_get_contents("database.sql");

if ($conn->multi_query($sql) === true) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();

?>
