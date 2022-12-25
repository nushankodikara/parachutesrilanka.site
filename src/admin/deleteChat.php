<?php

include "../server.php";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$cname = $_GET['cname'] ?? '';

$sql = "DELETE FROM Chat WHERE ChatName = '$cname'";

if ($conn->query($sql) === true) {
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");

?>
