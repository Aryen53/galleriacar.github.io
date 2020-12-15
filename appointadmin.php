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
    <title>Galleria Appointments</title>
</head>
<body>
<br />
<br />
<br />
<div class="forum">
    <table border=1 cellpadding=1 cellspacing=1>
	<tr>
	<th>ID</th>
	<th>Car owner Name</th>
	<th>Car Model</th>
	<th>Contact</th>
	<th>Garage</th>
	<th>Car Problem</th>
	<th>Delete</th>
	</tr>
        <?php
	

		$sql = "SELECT * FROM appointments";
$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['model']."</td>";
	echo "<td>".$row['contact']."</td>";

	echo "<td>".$row['garage']."</td>";
	echo "<td>".$row['problem']."</td>";
	echo "<td><a href=includes/appointdelete.php?id=".$row['id'].">Delete</a></td>";
	echo "</ br>";
	
}
//$conn->close();
?>
<?php
$query = "SELECT id FROM appointments ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo '<h1>Total Appointments: '.$row.'</h1>';

?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>