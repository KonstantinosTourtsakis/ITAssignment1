<!DOCTYPE html>
<html>
<head>
	<title>Query</title>
	<link rel="icon" href="./assets/logo.png" type="image/icon">
	<link rel="stylesheet" type="text/css" href="style.css" />

	<script type="text/javascript" src="signup.js"> </script>
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
		// Array that includes the database table column names
		$arrDB = array(
    		"name",
    		"father",
    		"age",
    		"phone",
    		"email",
    		"afm",
    		"amka",
		);

		// Array that includes the form ids
		$arrFORM = array(
			"fname",
			"ffather",
			"fage",
			"fphone",
			"fmail",
			"fafm",
			"famka"
		);

		$query1 = "INSERT INTO account(";
		$query2 = " VALUES (";
		
		// Looping through the form fields and creating the respective SQL query
		// to inser the data into the database
		for($i = 0; $i < count($arrFORM); $i++)
		{
			if(empty($_POST[$arrFORM[$i]]))
			{
				continue;
			} 
			else 
			{
				
				if(is_numeric($_POST[$arrFORM[$i]]))
				{
					$query1 .= "$arrDB[$i], ";
					$temp = $_POST[$arrFORM[$i]];
					$query2 .= "$temp, ";
				}
				else
				{
					$query1 .= "$arrDB[$i], ";
					$temp = $_POST[$arrFORM[$i]];
					$query2 .= "'$temp', ";
				}
				
			}
		}

		// Constructing final SQL query
		$query1 = rtrim($query1, ", ");
		$query1 .= ")";
		$query2 = rtrim($query2, ", ");
		$query2 .= ");";
		$finalquery = $query1 . $query2;
		//echo $finalquery;

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
		echo "Connected successfully";

		// Executing query
		if (mysqli_query($conn, $finalquery)) 
		{
			echo "New record created successfully";
		
		} 
		else 
		{
			echo "Error: " . $finalquery . "<br>" . mysqli_error($conn);
		
		}


		mysqli_close($conn);
	?>

	<h2> Your new account has been successfully created! </h2>
	

	<!-- Social media links and style switcher buttons -->
	<footer>
		<h5>© 2022 Konstantinos Tourtsakis</h5>
		<a class = "footlink" href="./">Facebook</a>
		<a class = "footlink" href="./">Twitter</a>
		<a class = "footlink" href="./">Instagram</a>
		<a class = "footlink" href="./">YouTube</a>
		<a class = "footlink" onclick="setActiveStyleSheet('alternate 2'); return false;" > Default style</a>
		<a class = "footlink" onclick="setActiveStyleSheet('alternate 1'); return false;" > Style 02</a> 
	</footer>
</body>
</html>