<!DOCTYPE html>
<html>
<head>
	<title>Query</title>
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

		$query = "SELECT * FROM account WHERE ";
		
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
					if($i > 0)
					{
						$query .= " AND ";
					}
					$temp = $_POST[$arrFORM[$i]];
					$dbfield = "$arrDB[$i]";
					$query .= "$dbfield = $temp";
				}
				else
				{
					if($i > 0)
					{
						$query .= " AND ";
					}

					$temp = $_POST[$arrFORM[$i]];
					$dbfield = "$arrDB[$i]";
					$query .= "$dbfield = \"$temp\"";
				}
				
			}
		}
		
		echo "$query <br>";

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
		

		// executing SQL SELECT query
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0) 
		{
  			// output data of each row
  			while($row = mysqli_fetch_assoc($result)) 
  			{
  				$output = "";
    			for($i = 0; $i < count($arrDB); $i++)
    			{
    				$temp1 = $arrDB[$i];
    				$temp2 = $row["$temp1"];
    				$output .= "$temp1: $temp2 |";
    			}
    			echo "$output <br>";
  			}
		} 
		else 
		{
  			echo "0 results <br>";
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