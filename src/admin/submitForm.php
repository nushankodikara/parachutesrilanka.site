<?php

include "../server.php";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$cname = $_GET['cname'] ?? 'General';

$message = $_POST["message"];

$sql = "INSERT INTO Chat (ChatName, SentBy, Message) VALUES ('$cname', 'Admin', '$message')";

if ($conn->query($sql) === true) {
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php?cname=$cname");

?>
