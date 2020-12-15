<?php
include_once 'dbh.php';
//session_start(); 
//$first = $_SESSION['first'];
//$last = $_SESSION['last'];
require 'headeruser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/slide.css">
    <title>User appointment booking</title>
</head>
<body>

    <div class="container">
            <div class="Back">
                <i class="fa fa-arrow-left" onclick="Back()"></i>
            </div>
            <p class="h2 text-center">Appointment form</p>
			<?php
			if(isset($_GET['error'])){
				if($_GET['error'] == "emptyfields"){
			echo '<p class="form-text text-danger"> Fill in all fields!</p>';}
			}
			if(isset($_GET['appointment'])){
			if($_GET['appointment'] == "success"){

	echo '<p class="form-text text-danger"> Appointment sent successfully !</p>';
			}
			}
			?>
            <form  action = "includes/appoint.inc.php" method = "POST" name="myForm" onsubmit="return validateForm()">                
                <div class="form-group">
                   <label for="ha">Name:<input class="form-control" id="ha" type="text" name="first" placeholder="First Name">
                    <span class="Error"></span>
                </div>
				 <div class="form-group">
<label for="hc">Car Model:<input class="form-control" id="hc" type="text" name="model"  placeholder="Your car model">
                    <span class="Error"></span>
                </div>
      
		 <div class="form-group">
		 
				<h4>Choose a garage</h4>
<?php
$sql = "SELECT gname FROM garagesignup";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
			echo '
			<ul>
			<li>' . $row["gname"]. ' <a href="garageaboutuser.php">Learn More</a></li></ul>';
			

		
	
	}}else{
		echo "<div class='font'>";
	echo "Ooops!! No garages free!";
	echo "</div>";
}
?>
                    <span class="Error"></span>
</div>
<div class="form-group">
<label for="he">Garage Chosen:<input class="form-control" id="he" type="text" name="garage" placeholder="Enter Garage"><br />

                    <span class="Error"></span>
                </div>                
                <div class="form-group">
<label for="he">Problem Description:<input class="form-control" id="he" type="text" name="problem" placeholder="Enter problem"><br />

                    <span class="Error"></span>
                </div>                <div class="form-group">
<label for="hd">Contact:<input class="form-control" id="hd" type="text" name="contact" placeholder="Enter contact"><br />

                    <span class="Error"></span>
                </div>
                <div class="form-group">
				<button class= "btn btn-primary btn-block" type="submit" name="submit">SUBMIT</button>

                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
        function Back()
        {
            window.history.back();
        }
        </script>
</body>
</html>

