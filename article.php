<?php
$_SESSION['a'] = "admin";
include 'search.dbh.php';
?>
<h1>Article Page</h1>
<?php
if(isset($_SESSION['a'])){
$title = mysqli_real_escape_string($conn, $_GET['title']);
$desc = mysqli_real_escape_string($conn, $_GET['desc']);

$sql = "SELECT idGallery, titleGallery, descGallery FROM gallery WHERE titleGallery='$title' AND descGallery='$desc'";

$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	
	echo "".$queryResult." results found";
	if($queryResult > 0){
		echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Title</th><th>Description</th></tr>';
		while($row = mysqli_fetch_assoc($result)){
			echo '
			<tr>
			<td><h3>'.$row['idGallery'].'</h3></td>
			<td><p>'.$row['titleGallery'].'</p></td>
			<td><p>'.$row['descGallery'].'</p></td></tr><br />
			';
		}
}}
?>
