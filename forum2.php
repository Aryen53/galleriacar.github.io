
<?php
session_start();
include_once 'includes/dbhhh.php';
 
$sql = "SELECT id, name, txt FROM forum2";
$result = mysqli_query($con, $sql);
echo '<table border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>ID</th><th>Name</th><th>Text</th>';
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
		echo '<tr><td>' . $row["id"]. '</td>
		<td>' . $row["name"]. '</td>
		<td>' . $row["txt"]. '</td>
		</tr><br />
		';
	}}else{
		echo "<div class='font'>";
	echo "Ooops!! no conversation yet!";
	echo "</div>";
		/*echo '<tr><h3>ID: ' . $row["id"]. '</h3>
		<h3>Name: ' . $row["name"]. '</h3><br />
		<p>' . $row["txt"]. '</p>
		';
	}}else{
		echo "<div class='font'>";
	echo "Ooops!! no conversation yet!";
	echo "</div>";*/}
	$con->close();

?>
