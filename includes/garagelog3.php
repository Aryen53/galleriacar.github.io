<?php
include_once 'dbhh.php';
if(isset($_POST['submit'])){
	session_start();
$_SESSION['username'] = $_POST['username'];
$username = mysqli_real_escape_string($connn, $_POST['username']);
$passcode = mysqli_real_escape_string($connn, $_POST['password']);
	$hashedPwd = md5($passcode . $salt);
$uppercase = preg_match('@[A-Z]@',$passcode);
$lowercase = preg_match('@[a-z]@',$passcode);
$number = preg_match('@[0-9]@',$passcode);
$specialChars = preg_match('@[^\w]@',$passcode);
// $_SESSION['name'] = 'Aron Kipkirui';
//header("Location: ../Aryenn.php");
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "mysignup";
    
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
   $username = $_POST['username'];
    $passcode = $_POST['password'];
    //injection avoid
   // $username = mysqli_real_escape_string($conn, $email);
   // $passcode = mysqli_real_escape_string($conn, $passcode);
    //query db for student
	if(empty($username) || empty($passcode)){
header("Location: ../garagelog.php?error=emptyfields&username=".$username);
exit();
	}
	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($passcode) < 8){
	header("Location: ../garagelog.php?error=Invalid Password&username=".$username);
	exit();
	}
	    $sql = "SELECT * FROM garagesignup WHERE username = '$username' AND pwd = '$hashedPwd'";
		$result = mysqli_query($connn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['pwd'] == $hashedPwd) {
		header("Location: ../garagepage.php?login = success");
		
    }
    else{
        header("Location: ../garagelog.php?error=Match Not Found&username=".$username);
		
        die();
} }  
	/*
    
	$sql = "SELECT * FROM student2 WHERE admission=? OR email=?;";
    
$stmt = mysqli_stmt_init($connn);
if(!mysqli_stmt_prepare($stmt, $sql))
{ 
header("Location: ../Aryenn.php?error=sqlerror");
exit();
}else{
	//$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt, "ss", $username, $username);
mysqli_stmt_execute($stmt);
$result= mysqli_stmt_get_result($stmt);
if($row = mysqli_fetch_assoc($result)){
	$pwdCheck = password_verify($passcode, $row['password']);
	if($pwdCheck == false){
	header("Location: ../Aryenn.php?error=wrongpwd");
exit();
	}else if($pwdCheck == true){
		session_start();
		$_SESSION['userId'] = $row['id'];
		$_SESSION['userFirst'] = $row['first'];
		$_SESSION['userLast'] = $row['last'];
		$_SESSION['userAdm'] = $row['admission'];
		header("Location: ../class.php?login=success");
exit();
		
	}else{
		header("Location: ../Aryenn.php?error=wrongpwd");
exit();
	}
}
else{
header("Location: ../Aryenn.php?error=nouser");
exit();		
}
}}	
*/
	