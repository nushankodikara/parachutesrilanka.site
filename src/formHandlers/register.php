<?php

include "../server.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$userpassword = $_POST["password"];

$conn = new mysqli($server, $username, $password, $dbname);

$sql = "INSERT INTO Users (First_Name, Last_Name, Email, Password) VALUES ('$firstname', '$lastname', '$email', '$userpassword')";

if ($conn->query($sql) === true) {
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");

?>
