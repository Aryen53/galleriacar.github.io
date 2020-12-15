<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/slide.css">
    <title>Title</title></head>


<body>
    <div class="container">
        <nav class="navbar nav-tabs navbar-expand-lg bg-dark text-light">
            <a class="navbar-brand" href="carproject.php">Galleria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

          
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
            <form class="form-inline my-2 my-lg-0" action="search4.php" method="POST">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search cars on sale" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
            </form>
				<div id="mySidenav" class="sidenav"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="#">About</a>
		<a href="#">About</a>
		<a href="#">About</a>
		<a href="#">About</a>
		
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
  <h2>Aron Kipkirui</h2>
  <h2>Developer</h2>
  <p> Aron Kipkirui is a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  
</div>
<div class="city">
<img src="Aron.jpg"><br /><br />
  <h2>Elvis Makambi</h2>
  <h2>Co-developer</h2>
  <p> Aron Kipkirui is a second year IT student at Machakos University.</p>
  <p>He has experience in languages i.e Php both front end and backend,</p>
  <p>SQL databases,Object oriented languages i.e C,C++ and Java</p>
  </div>
<div class="city">
<img src="Aron.jpg"><br /><br />
  <h2>Aron Kipkirui</h2>
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

</body>
</html>