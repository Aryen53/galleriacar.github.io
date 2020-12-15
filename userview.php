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
    <title>Galleria Users</title>
</head>
<body>
<br />
<br />
<br />
<div class="forum2">
    <table border=1 cellpadding=1 cellspacing=1>
	<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Username</th>
	<th>Contact</th>
	<th>Email Address</th>
	<th>Delete</th>
	</tr>
        <?php
		$sql = "SELECT * FROM usersignup";
$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['first']."</td>";
	echo "<td>".$row['last']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['contact']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td><a href=includes/useradmin.php?id=".$row['id'].">Delete</a></td>";
	echo "</ br>";
	
}
//$conn->close();
?>
<?php
$query = "SELECT id FROM usersignup ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo '<h1>Total Users: '.$row.'</h1>';

?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>