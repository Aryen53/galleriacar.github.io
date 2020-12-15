	
	<?php
session_start(); 
$first = $_SESSION['first'];
$last = $_SESSION['last'];
 include 'search.dbh.php';
 include 'includes/sellerlog2.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale= 1.0" />
<link rel="styleSheet" type="text/css" href="aryenn.css" />
<title>
ARYEN SCHOOLS</title>
	</head>
	<body>
	<div class="machakos">
<a href="Aryenn.php"><img src="logo.png" align="center"></a>
<b><u color="red"><font size=4 color="dark-yellow">ARYEN SCHOOLS.</font></u></b>
Soaring heights in transforming Industry and Economy 
<button class="dropbtn"><a href="car.php">HOME</a></button>
<button class="dropbtn"><a href="userlog.php">LOGIN AS USER</a></button>
<button class="dropbtn"><a href="ARYENCHAT.php">CHAT</a></button>
<p>Hello <?php echo htmlspecialchars($first);?>
<? echo " ";?>
<?php echo htmlspecialchars($last);?>
</p>