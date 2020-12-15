<?php
//session_start(); 

 //$_SESSION['username'] = "Admin";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="REGISTERED.css" />
</head>
<body>
<div class="machakos">
<a href="Aryenn.php"><img src="logo.png" align="center"></a>
<b><u color="red"><font size=4 color="dark-yellow">ARYEN SCHOOLS.</font></u></b>
Soaring heights in transforming Industry and Economy 
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
</div><div>

<h2 class="ttle">Education for Industrial Economic Transformation</h2>
<h4 class="fontt">The Mission of ARYEN SCHOOLS is to provide scholarly Education through Trainng, Research and innovation for Industrial and Socio-Economic Transformation of our communities.</h4></div>
<section class="gallery-links">
<div class="wrapper">
<div class="gallery-container">
<?php
include_once 'includes/dbh.inc.php';
$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
$stmt = mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL statement failed!";
}else{
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	while($row = mysqli_fetch_assoc($result)){
	echo '<a href="#">
<div style="background-image: url(uploads/Gallery/'.$row["imgFullNameGallery"].');">
</div>
<h3>'.$row["titleGallery"].'</h3>
<p>'.$row["descGallery"].'</p></a>
';	
}
}
?>
</div>

</body>
</html>