<?php
require 'headercars.php';
?>
<title>
Garage Owner Sign Up
</title>
<!--<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log in.css"/>
<meta name="viewport" content="width=device-width, initial-scale= 1.0" />-->
<script>
function validateForm()
{
	var first = document.forms["myForm"]["first"].value;
	if(first == null || first == ""){
		alert("First Name must be filled out!");
return false;}
var last = document.forms["myForm"]["last"].value;
	if(last == null || last == ""){
		alert("Last Name must be filled out!");
return false;}
var username = document.forms["myForm"]["username"].value;
	if(username == null || username == ""){
		alert("Username Name must be filled out!");
return false;}
var contact = document.forms["myForm"]["contact"].value;
	if(contact == null || contact == ""){
		alert("Contact must be filled out!");
return false;}
var gname = document.forms["myForm"]["gname"].value;
	if(gname == null || gname == ""){
		alert("Garage Name must be filled out!");
return false;}
var location = document.forms["myForm"]["location"].value;
	if(location == null || location == ""){
		alert("Location must be filled out!");
return false;}
var services = document.forms["myForm"]["services"].value;
	if(services == null || services == ""){
		alert("Services offered must be filled out!");
return false;}

var email = document.forms["myForm"]["email"].value;
	if(email == null || email == ""){
		alert("Email must be filled out!");
return false;}
var pass = document.forms["myForm"]["password"].value;
	if(pass == null || pass == ""){
		alert("Password must be filled out!");
return false;}
var confirm = document.forms["myForm"]["confirm"].value;
	if(confirm == null || confirm == ""){
		alert("Password must be filled out!");
return false;}
	if(confirm!=pass){
		alert("Passwords must be similar!");
		return false;
}
}
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 8 || x > 15) {
        text = "Retry Password between 8 and 15 characters";
    } else {
        text = "Correct Password";
    }
    document.getElementById("demo").innerHTML = text;
}
function myFunction() {
    var inpObj = document.getElementById("id1");

    if (inpObj.checkValidity() == false) {
        document.getElementById("demo").innerHTML = inpObj.validationMessage;
    }
}
</script>
</head>
<body>
<div class="bg-modal">
			<div class="modall-content">
		<!--<img src = "icon.jpg" alt ="" height="50px" width="300px" align="center">-->

    <div class="container">
            
            <p class="h4 text-center"><b>Sign up credentials</b></p>
<!--<small  class="form-text text-danger">Fill all fields</small>-->
			<?php
			if(isset($_GET['error'])){
				if($_GET['error'] == "emptyfields"){
					echo '<p class="form-text text-danger"> Fill in all fields!</p>';
				}else if($_GET['error'] == "invalidemailusername"){
					echo '<p class="form-text text-danger"> Invalid email and Username!</p>';
				}
				else if($_GET['error'] == "invalidemail"){
					echo '<p class="form-text text-danger"> Invalid email !</p>';
				}else if($_GET['error'] == "invalidusername"){
					echo '<p class="form-text text-danger"> Invalid Username !</p>';
				}else if($_GET['error'] == "passwordcheck"){
					echo '<p class="form-text text-danger"> Your Password do not match !</p>';
				}else if($_GET['error'] == "Try another username"){
					echo '<p class="form-text text-danger"> Username Taken !</p>';
			}else if($_GET['error'] == "Contact Already Exists"){
					echo '<p class="form-text text-danger"> Contact Already Exists !</p>';
			}
			else if($_GET['error'] == "Email Already Exists"){
					echo '<p class="form-text text-danger"> Email Already Exists !</p>';
			}else if($_GET['error'] == "Invalid Password"){
					echo '<p class="form-text text-danger"> Password should be at least 8 characters in length and should include at least one uppercase letter, one number and one special character!.</p>';
			}
			}
			 else if(isset($_GET['signup'])){
			if($_GET['signup'] == "success"){

	echo '<p class="form-text text-danger"> Signup successful !</p>';
			}
			}
			?><form  action = "includes/garage.inc.php" method = "POST" >
			<!--name="myForm" onsubmit="return validateForm()"-->
						<?php
	if(isset($_GET['first'])){
		$first = $_GET['first'];
		echo '    <input class="form-control"  type="text" name="first" placeholder="Enter First Name" value="'.$first.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="first" placeholder="Enter First Name"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['last'])){
		$last = $_GET['last'];
		echo '    <input class="form-control"  type="text" name="last" placeholder="Enter Last Name" value="'.$last.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="last" placeholder="Enter Last Name"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['username'])){
		$username = $_GET['username'];
		echo '    <input class="form-control"  type="text" name="username" placeholder="Enter Username" value="'.$username.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="username" placeholder="Enter Username"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['contact'])){
		$contact = $_GET['contact'];
		echo '    <input class="form-control"  type="number" min="0100000000" max="100000000000" name="contact" placeholder="Enter Contact" value="'.$contact.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control"  type="number" min="0100000000" max="100000000000" name="contact" placeholder="Enter Contact"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['gname'])){
		$gname = $_GET['gname'];
		echo '    <input class="form-control"  type="text" name="gname" placeholder="Enter Garage Name" value="'.$gname.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="gname" placeholder="Enter Garage Name"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['location'])){
		$location = $_GET['location'];
		echo '    <input class="form-control"  type="text" name="location" placeholder="Enter Location" value="'.$location.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="location" placeholder="Enter Location"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['services'])){
		$services = $_GET['services'];
		echo '    <input class="form-control"  type="text" name="services" placeholder="Enter Services Offered" value="'.$services.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="services" placeholder="Enter Services Offered"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['email'])){
		$email = $_GET['email'];
		echo '    <input class="form-control"  type="email" name="email" placeholder="Enter Email" value="'.$email.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="email" name="email" placeholder="Enter Email"><br />
						<span class="Error"></span>';
	}
	
	?>
                <!--  <input class="form-control" id="ha" type="text" name="first" placeholder="Enter First Name"><br />
                    <span class="Error"></span>
            <input class="form-control" id="ha" type="text" name="last"  placeholder="Enter Last Name"><br />
                    <span class="Error"></span>
			<input class="form-control" id="ha" type="text" name="username"  placeholder="Enter Username"><br />
                    <span class="Error"></span>
			<input class="form-control" id="id1" type="number" min="0100000000" max="100000000000" name="contact" placeholder="Enter Contact"><br />                   
                    <span class="Error"></span>
			<input class="form-control" id="ha" type="text" name="gname" placeholder="Garage name"><br />
                    <span class="Error"></span>
			<input class="form-control" id="ha" type="text" name="location" placeholder="Enter location"><br />
                    <span class="Error"></span>
			<input class="form-control" id="ha" type="text" name="services" placeholder="Enter services offered"><br />
                    <span class="Error"></span>
			<input class="form-control" id="ha" type="email" name="email" placeholder="Enter E-mail" min='10'><br />
                    <span class="Error"></span>-->
                 <input class="form-control" id="numb" type="password" name="password" placeholder="Enter password" min ="8"> <br />
                    <span class="Error"></span>
              <input class="form-control" id="hf" type="password" name="confirm" placeholder="Confirm password" min='8'>
                    <span class="Error"></span>
				Or do you already have an account? <a href="garagelog.php">Login Here</a><br /><br />
				<button id = "submit" class= "btn btn-primary btn-block" type="submit" name="submit" onclick="myFunctionn()">SUBMIT</button>
<p id="demo"></p>
            </form>
        </div>
    </div>	</div>
			</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
</body>
</html>