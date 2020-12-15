<?php
require 'headerseller.php';
// include 'search.dbh.php';
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/slide.css">
    <title>Seller Page</title>
</head>
<script>
var i=0;
var images = [];
var time = 5000;
images[0]= 'CHANCELLOR.jpg';
images[1]= 'GRADUATION.jpg';
images[2]= 'STUDENTS.jpg';
images[3]= 'SIGN.jpg';
function changeImg(){
document.slide.src = images[i];
	if(i < images.length - 1){
		i++;
	}else{
		i = 0;
	}
	setTimeout("changeImg()", time);

}
window.onload = changeImg;
</script>
  <script>
        function createAccount() {
            var a = document.forms['carcreate']['fname'].value;
            if (a == null || a == "") {
                alert("First Name must be filled !!");
                return false;
            }
            
            var c = document.forms['carcreate']['password'].value;
            if (c == null || c == "") {
                alert("Password must be filled !!");
                return false;
            }
            
        }
    </script>
	</head>
<body>
<br />
<br />

<div>
<?php
/*
$sql = "SELECT first, last FROM sellersignup";
$result = mysqli_query($conn, $sql);
	echo '<table border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>S/no</th><th>First Name</th><th>Last Name</th><th>Admission Number</th><th>Course</th><th>E-mail</th></tr>';

if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
	echo '
	<tr><td>' . $row["id"]. '</td><td>' . $row["first"]. '
</td><td>' . $row["last"]. '</td><td>' . $row["admission"]. '
</td><td>' . $row["course"]. '</td><td>' . $row["email"]. '</tr></ br>';
	}}else{
		echo "<div class='font'>";
	echo "Ooops!! Machakos University have no student signed up yet!";
	echo "</div>";
}
$conn->close();
*/
?>

<?php
/*include_once 'includes/dbh.inc.php';
$sql = "SELECT * FROM cargallery1 ORDER BY orderGallery DESC";
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
Name: '.$row["nameGallery"].'</h3><br />
Contact: '.$row["contactGallery"].' <br />
Location: '.$row["locationGallery"].'
<p>Car Description: '.$row["descGallery"].'</p>
</a>
';	
}
}*/
?>
<div class="forum3">


<?php
$query = "SELECT idGallery FROM cargallery1 ORDER BY idGallery";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo '<h1>Total Cars: '.$row.'</h1>';

?>
</div>
<div class="gallery-links">
<div class="wrapper">
<div class="gallery-container">
<?php
include_once 'includes/dbh.inc.php';
$sql = "SELECT * FROM cargallery1 ORDER BY orderGallery DESC";
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
Name: '.$row["nameGallery"].'</h3><br />
Contact: '.$row["contactGallery"].' <br />
Location: '.$row["locationGallery"].' <br />
Car Description: '.$row["descGallery"].'<br />
Price: Ksh '.$row["priceGallery"].'</a>
';	
}
}
?>
</div>
</div>
</div>
<br />
<br />
<?php
//if(isset($_SESSION['userFirst'])){
echo '<div class="gallery-upload" align="center">
<form action= "includes/car-gallery.inc.php" method="POST" enctype="multipart/form-data">
<input type="text" name="filename" placeholder="Seller name..."><br /><br />
<input type="text" name="filecontact" placeholder="seller contact ..."><br /><br />
<input type="text" name="filelocation" placeholder="seller location..."><br /><br />
<input type="text" name="filedesc" placeholder="car model..."><br /><br />
<input type="text" name="fileprice" placeholder="Price..."><br /><br />
<input type="file" name="file"><br /><br />
<input type="submit" name="submit" value="UPLOAD">
</form>
';
?>
</div>
</div>
<br /><br />

<div class="gallery-linksss">
<div class="gallery-containerrr">

<a href="adminlognew.php" class="">
Login As Admin</a>
<a href="userlognew.php" class="">
Login As Member</a>
<a href="sellerlognew.php" class="">
Login As Car seller</a>
<a href="garagelog.php" class="">
Login As Garage Owner</a>
<a  href="usersignup.php" class="">
Signup As Member</a>
<a  href="sellersignup.php" class="">
Signup As Car seller</a>
<a  href="garagesign.php" class="">
Signup As Garage owner</a>
</div>
</div><br /><br />
<div align="center">
<h2>Developer information</h2></div>
<div class="forum">

<div class="city">
<img src="Aron.jpg"><br /><br />
  <h3>Aron Kipkirui</h3>
  <h3>Developer</h3>
  <p> Aron Kipkirui is a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  
</div>
<div class="city">
<img src="elvo.jpg" height=200><br /><br />
  <h3>Elvis Makambi</h3>
  <h3>Co-developer</h3>
  <p> Elvis Makambiis a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  </div>
<div class="city">
<img src="virginia.jpg" height=250><br /><br />
  <h3>Virginia </h3>
  <p> Virginia Mbithi is a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  </div>
</div>
</body>
</html>