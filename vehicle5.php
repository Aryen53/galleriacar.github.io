<?php
$_SESSION['a'] = "admin";
include 'project.dbh.php';
?>
<h1>Article Page</h1>
<?php
if(isset($_SESSION['a'])){
$model = mysqli_real_escape_string($conn, $_GET['submodel']);

$sql = "SELECT model_id, sub_model FROM submodel WHERE sub_model='$model'";
$resultSet = "SELECT sub_model_id, model, body_style, engine, engine_disp FROM submodel WHERE sub_model_id OR model LIKE '%$model%'";
$result = mysqli_query($conn, $resultSet);
	$queryResult = mysqli_num_rows($result);
	
	echo "".$queryResult." results found";
	if($queryResult > 0){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Model</th><th>Body Style</th><th>Engine</th><th>Engine Displacement</th></tr>';
		while($row = mysqli_fetch_assoc($result)){
			echo '<a href="vehicle3.php?id='.$row['sub_model_id'].'&model='.$row['model'].'">
			<tr>
			<td><a href="vehicle1.php?id='.$row['sub_model_id'].'&model='.$row['model'].'"><h3>'.$row['sub_model_id'].'</h3></td>
			<td><a href="vehicle1.php?id='.$row['sub_model_id'].'&model='.$row['model'].'"><p>'.$row['model'].'</p></td>
			<td><a href="vehicle1.php?id='.$row['sub_model_id'].'&model='.$row['model'].'"><p>'.$row['body_style'].'</p></td>
			<td><a href="vehicle1.php?id='.$row['sub_model_id'].'&model='.$row['model'].'"><p>'.$row['engine'].'</p></td>
			<td><a href="vehicle1.php?id='.$row['sub_model_id'].'&model='.$row['model'].'"><p>'.$row['engine_disp'].'</p></td>
			</tr><br />
			';
		}
}}
?>
