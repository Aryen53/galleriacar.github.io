 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update user information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log in.css"/>
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
		alert("username Name must be filled out!");
return false;}
var contact = document.forms["myForm"]["contact"].value;
	if(contact == null || contact == ""){
		alert("Contact must be filled out!");
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

</script>
</head>
<body>
   
   <div class="Back">
                <i class="fa fa-arrow-left" onclick="Back()"></i>
            </div>
            <p class="h2 text-center"><b>UPDATE PROFILE</b></p>
			<p class="h3 text-center"><i><small id="avatar" class="form-text text-danger">All fields are compulsory</small></i></p>
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
				}else if($_GET['error'] == "Invalid Password"){
					echo '<p class="form-text text-danger"> Password should be at least 8 characters in length and should include at least one uppercase letter, one number and one special character!.</p>';
			}
			}
			 else if(isset($_GET['update'])){
			if($_GET['update'] == "success"){

	echo '<p class="form-text text-danger"> Signup successful !</p>';
			}
			}
			?>
<form  action = "includes/userupdate.php" method = "POST" name="myForm">
<!-- onsubmit="return validateForm()">-->

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
	if(isset($_GET['email'])){
		$email = $_GET['email'];
		echo '    <input class="form-control"  type="email" name="email" placeholder="Enter Email" value="'.$email.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="email" name="email" placeholder="Enter Email"><br />
						<span class="Error"></span>';
	}
	?>
              <!-- <input class="form-control" id="ha" type="text" name="first" placeholder="First Name"><br />
                    <span class="Error"></span>
			<input class="form-control" id="ha" type="text" name="last" placeholder="Last Name"><br />
                    <span class="Error"></span>
						<input class="form-control" id="ha" type="text" name="username" placeholder="Username"><br />
                    <span class="Error"></span>
                   <input class="form-control" id="ha" type="text" name="contact" placeholder="contact"><br />
                    <span class="Error"></span>
			<input class="form-control" id="ha" type="email" name="email" placeholder="email"><br />
                    <span class="Error"></span>-->
                   <input class="form-control" id="ha" type="password" name="pwd" placeholder="Enter password"><br />
                    <span class="Error"></span>
		<input class="form-control" id="ha" type="password" name="confirm" placeholder="Confirm Password"><br />
                    <span class="Error"></span>
				<button id = "submit" class= "btn btn-primary btn-block" type="submit" name="submit">SUBMIT</button>

                </div>