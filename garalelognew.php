<?php
include_once 'dbhh.php';
if(isset($_POST['submit'])){
	session_start();
$_SESSION['first'] = $_POST['first'];
$_SESSION['last'] = $_POST['last'];
$first = mysqli_real_escape_string($connn, $_POST['first']);
$last = mysqli_real_escape_string($connn, $_POST['last']);
$passcode = mysqli_real_escape_string($connn, $_POST['password']);

// $_SESSION['name'] = 'Aron Kipkirui';
//header("Location: ../Aryenn.php");
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "mysignup";
    
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
    $first = $_POST['first'];
     $last = $_POST['last'];
    $passcode = $_POST['password'];
    //injection avoid
    $email = mysqli_real_escape_string($conn, $email);
    $passcode = mysqli_real_escape_string($conn, $passcode);
    //query db for student
	    $sql = "SELECT * FROM garagesignup WHERE first = '$first' AND last = '$last' AND pwd = '$passcode'";
		$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['first'] == $first && $row['last'] == $last && $row['pwd'] == $passcode) {
		header("Location: ../userpage.php?login = sucess");
		
    }
    else{
        header("Location: ../garalelognew.php?Match=NotFound");
        
} }