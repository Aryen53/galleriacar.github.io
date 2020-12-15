<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/slide.css">
    <title>Galleria</title>
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
    <div class="container">
        <nav class="navbar nav-tabs navbar-expand-lg bg-dark text-light">
            <a class="navbar-brand" href="carproject.php">Galleria</a>
           <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>
			                <span class="navbar-toggler-icon"></span>-->


          
                    <a class="nav-link" href="carproject.php">Home <span class="sr-only">(current)</span></a>
               
	
				
				
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sign up
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="usersignup.php">Members</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sellersignup.php">Car Seller</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="garagesign.php">Garage owner</a>
                </div>
            </li>
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="adminlognew.php">Admin</a>
					<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="userlognew.php">Members</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sellerlognew.php">Car Seller</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="garagelog.php">Garage owner</a>
                </div>
            </li>
            
            </ul>
            <form class="form-inline my-2 my-lg-0" action="search4.php" method="POST" name="myForm" onsubmit="return validateForm()">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search cars on sale" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
            </form>
			<br />
		 <br /><br /><br />
				<div id="mySidenav" class="sidenav"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<br />
				<br />
				                    <a class="nav-link" href="carproject.php">Home <span class="sr-only">(current)</span></a>
				<br />

		 <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sign up
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" color="blue">
                    <a class="dropdown-item" href="usersignup.php" >Members</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sellersignup.php">Car Seller</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="garagesign.php">Garage owner</a>
                </div>
            </li>	<br />
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="adminlognew.php">Admin</a>
					<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="userlognew.php">Members</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sellerlognew.php">Car Seller</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="garagelog.php">Garage owner</a>
                </div>
            </li>
		 </div>
		 <span style="font-size: 30px; cursor: pointer"onclick="openNav()">&#9776</span>
        </div>
	
        </nav>
     <br /><br />
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
			
        </div>

<br /><br />
<br />
<br />
<br /><br />
<br />
<br />
<div class="gallery-linkss">
<div class="gallery-containerr">

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
<img src="Elvis.jpeg"><br /><br />
  <h3>Elvis Makambi</h3>
  <h3>Co-developer</h3>
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
    </div>
	<script>
	function openNav(){
		document.getElementById("mySidenav").style.width = "250px";
	}
	function closeNav(){
		document.getElementById("mySidenav").style.width = "0";
	}
	</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>