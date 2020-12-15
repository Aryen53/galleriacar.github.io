<?php
require 'headeruser.php';

 //$_SESSION['username'] = "Admin";
?>
<!DOCTYPE html>
<html>
<head>
<title>Garage viewing</title>
</head>
<body>
<br />
<br />
<div class="forum2">


<?php
$query = "SELECT id FROM garagesignup ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo '<h1>Total Garages: '.$row.'</h1>';

?>

    <table border=1 cellpadding=10 cellspacing=25>
	<tr>
	<th>Garage Name</th>
	<th>Garage Location</th>
	<th>Services Offered</th>
	<th>Email</th>
	
	</tr>
        <?php
	

		$sql = "SELECT * FROM garagesignup";
		$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL statement failed!";
}else{
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
//$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		
	echo "<tr>";
	echo "<td>".$row['gname']."</td>";
	echo "<td>".$row['location']."</td>";
	echo "<td>".$row['services']."</td>";
	echo "<td>".$row['email']."</td>";
	//echo "<td><a href=includes/appointdelete.php?id=".$row['id'].">Delete</a></td>";
	echo "<td><a href=appoint.php>Back to book appointment</a></td>";
	echo "</ br>";
	
}}
//$conn->close();
?>

</div>

</body>
</html>