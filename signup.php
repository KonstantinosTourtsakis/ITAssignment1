<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
	</nav>
	
	<br> <br> <br>
	<!--<br> <br> <br> <br> <br> <br> -->

	<h2> Your new account has successfully been created! </h2>
	<h3> The following data have been saved. </h3> <br>
	
	Welcome <?php echo $_POST["fname"]; ?>.
	<br> Your father is <?php echo $_POST["ffather"]; ?>
	<br /> You are <?php echo $_POST["fage"]; ?> years old
	<br> Your phone number: <?php echo $_POST["fphone"]; ?>
	<br> Your email address: <?php echo $_POST["fmail"]; ?>
	<br> Your AFM: <?php echo $_POST["fafm"]; ?>
	<br> Your AMKA: <?php echo $_POST["famka"]; ?>
	<br> Your Credit card number: <?php echo $_POST["fccnumb"]; ?>
	<br> Your Credit card expiration date: <?php echo $_POST["fccexp"]; ?>
	<br> Your Credit card address: <?php echo $_POST["fccaddr"]; ?>
	<br> Your comment: <?php echo $_POST["fcomment"]; ?>
	
	

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