<?php
$_SESSION['a'] = "admin";
include 'project.dbh.php';
?>
<h1>Article Page</h1>
<?php
if(isset($_SESSION['a'])){
$model = mysqli_real_escape_string($conn, $_GET['submodel']);

$sql = "SELECT model_id, sub_model FROM submodel WHERE sub_model='$model'";

$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	
	echo "".$queryResult." results found";
	if($queryResult > 0){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Model</th></tr>';
		while($row = mysqli_fetch_assoc($result)){
			echo '
			<tr>
			<td><h3>'.$row['model_id'].'</h3></td>
			<td><h3>'.$row['sub_model'].'</h3></td>
			</tr><br />
			';
		}
}}
?>
