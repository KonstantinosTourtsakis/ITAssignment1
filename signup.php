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
		//These arrays are used to loop though the fields of the form
		//and create a query for the database to write to the corresponding elements
		// Array that includes the database table column names
		$arrDB = array(
    		"name",
    		"father",
    		"age",
    		"phone",
    		"email",
    		"afm",
    		"amka",
    		"ccnumber",
    		"ccaddr",
    		"comment"
		);

		// Array that includes the form ids
		$arrFORM = array(
			"fname",
			"ffather",
			"fage",
			"fphone",
			"fmail",
			"fafm",
			"famka",
			"fccnumb",
			"fccaddr",
			"fcomment"
		);

		$query1 = "INSERT INTO account(";
		$query2 = " VALUES (";
		$output = "";
		
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
				$temp = $_POST[$arrFORM[$i]];
				$output .= "$temp has been added to database | Column: $arrDB[$i] <br>";
				if(is_numeric($_POST[$arrFORM[$i]]))
				{
					$query1 .= "$arrDB[$i], ";
					$query2 .= "$temp, ";
				}
				else
				{
					$query1 .= "$arrDB[$i], ";
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

		// Executing query
		if (mysqli_query($conn, $finalquery)) 
		{
			echo "$output";
		} 
		else 
		{
			echo "Error: " . $finalquery . "<br>" . mysqli_error($conn);
		}


		mysqli_close($conn);
	?>

	<h2> Your new account has been successfully created! </h2>
	

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