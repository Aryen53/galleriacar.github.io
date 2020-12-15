<?php
include_once 'dbh.php';
if(isset($_POST["submitSignup"])){
$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users(first, last, username, password) VALUES ($first, $last, $user, $pwd)";
mysqli_query($conn, $sql);
$sql = "SELECT * FROM users WHERE username='$user' AND first='$first'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	 	$userid = $row['id'];
		$sql = "INSERT INTO profileimg(userid, status) VALUES ($userid, 1);";
mysqli_query($conn, $sql);
header("Location: upload.php");
}}	
}else{
	echo "You have an error";
} 