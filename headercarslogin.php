<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/slide.css">
    <title>Title</title>

</head>
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
            <form class="form-inline my-2 my-lg-0" action="search3.php" method="POST">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search cars on sale" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
            </form>
        </div>
        </nav>