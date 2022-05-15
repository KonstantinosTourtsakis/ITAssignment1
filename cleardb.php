<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="icon" href="./assets/logo.png" type="image/icon">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="alternate stylesheet" type="text/css" href="style2.css" title="alternate 1" />

	<script type="text/javascript" src="styleswitcher.js"></script>
</head>

<body>

	<!-- Website logo -->
	<a href = "./index.html"> <img class = "logo" src="./assets/logo.png" width = 100 height = 100> </a>

	<!--Main navigation bar of the website-->
	<nav>
		<a class = "navlink" href="./about.html">About</a>
		<a class = "navlink" href="./services.html">Services</a>
		<a class = "navlink" href="./appointment.html">Appointment</a>
		<a class = "navlink" href="./signup.html">Sign up</a>
		<a class = "navlink" href="./query.html">Query</a>
	</nav>
	
	<br> <br> <br>
	<!--<br> <br> <br> <br> <br> <br> -->

	<?php

		// Connection details
		$servername =  "localhost"; //"127.0.0.1"
		$username = "root";
		$password = "";
		$dbname = "resdb";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}

		// Executing query
		$query = "DELETE FROM account";
		if (mysqli_query($conn, $query)) 
		{
			echo "Database cleared!";
		} 
		else 
		{
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}


		mysqli_close($conn);
	?>

	
	

	<!-- Social media links -->
	<footer>

		<h5>&copy; 2022 Konstantinos Tourtsakis</h5>
		<a class = "footlink" href="./">Facebook</a>
		<a class = "footlink" href="./">Twitter</a>
		<a class = "footlink" href="./">Instagram</a>
		<a class = "footlink" href="./">YouTube</a>

	</footer>
</body>
</html>