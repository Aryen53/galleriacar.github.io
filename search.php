<?php 
 include 'search.dbh.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="REGISTERED.css" />
</head>
<body>
<div align="center">

<div class="machakos">
<a href="Aryenn.php"><img src="logo.png" align="center"></a>
<b><u color="red"><font size=4 color="dark-yellow">MACHAKOS UNIVERSITY.</font></u></b>
Soaring heights in transforming Industry and Economy</div>
<button class="dropbtn"><a href="Aryenn.php">HOME</a></button>
<button class="dropbtn"><a href="GALLERY.php">PICTURE GALLERY</a></button>
<button class="dropbtn"><a href="assignmentsignup.php">SIGN UP AS STUDENT</a></button>
<div class="dropdown">
<button class="dropbtn">DISCOVER MACHAKOS</button>
<div class="dropdown-content">
<a href="REGISTERED.php">REGISTERED STUDENTS</a>
<a href="OURSTAFF.php">OUR STAFF</a>
<a href="OFFICERS.html">SCHOOL OFFICERS</a>
</div></div>
<button class="dropbtn"><a href="ARYENSIGNIN.php">LOGIN</a></button>
<button class="dropbtn"><a href="CONTACT.php">CONTACT MACHAKOS</a></button>
<button class="dropbtn"><a href="ARYENCHAT.php">CHAT</a></button>
<h3 class="ttle">
Machakos University Search page</h3>
Machakos University student list is a list of all the already signed up students.<br />The list below shows the number of students.
<h1> SEARCH PAGE</h1>
<?php
if(isset($_POST['submit'])){
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	$sql = "SELECT idGallery, titleGallery, descGallery FROM gallery WHERE idGallery LIKE '%$search%' OR titleGallery LIKE '%$search%' OR descGallery LIKE '%$search%'";
	$resultSet = "SELECT id, first, last, admission, course, email FROM student2 WHERE id LIKE '%$search%' OR first LIKE '%$search%' OR last LIKE '%$search%' OR admission LIKE '%$search%' OR course LIKE '%$search%' OR email LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);
	$result2 =  mysqli_query($conn, $resultSet);

	$queryResult = mysqli_num_rows($result);
	$resultQuery = mysqli_num_rows($result2);
	//echo'<br/ >';
	if($queryResult > 0 ){
				echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>Title</th><th>Description</th></tr>';

		while($row = mysqli_fetch_assoc($result)){
			echo '<a href="article.php?title='.$row['titleGallery'].'&desc='.$row['descGallery'].'"><tr><div class="article-box">
			<td><h3><a href="article.php?title='.$row['titleGallery'].'&desc='.$row['descGallery'].'">'.$row['idGallery'].'</h3></td>
			<td><p><a href="article.php?title='.$row['titleGallery'].'&desc='.$row['descGallery'].'">'.$row['titleGallery'].'</p></td>
			<td><p><a href="article.php?title='.$row['titleGallery'].'&desc='.$row['descGallery'].'">'.$row['descGallery'].'</p></td>
			</div></tr><br />
			';
		}
		if( $resultQuery > 0){
			echo '<table  border=3px cell padding=10px bgcolor="#4CAF50"><tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Admission</th><th>Course</th><th>Email</th></tr>';
		while($row = mysqli_fetch_assoc($result2)){
			echo '<a href="article2.php?first='.$row['first'].'&adm='.$row['admission'].'"><tr><div class="article-box">
			<td><h3><a href="article2.php?first='.$row['first'].'&adm='.$row['admission'].'">'.$row['id'].'</h3></td>
			<td><p><a href="article2.php?first='.$row['first'].'&adm='.$row['admission'].'">'.$row['first'].'</p></td>
			<td><p><a href="article2.php?first='.$row['first'].'&adm='.$row['admission'].'">'.$row['last'].'</p></td>
			<td><p><a href="article2.php?first='.$row['first'].'&adm='.$row['admission'].'">'.$row['admission'].'</p></td>
			<td><p><a href="article2.php?first='.$row['first'].'&adm='.$row['admission'].'">'.$row['course'].'</p></td>
			<td><p><a href="article2.php?first='.$row['first'].'&adm='.$row['admission'].'">'.$row['email'].'</p></td>
			</div></tr><br />
			';
		}
		}
		}
}
else{
	echo "No results found";
}
	
?>
</div>
</div>
</body>
</html>