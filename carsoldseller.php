<?php
require 'headerseller.php';

 //$_SESSION['username'] = "Admin";
?>
<!DOCTYPE html>
<html>
<head>
<title>Seller Car viewing</title>
</head>
<body>
<br />
<br />
<div class="forum3">


<?php
$query = "SELECT idGallery FROM cargallery1 ORDER BY idGallery";
$query_run = mysqli_query($connn, $query);
$row = mysqli_num_rows($query_run);
echo '<h1>Total Cars: '.$row.'</h1>';

?>
</div>
</div>
<br />
<section class="gallery-links">
<div class="wrapper">
<div class="gallery-container">
<?php
include_once 'includes/dbhh.php';
$sql = "SELECT * FROM cargallery1 ORDER BY orderGallery DESC";
$stmt = mysqli_stmt_init($connn);
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
Car Description: '.$row["descGallery"].'</p></a>
';	
}
}
?>

</div>

</body>
</html>