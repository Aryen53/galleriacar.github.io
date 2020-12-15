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
    <title>Galleria Forum</title>
</head>
<body>
<br />
<br />

<div class="forum">
    <table border=1 cellpadding=1 cellspacing=1>
	<tr>
	<th>ID</th>
	<th>Sender Name</th>
	<th>Text message</th>
	<th>Delete</th>
	</tr>
        <?php
		$sql = "SELECT id,  name, txt FROM forum2";
$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['txt']."</td>";
	echo "<td><a href=includes/forumdelete.php?id=".$row['id'].">Delete</a></td>";
	echo "</ br>";
	
}
//$conn->close();
?>
<?php
$query = "SELECT id FROM forum2 ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo '<h1>So far '.$row.' Chats</h1>';

?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>