<?php
$_SESSION['a'] = "admin";
include 'project.dbh.php';
?>
<h1>Article Page</h1>
<?php
if(isset($_SESSION['a'])){
$id = mysqli_real_escape_string($conn, $_GET['id']);
$model = mysqli_real_escape_string($conn, $_GET['model']);

$sql = "SELECT sub_model_id, model, body_style, engine, engine_disp FROM submodel WHERE sub_model_id='$id' AND model='$model'";

$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	
	echo "".$queryResult." results found";
	if($queryResult > 0){
		echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Car Name</th><th>Body Style</th><th>Engine</th><th>Engine Displacement</th></tr>';
		while($row = mysqli_fetch_assoc($result)){
			echo '
			<tr>
			<td><h3>'.$row['sub_model_id'].'</h3></td>
			<td><h3>'.$row['model'].'</h3></td>
			<td><h3>'.$row['body_style'].'</h3></td>
			<td><h3>'.$row['engine'].'</h3></td>
			<td><h3>'.$row['engine_disp'].'</h3></td>
			</tr><br />
			';
		}
}}
?>
