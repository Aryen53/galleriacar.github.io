<?php 
 include 'search.dbh.php';
 require 'headersearch.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="REGISTERED.css" />
</head>
<body>

<h1> SEARCH PAGE</h1>
<?
/*if(isset($_POST['submit'])){
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	$sql = "SELECT idGallery, nameGallery, contactGallery, locationGallery, descGallery FROM cargallery1 WHERE idGallery LIKE '%$search%' OR nameGallery LIKE '%$search%' OR contactGallery LIKE '%$search%' OR locationGallery LIKE '%$search%' OR descGallery LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
if($queryResult > 0 ){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Name of the seller</th><th>seller contact</th><th>seller location</th><th>car description</th></tr>';

		while($row = mysqli_fetch_assoc($result)){
			echo '<tr><div class="article-box">
			<td>'.$row['idGallery'].'</h3></td>
			<td><p>'.$row['nameGallery'].'</p></td>
			<td><p>'.$row['contactGallery'].'</p></td>
			<td><p>'.$row['locationGallery'].'</p></td>
			<td><p>'.$row['descGallery'].'</p></td>
			</div></tr><br />
			';
		}
}}
else{
	echo "No results found on cars on sell";
}*/
?>

<?php
if(isset($_POST['submit'])){
	$search = mysqli_real_escape_string($conn, $_POST['search']);

	$resultSet = "SELECT gname, location, services FROM garagesignup WHERE gname LIKE '%$search%' OR location LIKE '%$search%' OR services LIKE '%$search%'";
	$result2 =  mysqli_query($conn, $resultSet);

	$resultQuery = mysqli_num_rows($result2);
	echo'<br/ >';
	
		if( $resultQuery > 0){
			echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Garage Name</th><th>Location</th><th>Services offered</th></tr>';
		while($row = mysqli_fetch_assoc($result2)){
			echo '<tr>
			<td><p>'.$row['gname'].'</p></td>
			<td><p>'.$row['location'].'</p></td>
			<td><p>'.$row['services'].'</p></td>
			
			</tr><br />
			';
		}
		}
		}
else{
	echo "No results found on any garage";
}
	
?>
</div>
</div>
</body>
</html>