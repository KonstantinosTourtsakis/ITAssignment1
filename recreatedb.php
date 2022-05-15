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
		$query = "DROP TABLE account";
		if (mysqli_query($conn, $query)) 
		{
			echo "Database tables dropped! <br>";
		} 
		else 
		{
			echo "Error: " . $finalquery . "<br>" . mysqli_error($conn);
		}

		$query = "CREATE TABLE account(name VARCHAR(60) NOT NULL, father VARCHAR(60), age INT NOT NULL, phone INT, email VARCHAR(60) NOT NULL, afm INT, amka INT, ccnumber INT NOT NULL, ccaddr VARCHAR(60), comment VARCHAR(250))";
		if (mysqli_query($conn, $query)) 
		{
			echo "Database tables recreated! <br>";
		} 
		else 
		{
			echo "Error: " . $finalquery . "<br>" . mysqli_error($conn);
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