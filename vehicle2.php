<?php
$_SESSION['a'] = "admin";
include 'project.dbh.php';
?>
<h1>Article Page</h1>
<?php
if(isset($_SESSION['a'])){
$id = mysqli_real_escape_string($conn, $_GET['id']);
$submodel = mysqli_real_escape_string($conn, $_GET['name']);

$sql = "SELECT make_id, make_name FROM makes WHERE make_id='$id' AND make_name='$submodel'";
$resultSet = "SELECT model_id, sub_model FROM model WHERE model_id LIKE '%$id%' OR sub_model LIKE '%submodel%'";
$result = mysqli_query($conn, $resultSet);
	$queryResult = mysqli_num_rows($result);
	
	echo "".$queryResult." results found";
	if($queryResult > 0){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Model</th></tr>';
		while($row = mysqli_fetch_assoc($result)){
			echo '<a href="vehicle3.php?submodel='.$row['sub_model'].'">
			<tr>
			<td><a href="vehicle3.php?submodel='.$row['sub_model'].'"><h3>'.$row['model_id'].'</h3></td>
			<td><a href="vehicle3.php?submodel='.$row['sub_model'].'"><p>'.$row['sub_model'].'</p></td>
			</tr><br />
			';
		}
}}
?>
