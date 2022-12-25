<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Client Contact Area</title>
		<link rel="stylesheet" href="../admin/style.css" />
		<!-- Bootstrap CDN -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
		/>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
			crossorigin="anonymous"
		></script>
	</head>
	<body>
		<!-- As a heading -->
		<nav class="navbar bg-light">
			<div class="container-fluid">
				<span class="navbar-brand mb-0 h1">Client Contact Area</span>
			</div>
		</nav>
		<div class="row mt-3 p-2" style="display: flex;flex-direction: column;align-items: center;">
			<div class="col-lg" id="messageCol" style="max-width:600px">
<?php
$cname = $_GET['cname'] ?? 'General';

echo "	<form id='messageSend' method='post' action='../formHandlers/submitForm.php'>
		<div class='mb-3'>
			<label for='message' class='form-label'>Message</label>
			<input
				type='text'
				name='message'
				id='message'
				class='form-control'
			/>
		</div>
		<button type='submit' class='btn btn-primary'>Send</button>
		</form>";
?>
				
				<!-- Messages start here -->
<?php
// get firstname and lastname from cookies

$fname = $_COOKIE['firstname'];
$lname = $_COOKIE['lastname'];

$cname = $fname . $lname;

include '../server.php';

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM Chat WHERE ChatName = '$cname' ORDER BY ID DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$sender = $row['SentBy'];
		$message = $row['Message'];
		$date = $row['Date'];

		$type = 'border-primary';

		if ($sender == 'Admin') {
			$type = 'border-success';
		}

		echo "<div class='card $type'>
			<div class='card-body'>
				<div class='userInfo'>
					<i class='bx bx-user-circle'></i>
					<p> $sender </p>
				</div>
				<p class='card-text'>
					$message
				</p>
			</div>
			<div class='card-footer text-muted'>
				$date
			</div>
		</div>";
	}
} else {
	echo 'No messages';
}
?>
			</div>
		</div>
		<!-- Bootstrap CDN -->
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
			integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
			integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
			crossorigin="anonymous"
		></script>
        <!-- Login Check -->
		<script src="../js/loginCheck.js"></script>
	</body>
</html>
