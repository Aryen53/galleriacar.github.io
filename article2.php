<?php
$_SESSION['b'] = "user";
include 'search.dbh.php';
?>
<h1>Article Page</h1>
<?php

if(isset($_SESSION['b'])){
	$first = mysqli_real_escape_string($conn, $_GET['first']);
$adm = mysqli_real_escape_string($conn, $_GET['adm']);

$sql = "SELECT id, first, last, admission, course, email FROM student2 WHERE first='$first' AND admission='$adm'";

$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	
	echo "".$queryResult." results found";
	if($queryResult > 0){
		echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Admission</th><th>Course</th><th>E-mail</th></tr>';
		while($row = mysqli_fetch_assoc($result)){
			echo '
			<tr>
			<td><h3>'.$row['id'].'</h3></td>
			<td><p>'.$row['first'].'</p></td>
			<td><p>'.$row['last'].'</p></td>
			<td><p>'.$row['admission'].'</p></td>
			<td><p>'.$row['course'].'</p></td>
			<td><p>'.$row['email'].'</p></td>
			</tr><br />
			';
		}
	}}
?>