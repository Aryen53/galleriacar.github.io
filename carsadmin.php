<?php
require 'headeradmin.php';
include_once 'includes/dbhh.php';
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
    <title>Galleria Cars</title>
</head>
<body>
<br />
<br />
<br />
<div class="gallery-links">
<div class="gallery-container">
<?php
$sql = "SELECT * FROM cargallery1 ORDER BY orderGallery DESC";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL statement failed!";
}else{
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	while($row = mysqli_fetch_assoc($result)){
	echo '<a href="#">
<div style="background-image: url(uploads/Gallery/'.$row["imgFullNameGallery"].');">
</div>
Name: '.$row["nameGallery"].'<br />
Contact: '.$row["contactGallery"].' <br />
Location: '.$row["locationGallery"].' <br />
Car Description: '.$row["descGallery"].'</a>
';	
}
}
?>
</div>
</div>
<div class="forum">
    <table border=1 cellpadding=1 cellspacing=1>
	<tr>
	<th>ID</th>
	<th>Seller's Name</th>
	<th>Seller's contact</th>
	<th>Location of seller</th>
	<th>Car Description</th>
	<th>Delete</th>
	</tr>
        <?php
		$sql = "SELECT idGallery,  nameGallery, contactGallery, locationGallery, descGallery FROM cargallery1";
$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row['idGallery']."</td>";
	echo "<td>".$row['nameGallery']."</td>";
	echo "<td>".$row['contactGallery']."</td>";
	echo "<td>".$row['locationGallery']."</td>";
	echo "<td>".$row['descGallery']."</td>";
	echo "<td><a href=includes/carsdelete.php?id=".$row['idGallery'].">Delete</a></td>";
	echo "</ br>";
	
}
?>
<?php
$query = "SELECT idGallery FROM cargallery1 ORDER BY idGallery";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo '<h1>Total Cars: '.$row.'</h1>';

?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>