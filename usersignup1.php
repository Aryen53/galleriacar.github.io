<!DOCTYPE html>
<html>
<head><title>MACHAKOS UNIVERSITY</title>
<meta name="viewport" content="width=device-width, initial-scale= 1.0" />
<script>
<!--
{
function button2()
document.getElementById("button").innerHTML="Cancelled"
}
-->
</script>
<style type="text/css">
body
{
background-color: #4CAF50;
background-attachment:fixed;
background-repeat:repeat-x;
background-position:center;
background-size:cover;
padding:3px;
overflow:auto;
}
.form
{
	text-align:left;
	position:relative;
}
.form1
{
	text-align:right;
	position:relative;
}
div.transbox
{
box-sizing:border-box;
margin: 30px 50px;
background-color: #ffffff;
border: 1px solid black;
filter: alpha(opacity=60);
}
div.transbox p
{
margin: 30px 40px;
font-weight: bold;
color: #000000;
}
.loginbox
{
line-height:15px;
background-color:black;
color:white;
float:center;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:70px 30px;
border-top-left-radius:50px;
border-bottom-right-radius: 50px;
}
.imgcontainer
{
float:center;
	text-align:center;
}
.container
{
	padding:16px;
	margin: 0px;
	overflow:auto;

}
.label
{
color: #4CAF50;
}
.login
{
text-align:center;
font-size:large;
}
.avatar
{
	height:100px;
	width:100%;
	border-radius:10%;
	float:center;
	position:relative;
}
.button
{
background-color:green;
}
.list
{
	list-style-type:Decimal;
	list-style-position:outside;
}
.tooltip
{
position:relative;
display:inline-block;
}
.tooltip .tooltiptext
{
top:-5px;
left:105%;
padding:7px;
position:absolute;
color:white;
background-color:black;
visibility:hidden;
opacity: 0;
transition: opacity 5s;
z-index: 1;
}
.tooltip:hover .tooltiptext
{
visibility:visible;
opacity: 1;
}
input[type=text], select
{
padding: 5px 10px;
margin: 4px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 20px;
box-sizing: border-box;
-webkit-transition-duration: 0.9s ease-in-out;
transition-duration: 0.9s ease-in-out;
}
@media only screen and (max-width: 600px)
{
input[type=text],select
{
height:20px;
}
input[type=password]
{
height:20px;
}
input[type=email]
{
height:20px;
}
input[type=submit]
{
height:20px;
}
input[type=reset]
{
height:20px;
}
.loginbox{
border-radius: 0px;
}}
input[type=password]
{
padding: 5px 10px;
margin: 4px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 20px;
box-sizing: border-box;
-webkit-transition: width 0.5s ease-in-out;
transition: width 0.5s ease-in-out;
}
input[type=email]
{
padding: 5px 10px;
margin: 4px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 20px;
box-sizing: border-box;
-webkit-transition: width 0.5s ease-in-out;
transition: width 0.5s ease-in-out;
}
.button2
{
padding: 5px 10px;
margin: 8px 0;
background-color: #4CAF50;
color: white;
display: inline-block;
border: none;
border-radius: 20px;
box-sizing: border-box;
cursor: pointer;
-webkit-transition: 0.5s;
transition: 0.5s;
-webkit-transition: width 0.5s ease-in-out;
transition: width 0.5s ease-in-out;
-webkit-animation-name: example;
-webkit-animation-duration: 5s;
animation-iteration-count: infinite;
animation-direction: alternate;
}
.button3{
padding: 5px 10px;
margin: 8px 0;
background-color: #4CAF50;
color: white;
display: inline-block;
border: none;
border-radius: 20px;
box-sizing: border-box;
cursor: pointer;
-webkit-transition: width 0.5s ease-in-out;
transition: width 0.5s ease-in-out;
}
input[type=checkbox]
{
padding: 0px 2px;
margin: 8px 0;
background-color: #4CAF50;
color: white;
display: inline-block;
border: none;
border-radius: 50px;
box-sizing: border-box;
-webkit-transition: width 0.5s ease-in-out;
transition: width 0.5s ease-in-out;
}
@-webkit-keyframes example
{
0% {background-color: #ffaa54;}
50% {background-color: yellow;}
}
.button2:hover
{
background-color: #ffaa54;
}
.button3:hover
{
background-color: #ffaa54;
}
input[type=text]:focus
{
width: 200px;
transition-timing-function: ease-out ;
transition-delay: 0s;
}
input[type=password]:focus
{
width: 200px;
}
input[type=email]:focus
{
width: 200px;
}
.disabled
{
opacity: 0.6;
cursor: not-allowed;
}
.error
{
background-color: red;
text-align: center;
}
</style>
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
<form class="form">
<div class="tooltip">
<span class="tooltiptext">Click to go to Home page</span>
<input class="button" type="button" value="<Home" onclick="window.location='carsale.php'"></div>
</form>
<form class="form1">
<div class="tooltipp">
<input class="button" type="button" value="NEXT>"  onclick='history.forward()'></div>
</form>
<div class="loginbox">
<p class="login">Fill in the fields to sign up as our member.</p>
<img class="avatar" src="PROFILE.PNG" style="opacity:0.4;filter :alpha(opacity=40)" onmouseover="this.style.opacity=0.4;this.filters.alpha.opacity=40"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100" /><br /><br />
<div class="container">
<fieldset><legend></legend>
<div class="frm" >
<form  action = "includes/user.inc.php" method = "POST" name="myForm" onsubmit="return validateForm()">
<label for="ha" class="label">First Name:<input id="ha" type="text" name="first" placeholder="Enter First Name"><br />
<label for="hc">Last Name:<input id="hc" type="text" name="last"  placeholder="Enter Last Name"><br />
<label for="hd">Contact:<input id="hd" type="text" name="contact" placeholder="Enter User Name"><br />
<label for="hf">Email: <input id="hf" type="email" name="email" placeholder="Enter E-mail" min='10'><br />
<label for="hf">Password: <input id="hf" type="password" name="password" placeholder="Enter new password" min='10'><br />
<label for="hg">Confirm Password: <input id="hg" type="password" name="confirm" placeholder="Confirm password"><br /> </div>
<input id="hh" type="checkbox" > <label for="hh" class="label">Remember Password for this site.</label><br />
<input id="hi" type="checkbox" required="required"> <label for="hi" class="label">Confirm that you are not a robot.</label><br />
Or do you already have an account? <a href="ARYENSIGNIN.html">Login Here</a><br />
<button class= "button2" type="submit" name="submit">SUBMIT</button>
<button class= "button3" type="reset" onclick="window.location='carsale.php'">CANCEL</button>
<br />
</form>
</div> 
</fieldset>
</div>
</body>
</html>