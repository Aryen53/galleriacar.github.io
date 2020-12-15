<?php
include_once 'dbhh.php';
if(isset($_POST['submit'])){
	session_start();
$_SESSION['username'] = $_POST['username'];
$first = mysqli_real_escape_string($connn, $_POST['first']);
$last = mysqli_real_escape_string($connn, $_POST['last']);
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
    /*$first = $_POST['first'];
     $last = $_POST['last'];
     $contact = $_POST['contact'];
    $passcode = $_POST['password'];*/
    //injection avoid
   // $email = mysqli_real_escape_string($conn, $email);
   // $passcode = mysqli_real_escape_string($conn, $passcode);
    //query db for student
	if(empty($first) || empty($last) || empty($username) || empty($passcode)){
header("Location: ../adminlognew.php?error=emptyfields&first=".$first."&last=".$last."&username=".$username);
exit();
	}
	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($passcode) < 8){
	header("Location: ../adminlognew.php?error=Invalid Password&first=".$first."&last=".$last."&username=".$username);
	exit();
	}
	    $sql = "SELECT * FROM usersignup WHERE first = '$first' AND last = '$last' AND username = '$username' AND pwd = '$hashedPwd'";
		$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['first'] == $first && $row['last'] == 'Kipyeg'  && $row['username'] == $username && $row['pwd'] == $hashedPwd) {
		header("Location: ../adminpage.php?login = success");
		
    }
    else{
        header("Location: ../adminlognew.php?error=Match Not Found&first=".$first."&last=".$last."&username=".$username);
        
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
	