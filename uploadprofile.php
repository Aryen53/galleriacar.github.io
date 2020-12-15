<?php
include_once 'dbh.php';
require 'headerseller.php';
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
	    $sql = "SELECT * FROM usersignup WHERE first = '$first' AND last = '$last'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$sqlImg = "SELECT * FROM profileimg2 WHERE userid='$id'";
		$resultImg= mysqli_query($conn, $sqlImg);
		while($rowImg = mysqli_fetch_assoc($resultImg)){
		echo "<div class='user-container'>";
		if($rowImg['status'] == 0){
			echo "<img src = 'uploads/profile".$id.".jpg?'".mt_rand().">";
		}else{
			echo "<img src ='uploads/profiledefault.jpg'>";
		}
		echo "<p>".$row['first']." ".$row['last']."</p>";
		echo "</div>";
	}}
}	else{
	echo "There are no users yet!";
}

if(isset($_SESSION['&first && $last'])){
	if($_SESSION['&first && $last'] == 1){
		echo "You are logged in as user #1";
	echo "<form action='uploadprofilenew.php' method='POST' enctype='multipart/form-data'>
<input type='file' name='file'><br />
<button type='submit' name='submit'>UPLOAD</button>
	</form>";}
}else{
	echo "You are not logged in! Fill in the form to login<br />";
		echo "<form action='/uploads.php' method='POST'>
                   <label for='ha'><b>First Name:</b><input class='form-control' id='ha' type='text' name='first' placeholder='First Name'><br />
<label for='ha'><b>Last Name:</b><input class='form-control' id='ha' type='text' name='last' placeholder='Last Name'><br />
                    <label for='hf'><b>Password:</b> <input class='form-control' id='hf' type='password' name='password' placeholder='Enter new password' min='8'><br />
<button type='submit' name='submitSignup'>view profile</button>
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
