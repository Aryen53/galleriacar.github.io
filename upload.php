<?php
session_start();
include_once 'dbh.php';
?>
<!doctype html>
<html>
<head> 
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="upload.css">
</head>
<body>
<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
		$resultImg= mysqli_query($conn, $sqlImg);
		while($rowImg = mysqli_fetch_assoc($resultImg)){
		echo "<div class='user-container'>";
		if($rowImg['status'] == 0){
			echo "<img src = 'uploads/profile".$id.".jpg'>";
		}else{
			echo "<img src ='uploads/profiledefault.jpg'>";
		}
		echo "<p>".$row['username']."</p>";
		echo "</div>";
	}}
}	else{
	echo "There are no users yet!";
}

if(isset($_SESSION['id'])){
	if($_SESSION['id'] == 1){
		echo "You are logged in as user #1";
	}else{
	echo "<form action='uploads.php' method='POST' enctype='multipart/form-data'>
<input type='file' name='file'><br />
<button type='submit' name='submit'>UPLOAD</button>
	</form>";}
}else{
	echo "You are not logged in! Fill in the form to signup<br />";
		echo "<form action='uploads2.php' method='POST'>
		First Name:<input type='text' name='first' placeholder='Enter First Name'><br />
		Last Name:<input type='text' name='last' placeholder='Enter last Name'><br />
		User Name:<input type='text' name='username' placeholder='User Name'><br />
		 Password:<input  type='password' name='pwd' placeholder='Enter password'><br />
<button type='submit' name='submitSignup'>Signup</button>
</form>";
}
?>

<p> Login as user</p>
<form action = "login.php" method="POST">
<button type="submit" name="submitLogin">Login</button>
</form>
<p> Logout as user</p>
<form action = "logout.php" method="POST">
<button type="submit" name="submitLogout">Logout</button>
</form>
</body>
</html>