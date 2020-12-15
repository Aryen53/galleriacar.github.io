<!DOCTYPE html>
<html>
<head><title>ARYEN LAPTOP DEALERS</title>
<meta name="viewport" content="width=device-width, initial-scale= 1.0" />
<meta charset="UTF-8">

<style type="text/css">
body
{
background-color: #4CAF50;
background-attachment:fixed;
background-repeat:no-repeat;
background-position:center;
background-size:cover;
padding:3px;
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
.loginbox
{
line-height:25px;
background-color:black;
color:white;
float:center;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:70px 30px;
border-top-left-radius: 50px;
border-bottom-right-radius: 50px;
}
@media only screen and (max-width: 600px)
{
.loginbox{
border-radius: 0px;
}}
.imgcontainer
{
float:center;
	text-align:center;
	margin:24px 0 12px 0;
}
.container
{
	padding:16px;
}
.login
{
text-align:center;
font-size:large;
}
.avatar
{
	height:120px;
	width:100%;
	border-radius:20%;
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
right:105%;
padding:7px;
position:absolute;
color:white;
background-color:black;
visibility:hidden;
z-index: 1;
opacity: 0;
transition: opacity 5s;
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
input[type=submit]
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
animation-direction: reverse;
}
@-webkit-keyframes example
{
0% {background-color: #ffaa54;}
50% {background-color: yellow;}
}
input[type=reset]
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
-webkit-transition: width 0.5s ease-in-out;
transition: width 0.5s ease-in-out;
}
input[type=submit]:hover
{
background-color: #ffaa54;
}
input[type=reset]:hover
{
background-color: #ffaa54;
}
input[type=text]:hover
{
background-color: #3CBC8D;
}
input[type=password]:hover
{
background-color: #3CBC8D;
}
input[type=email]:hover
{
background-color: #3CBC8D;
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
.label
{
color: #4CAF50;
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
        function validateForm() {
            var email = document.forms['myForm']['email'].value;
            if (email == null || email == "") {
                alert("First Name must be filled !!");
                return false;
            }
            
            var password = document.forms['myForm']['password'].value;
            if (password == null || password == "") {
                alert("Password must be filled !!");
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
<p class="login">Fill in the fields to sign up as our new student.</p>
<img class="avatar" src="PROFILE.PNG" style="opacity:0.4;filter :alpha(opacity=40)" onmouseover="this.style.opacity=0.4;this.filters.alpha.opacity=40"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100" /><br /><br />
<div class="container">
<fieldset><legend></legend>
<div class="frm" >
<form  action = "includes/sellerlog2.php" method = "POST" name="myForm" onsubmit="return validateForm()">
<label for="ha" class="label">First Name:<input id="ha" type="text" name="first" placeholder="First Name"><br />
<label for="ha" class="label">Last Name:<input id="ha" type="text" name="last" placeholder="Last Name"><br />
<label for="hf">Password: <input id="hf" type="password" name="password" placeholder="Enter new password" min='8'><br />
<button class= "button2" type="submit" name="submit">SUBMIT</button>
<button class= "button3" type="reset" onclick="window.location='carsale.php'">CANCEL</button>
</div>
</form>
</fieldset>
<p id="x"></p>
</div>
</body>
</html>