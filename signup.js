

// This file is used to validate the Sign Up form fields



function validateSignUpForm() 
{
	let username = document.forms["signUpForm"]["fname"].value;
	let father = document.forms["signUpForm"]["ffname"].value;
	let age = document.forms["signUpForm"]["fage"].value;
	let email = document.forms["signUpForm"]["fmail"].value;
	//let afm = document.forms["signUpForm"]["fafm"].value;
	//let amka = document.forms["signUpForm"]["famka"].value;
	let ccaddr = document.forms["signUpForm"]["fccaddr"].value;

	// Name field validation
	if (username == "") 
	{
	  alert("Name must be filled out");
	  return false;
	}

	if(/[^a-zA-Z ]/.test(username))
	{
		alert("Name must only contain letters");
		return false;
	}

	if(!username.includes(" "))
	{
		alert("You must include both your first and last name");
		return false;
	}

	// Father's name field validation
	if(/[^a-zA-Z]/.test(father))
	{
		alert("Father's name must only contain letters");
		return false;
	}

	// Age field validation
	if(age == "")
	{
		alert("Age must be filled out");
		return false;
	}

	if(age < 18)
	{
		alert("You must be older than 18 to sign up");
		return false;
	}



	// Email field validation
	if(email.toString() == "")
	{
		alert("Email must be filled out");
		return false;
	}

	if(!email.toString().includes("."))
	{
		alert("Email must include a dot");
		return false;
	}

	// Credit card address field validation
	if(ccaddr == "")
	{
		alert("Credit card address must be filled out");
		return false;
	}







}