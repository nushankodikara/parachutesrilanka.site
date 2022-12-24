<?php

include "../server.php";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$sql = "INSERT INTO Tickets (Name, Email, Phone, Msg) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === true) {
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");

?>
