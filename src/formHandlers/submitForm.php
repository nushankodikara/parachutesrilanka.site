<?php

include "../server.php";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// get firstname from cookie
$firstname = $_COOKIE["firstname"];
$lastname = $_COOKIE["lastname"];

$message = $_POST["message"];

$sql = "INSERT INTO Chat (ChatName, SentBy, Message) VALUES ('$firstname$lastname', '$firstname', '$message')";

if ($conn->query($sql) === true) {
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

if (isset($_SERVER["HTTP_REFERER"])) {
	header("Location: " . $_SERVER["HTTP_REFERER"]);
}

?>
