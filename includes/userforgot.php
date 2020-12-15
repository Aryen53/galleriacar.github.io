<?php
if(isset($_POST['reset-request-submit'])){
$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);
$url = "www.carsgallery.net/forgottenpwd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
$expires = date("U") + 1800;
require 'dbh.php';
$userEmail = $_POST["email"];

$sql = "DEETE FROM pwdReset WHERE pwdResetEmail=?";
$stmt = mysqli_stmt_init($connn);
if(!mysqli_stmt_prepare($stmt, $sql)){
echo "There was an error!";
exit();	
}else
{
	mysqli_stmt_bind_param($stmt, "s", $userEmail);
	mysqli_stmt_execute($stmt);
}
$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
}
else{
	header("Location: ../index.php");
	
}

?>  