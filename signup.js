





// This function is used to validate the Sign Up form fields
function validateSignUpForm() 
{
	let username = document.forms["signUpForm"]["fname"].value;
	let father = document.forms["signUpForm"]["ffather"].value;
	let age = document.forms["signUpForm"]["fage"].value;
	let email = document.forms["signUpForm"]["fmail"].value;
	let ccexp_date = document.forms["signUpForm"]["fccexp"].value;
	let afm = document.forms["signUpForm"]["fafm"].value;
	let ccnumb = document.forms["signUpForm"]["fccnumb"].value;
	//let ccexp_date = document.forms["signUpForm"]["fccexp"].value;
	//let amka = document.forms["signUpForm"]["famka"].value;
	let ccaddr = document.forms["signUpForm"]["fccaddr"].value;



	//Validating each of the above fields
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

	if (Date.parse(ccexp_date) < Date.now()) 
	{
    	//document.getElementById('InsertRecordGuestOrders_Delivery_date').value = '';
    	alert("Credit card expiration date has to be later than today");
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

	// AFM field validation
	if(afm == "")
	{
		alert("Afm must be filled out");
		return false;
	}

	//Credit card number field validation
	if(ccnumb == "")
	{
		alert("Credit card number must be filled out");
		return false;
	}

	

	// Credit card address field validation
	if(ccaddr == "")
	{
		alert("Credit card address must be filled out");
		return false;
	}


}