<?php 
 include 'project.dbh.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="REGISTERED.css" />
</head>
<body>
<div align="center">
<h1> SEARCH PAGE</h1>
<?php
if(isset($_POST['submit'])){
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	$sql = "SELECT make_id, make_name FROM makes WHERE  make_id LIKE '%$search%' OR make_name LIKE '%$search%'";
	
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	echo'<br/ >';
	echo "<div class='sze'>".$queryResult." results found </div>";
	if($queryResult > 0){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Car Make</th></tr>';

		while($row = mysqli_fetch_assoc($result)){
			echo '<a href="vehicle1.php?id='.$row['make_id'].'&name='.$row['make_name'].'"><tr><div class="article-box">
			<td><h3><a href="vehicle1.php?id='.$row['make_id'].'&name='.$row['make_name'].'">'.$row['make_id'].'</h3></td>
			<td><p><a href="vehicle1.php?id='.$row['make_id'].'&name='.$row['make_name'].'">'.$row['make_name'].'</p></td>
			</div></tr><br />
			';
		}
}}
	if(isset($_POST['submit'])){
	$sql = "SELECT model_id,sub_model FROM model WHERE model_id LIKE '%$search%' OR sub_model LIKE '%$search%'";
	
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	echo'<br/ >';
	echo "<div class='sze'>".$queryResult." results found</div>";
	if($queryResult > 0){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Model</th></tr>';

		while($row = mysqli_fetch_assoc($result)){
			echo '<a href="vehicle2.php?id='.$row['model_id'].'&submodel='.$row['sub_model'].'"><tr><div class="article-box">
			<td><h3><a href="vehicle2.php?id='.$row['model_id'].'&submodel='.$row['sub_model'].'">'.$row['model_id'].'</h3></td>
			<td><p><a href="vehicle2.php?id='.$row['model_id'].'&submodel='.$row['sub_model'].'">'.$row['sub_model'].'</p></td>
			</div></tr><br />
			';
		}
	}
}

	if(isset($_POST['submit'])){
	$sql = "SELECT sub_model_id, model, body_style, engine, engine_disp FROM submodel WHERE sub_model_id LIKE '%$search%' OR model LIKE '%$search%' OR body_style LIKE '%$search%' OR engine LIKE '%$search%' OR engine_disp LIKE '%$search%'";
	
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	echo'<br/ >';
	echo "<div class='sze'>".$queryResult." results found</div>";
	if($queryResult > 0){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Model</th><th>Body Style</th><th>Engine</th><th>Engine Displacement</th></tr>';

		while($row = mysqli_fetch_assoc($result)){
			echo '<a href="vehicle3.php?id='.$row['sub_model_idmodel_id'].'&model='.$row['model'].'"><tr><div class="article-box">
			<td><h3><a href="vehicle3.php?id='.$row['sub_model_id'].'&model='.$row['model'].'">'.$row['sub_model_id'].'</h3></td>
			<td><p><a href="vehicle3.php?id='.$row['sub_model_id'].'&model='.$row['model'].'">'.$row['model'].'</p></td>
			<td><p><a href="vehicle3.php?id='.$row['sub_model_id'].'&model='.$row['model'].'">'.$row['body_style'].'</p></td>
			<td><p><a href="vehicle3.php?id='.$row['sub_model_id'].'&model='.$row['model'].'">'.$row['engine'].'</p></td>
			<td><p><a href="vehicle3.php?id='.$row['sub_model_id'].'&model='.$row['model'].'">'.$row['engine_disp'].'</p></td>
			</div></tr><br />
			';
		}
	}
}
?>