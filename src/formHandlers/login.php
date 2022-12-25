<?php

include "../server.php";

$email = $_POST["email"];
$userpassword = $_POST["password"];

$conn = new mysqli($server, $username, $password, $dbname);

$sql = "SELECT * FROM Users WHERE Email = '$email' AND Password = '$userpassword'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// get first name and last name of the user from Users table
	$sql = "SELECT * FROM Users WHERE Email = '$email'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	$firstname = $row["First_Name"];
	$lastname = $row["Last_Name"];

	// set cookie for the user
	setcookie("firstname", $firstname, time() + 86400 * 30, "/");
	setcookie("lastname", $lastname, time() + 86400 * 30, "/");
	setcookie("user", $email, time() + 86400 * 30, "/");
	header("Location: ../index.php");
} else {
	echo "Wrong username or password";
}

$conn->close();
?>
