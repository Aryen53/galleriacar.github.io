<?php
require 'headeradmin.php';
 //$_SESSION['username'] = "Admin";
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
    <title>Admin Page</title>
			<script>
function validateForm()
{
	var search = document.forms["myForm"]["search"].value;
	if(search == null || search == ""){
		alert("search must be filled out!");
return false;}

}

</script>
</head>
<body>
    <br />
    <br />
    <br />
  
        <div class="gallery">
            <div id="carousel">
                <figure><img src="images/Bentley-Continental-GT-W12.jpg"></figure>
                <figure><img src="images/bugatti-chiron-sport.jpg" alt=""></figure>
                <figure><img src="images/bugatti-veyron-super-sport.jpg" alt=""></figure>
                <figure><img src="images/chevrolet-corvette-zr1.jpg" alt=""></figure>
                <figure><img src="images/Hennessey-Venom-F5.jpg" alt=""></figure>
            </div>
        </div><br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
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
  <p> Aron Kipkirui is a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  
</div>
<div class="city">
<img src="Aron.jpg"><br /><br />
  <h3>Aron Kipkirui</h3>
  <p> Aron Kipkirui is a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  </div>
<div class="city">
<img src="Aron.jpg"><br /><br />
  <h3>Aron Kipkirui</h3>
  <p> Aron Kipkirui is a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  </div>

    </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>