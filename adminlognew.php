<?php
require 'headercars.php';
?>
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
            var first = document.forms['myForm']['first'].value;
            if (first == null || first == "") {
                alert("First Name must be filled !!");
                return false;
            }
            
			 var last = document.forms['myForm']['last'].value;
            if (last == null || last == "") {
                alert("Last Name must be filled !!");
                return false;
            }
			var username = document.forms['myForm']['username'].value;
            if (username == null || username == "") {
                alert("Username Name must be filled !!");
                return false;
            }
            var password = document.forms['myForm']['password'].value;
            if (password == null || password == "") {
                alert("Password must be filled !!");
                return false;
            }
            
        }
    </script>
	<script>
	document.getElementById('submit').addEventListener('click', function()
	{
		document.querySelector('.bg-modal').style.display = 'flex';
	}
	);
	document.querySelector('.close').addEventListener('click', function(){
			document.querySelector('.bg-modal').style.display = 'none';	
	});
	
	</script>
</head>
<body>
<div class="bg-modal">
			<div class="modall-content">
	<!--	<img src = "icon.jpg" alt ="" height="260px" width="360px" align="center">-->

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
<form  action = "includes/adminlog.php" method = "POST" name="myForm" >
<!--onsubmit="return validateForm()"-->
<?php
	if(isset($_GET['first'])){
		$first = $_GET['first'];
		echo '    <input class="form-control"  type="text" name="first" placeholder="Enter First Name" value="'.$first.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="first" placeholder="Enter First Name"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['last'])){
		$last = $_GET['last'];
		echo '    <input class="form-control"  type="text" name="last" placeholder="Enter Last Name" value="'.$last.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="last" placeholder="Enter Last Name"><br />
						<span class="Error"></span>';
	}
	if(isset($_GET['username'])){
		$username = $_GET['username'];
		echo '    <input class="form-control"  type="text" name="username" placeholder="Enter Username" value="'.$username.'"><br />
                    <span class="Error"></span>';
	}else {
	echo '  <input class="form-control" type="text" name="username" placeholder="Enter Username"><br />
						<span class="Error"></span>';
	}
	?>

              <!--  <div >
                   <input class="form-control" id="ha" type="text" name="first" placeholder="First Name"><br />
                    <span class="Error"></span>
                </div>
				 <div >
			<input class="form-control" id="ha" type="text" name="last" placeholder="Last Name"><br />
                    <span class="Error"></span>
                </div>
						 <div >
				<input class="form-control" id="ha" type="text" name="username" placeholder="Enter Username"><br />
                    <span class="Error"></span>
                </div>-->
                <div>
                  <input class="form-control" id="hf" type="password" name="password" placeholder="Enter Password" min='8'><br />

                    <span class="Error"></span>
                </div>
                <div >
				<button id = "submit" class= "btn btn-primary btn-block" type="submit" name="submit">SUBMIT</button>

                </div>
            </form>
        </div>
    </div>	</div>
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

