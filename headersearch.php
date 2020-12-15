	
	<?php
/*session_start(); 
$first = $_SESSION['first'];
$last = $_SESSION['last'];*/
 include 'search.dbh.php';

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
    <title>Title</title>
</head>
<body>
    <div class="container">
        <nav class="navbar nav-tabs navbar-expand-lg bg-dark text-light">
            <a class="navbar-brand" href="userpage.php">Car Galleria Kenya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="carproject.php">Home <span class="sr-only">(current)</span></a>
                </li>
				
				 <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="appoint.php">Appointment <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item active">
                    <a class="nav-link" href="carsold.php">Cars Sold <span class="sr-only">(current)</span></a>
                </li>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="forum.php">Forum <span class="sr-only">(current)</span></a>
                </li>
				
           
            
            </ul>
			 <form class="form-inline my-2 my-lg-0" action="search3.php" method="POST">

                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search cars on sale" aria-label="Search" required="required">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
            </form>
          
        </div>
        </nav>



