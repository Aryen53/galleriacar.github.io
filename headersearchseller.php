	
	<?php
session_start(); 
$username = $_SESSION['username'];
//$last = $_SESSION['last'];*/
 include 'search.dbh.php';
 include_once 'includes/dbhh.php';

 ?>
 <	

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/slide.css">
    <title>Title</title>
		<script>
function validateFormm()
{
	var search = document.forms["myFormm"]["search"].value;
	if(search == null || search == ""){
		alert("search must be filled out!");
return false;}

}

</script>
</head>
<body>
    <div class="container">
        <nav class="navbar nav-tabs navbar-expand-lg bg-dark text-light">
            <a class="navbar-brand" href="userpage.php">Car Galleria Kenya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="carproject.php">Home <span class="sr-only">(current)</span></a>
                </li>
				
				 <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="appoint.php">Appointment <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item active">
                    <a class="nav-link" href="carsold.php">Cars Sold <span class="sr-only">(current)</span></a>
                </li>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="forum.php">Forum <span class="sr-only">(current)</span></a>
                </li>
				
           
            
            </ul>
			 <form class="form-inline my-2 my-lg-0" action="search3.php" method="POST" name="myFormm" onsubmit="return validateFormm()">

                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search cars on sale" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
            </form>
          
        </div>
   




		<?php

$sql = "SELECT * FROM sellersignup WHERE username = '$username'";
$result = mysqli_query($connn, $sql);
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
$id = $row['username'];
$sqlImg = "SELECT * FROM imguploadseller WHERE userid='$id'"; 	
$resultImg = mysqli_query($connn, $sqlImg);
while ($rowImg = mysqli_fetch_assoc($resultImg)){
	echo "<div class='imageupload'>";
	if($rowImg['status'] == 0){
	echo "<img src='uploads/profile".$id.".jpg?".mt_rand()."'>";
	}else {
		echo "<img src='uploads/icon.jpg'>";
	}
	//echo $row['first']." ".$row['last'];
	echo "</div>";
}
	
	}
	
}
else{
		echo "no users";
	}


/*if(isset($_SESSION['id'])){
if($_SESSION['id'] == 1){
	echo "You are logged in as";
	echo "<p>".$row['first']."</p>";
	echo "<p>".$row['last']."</p>";
	
}*/
;
?>
 <span class="tooltiptext"><?php echo htmlspecialchars($username);?>
</span>
        </nav>
<form class="frm" action='includes/machseller.php' method='POST' enctype='multipart/form-data' >
<input type='file' name='file'>
<button type='submit' name='submit'>UPLOAD PROFILE</button>
	</form>
	<form class="frm" action='includes/machsellerdelete.php' method='POST'>
<button type='submit' name='submit'>DELETE PROFILE</button>
	</form>
<button  class= "frmm" onclick="document.getElementById('id01') .style.display='block'">VIEW PROFILE</button>
<div id="id01" class="modal">
<form class="modal-content">
<div class= "imgcontainer">
<span onclick="document.getElementById('id01') .style.display='none'" class="close" title="Close Modal"> &times;</span>
<div class="container">
<?php
$sql = "SELECT * FROM sellersignup WHERE username = '$username'";
$result = mysqli_query($connn, $sql);
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
echo '<p>First Name: '.$row["first"].'</p>';
echo '<p>Last Name: '.$row["last"].'</p>';
echo '<p>Username: '.$row["username"].'</p>';
echo '<p>Contact: '.$row["contact"].'</p>';
echo '<p>Location: '.$row["location"].'</p>';
echo '<p>Email: '.$row["email"].'</p>';
}}
?>
<form action="#" method='POST' enctype='multipart/form-data'>
<a class="nav-link" href="updateseller.php">EDIT PROFILE</a>
</form>
<form action="includes/deleteseller.php" method='POST' enctype='multipart/form-data'>
<button type='submit' name='submit'>DELETE PROFILE</button>
</form>
	</div>
	</form>
</div>
<?php

/*$sql = "SELECT * FROM usersignup WHERE first = '$first' AND last ='$last'";
$result = mysqli_query($connn, $sql);
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
$id = $row['first'];
$sqlImg = "SELECT * FROM imgupload WHERE userid='$id'"; 	
$resultImg = mysqli_query($connn, $sqlImg);
while ($rowImg = mysqli_fetch_assoc($resultImg)){
	echo "<div class='imageupload'>";
	if($rowImg['status'] == 0){
	echo "<img src='uploads/profile".$id.".jpg?'".mt_rand().">";
	}else {
		echo "<img src='uploads/icon.jpg'>";
	}
	echo "<p>".$row['first']." ".$row['last']."</p>";
	echo "</div>";
}
	
	}
	
}
else{
		echo "no users";
	}


/*if(isset($_SESSION['id'])){
if($_SESSION['id'] == 1){
	echo "You are logged in as";
	echo "<p>".$row['first']."</p>";
	echo "<p>".$row['last']."</p>";
	
}echo"<div align='right'>";
echo "<form action='includes/mach.php' method='POST' enctype='multipart/form-data' >
<input type='file' name='file'>
<button type='submit' name='submit'>UPLOAD PROFILE</button>
	</form>";
	
echo "</div>";
*/
?>
   </nav>
<script>
document.getElementById('button').addEventListener('click', function(){
	document.querySelector('.bg-modal').style.display = 'flex';
});
	document.querySelector('.bg-modal').style.display = 'flex';

</script>
		
                </div>
            </form>
			</div>
			<script>
			var modal = document.getElementById('id01');
			window.onclick = function(event){
				if(event.target == modal){
					modal.style.display = "none";
				}
			}
			</script>




