<?php
include_once 'dbhh.php';
if(isset($_POST['submit'])){
$first = mysqli_real_escape_string($connn, $_POST['first']);
$last =  mysqli_real_escape_string($connn, $_POST['last']);
$username =  mysqli_real_escape_string($connn, $_POST['username']);
$contact =  mysqli_real_escape_string($connn, $_POST['contact']);
$location =  mysqli_real_escape_string($connn, $_POST['location']);
$email =  mysqli_real_escape_string($connn, $_POST['email']);
$pwd = mysqli_real_escape_string($connn, $_POST['password']);
$pwd2 =mysqli_real_escape_string($connn, $_POST['confirm']);
$uppercase = preg_match('@[A-Z]@',$pwd);
$lowercase = preg_match('@[a-z]@',$pwd);
$number = preg_match('@[0-9]@',$pwd);
$specialChars = preg_match('@[^\w]@',$pwd);

if(empty($first) || empty($last) || empty($username) || empty($contact) || empty($location) || empty($email) || empty($pwd) || empty($pwd2)){
header("Location: ../sellersignup.php?error=emptyfields&first=".$first."&last=".$last."&username=".$username."&contact=".$contact."&location=".$location."&email=".$email);
exit();
}else 	if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
	header("Location: ../sellersignup.php?error=invalidemailusername");
	exit();
}else 	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: ../sellersignup.php?error=invalidemail&first=".$first."&last=".$last."&username=".$username."&contact=".$contact."&location=".$location);
exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
	header("Location: ../sellersignup.php?error=invalidusername&first=".$first."&last=".$last."&contact=".$contact."&location=".$location."&email=".$email);
exit();
}else if($pwd !== $pwd2){
	header("Location: ../sellersignup.php?error=passwordcheck&first=".$first."&last=".$last."&username=".$username."&contact=".$contact."&location=".$location);
exit();
}

 $sql = "SELECT username, contact, email FROM sellersignup WHERE username='$username' OR contact='$contact' OR email='$email';";
		$result = mysqli_query($connn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username) {
		header("Location: ../sellersignup.php?error=Try another username&first=".$first."&last=".$last."&contact=".$contact."&location=".$location."&email=".$email);
		
    }else if ($row['contact'] == $contact) {
		header("Location: ../sellersignup.php?error=Contact Already Exists&first=".$first."&last=".$last."&username=".$username."&location=".$location."&email=".$email);
		
    }else if ($row['email'] == $email) {
		header("Location: ../sellersignup.php?error=Email Already Exists&first=".$first."&last=".$last."&username=".$username."&contact=".$contact."&location=".$location);
		
    }
	else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8){
				header("Location: ../sellersignup.php?error=Invalid Password&first=".$first."&last=".$last."&username=".$username."&contact=".$contact."&location=".$location."&email=".$email);

	//echo 'Password should be at least 8 characters in length and should include at least one uppercase letter, one number and one special character.';
}
    else{
$sql = "INSERT INTO sellersignup(first, last, username, contact, location, email, pwd, confirm) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

		$stmt = mysqli_stmt_init($connn);
		/*
if(!mysqli_stmt_prepare($stmt, $sql))
{ 
		header("Location: ../assignmentsignup.php?error=sqlerror");
		exit();
}else{
//$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);}
	mysqli_stmt_bind_param($stmt, "sssssss", $first, $last, $contact, $location, $email, $pwd , $pwd2);
mysqli_stmt_execute($stmt);
header("Location: ../assignmentsignup.php?signup = sucess");}else
{
	header("Location: ../assignmentsignup.php?");

die();}
*/
if(!mysqli_stmt_prepare($stmt, $sql))
{
echo "SQL error";
}else{
	$hashedPwd = md5($pwd . $salt);
	$hashedPwdd = md5($pwd2 . $salt);
	//$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, "ssssssss", $first, $last, $username, $contact, $location, $email, $hashedPwd, $hashedPwdd);	
mysqli_stmt_execute($stmt);}
mysqli_query($connn, $sql); 
$sql = "SELECT * FROM sellersignup WHERE username='$username'";
$result = mysqli_query($connn, $sql);  
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	$userid = $row['username'];	
	$sql = "INSERT INTO imguploadseller(userid, status) VALUES ('$userid', 1)";
	mysqli_query($connn, $sql);
	header("Location: ../sellersignup.php?signup=success");
	}
}else{
	echo "You have an error";
}

	if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $user)){
		header("Location: ../sellersignup.php?signup = char");
die();
}else{
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../sellersignup.php?signup=email&first=$first&last=$last");
	die();
	}else{
	header("Location: ../sellersignup.php?signup=success");
die();}}}}else{
header("Location: ../sellersignup.php");
die();}