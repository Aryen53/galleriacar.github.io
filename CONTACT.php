<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="REGISTERED.css" />
<script>
function validateForm()
{
	var name = document.forms["myForm"]["name"].value;
	if(name == null || name == ""){
		alert("Name must be filled out!");
return false;}
var adm = document.forms["myForm"]["adm"].value;
	if(adm == null || adm == ""){
		alert("Admission must be filled out!");
return false;}
var text = document.forms["myForm"]["textarea"].value;
	if(text == null || text == ""){
		alert("You need to write something here!");
return false;
}
</script>
</head>
<body>
<div align="center">
<div class="machakos">
<a href="Aryenn.php"><img src="logo.png" align="center"></a>
<b><u color="red"><font size=4 color="dark-yellow">ARYEN SCHOOLS.</font></u></b>
Soaring heights in transforming Industry and Economy</div>
<button class="dropbtn"><a href="Aryenn.php">HOME</a></button>
<button class="dropbtn"><a href="GALLERY.php">PICTURE GALLERY</a></button>
<button class="dropbtn"><a href="assignmentsignup.php">SIGN UP AS STUDENT</a></button>

<div class="dropdown">
<button class="dropbtn">DISCOVER ARYEN</button>
<div class="dropdown-content">
<a href="REGISTERED.php">REGISTERED STUDENTS</a>
<a href="OURSTAFF.php">OUR STAFF</a>
<a href="OFFICERS.html">SCHOOL OFFICERS</a>
</div></div>
<button class="dropbtn"><a href="ARYENSIGNIN.php">LOGIN AS ADMIN</a></button>
<button class="dropbtn"><a href="CONTACT.php">CONTACT ARYEN</a></button>
<button class="dropbtn"><a href="ARYENCHAT.php">CHAT</a></button>
<h3 class="fontt">Contact Us</h3><br /></br /><br />
<div class="loginbox">
<form  action = "includes/contactdb.php" method = "POST" name="myForm" onsubmit="return validateForm()">
<label for="ha" class="label">Name:<input id="ha" type="text" name="name" placeholder="Enter First Name"><br />
<label for="hd">Admission Number:<input id="hd" type="text" name="adm" placeholder="Enter User Name"><br />
<label for="he">Text Here: <input id="he"  type="textarea" name="textarea" placeholder="Write something"><br />
<button class= "button2" type="submit" name="submit" value="SUBMIT">SUBMIT
<button class= "button3" type="reset" value="CANCEL" onclick="window.location='Aryenn.php'">CANCEL
</form>
</div><br />
</div>
</body>
</html>