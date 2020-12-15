<?php
require 'headercars.php';
?>
<title>
Garage Owner Log In
</title>
<!--<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log in.css"/>
<meta name="viewport" content="width=device-width, initial-scale= 1.0" />-->
<script>
        function validateForm() {
            var username = document.forms['myForm']['username'].value;
            if (username == null || username == "") {
                alert("Username must be filled !!");
                return false;
            }
            var password = document.forms['myForm']['password'].value;
            if (password == null || password == "") {
                alert("Password must be filled !!");
                return false;
            }
            
        }
    </script>
</head>

<body>
<div class="bg-modal">
			<div class="modall-content">
		<!--<img src = "icon.jpg" alt ="" height="260px" width="350px" align="center">-->
    <div class="container">
            <div class="Back">
                <i class="fa fa-arrow-left" onclick="Back()"></i>
            </div>
            <p class="h2 text-center"><b>Log in credentials</b></p>
						<small  class="form-text text-danger">Fill all fields</small>
<?php
			if(isset($_GET['error'])){
				if($_GET['error'] == "emptyfields"){
					echo '<p class="form-text text-danger"> Fill in all fields!</p>';
				}else if($_GET['error'] == "Invalid Password"){
					echo '<p class="form-text text-danger"> Invalid Password!</p>';
				}
				else if($_GET['error'] == "Match Not Found"){
					echo '<p class="form-text text-danger"> Match Not Found!</p>';
				}
			}
			 else if(isset($_GET['login'])){
			if($_GET['login'] == "success"){

	echo '<p class="form-text text-danger"> Login successful !</p>';
			}
			}
			?>
            <form  action = "includes/garagelog3.php" method = "POST" name="myForm"> <!--onsubmit="return validateForm()"-->                
                <?php
	if(isset($_GET['username'])){
		$username = $_GET['username'];
		echo '    <input class="form-control"  type="text" name="username"  placeholder="Enter Username" value="'.$username.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="username" placeholder="Enter Username"><br />
						<span class="Error"></span>';
	}
	?>	
	<!--<div >
		<input class="form-control" id="ha" type="text" name="username" placeholder="Username"><br />
                    <span class="Error"></span>
                </div>-->
                <div >
			<input class="form-control" id="hf" type="password" name="password" placeholder="Enter password" min='8'><br />

                    <span class="Error"></span>
                </div>
					Or don't you have an account? <a href="garagesign.php">Signup Here</a><br /><br />
            
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