<?php
require 'headercars.php';
?>
<title>
User Log In
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
		<!--<img src = "icon.jpg" alt ="" height="260px" width="360px" align="center">-->

    <div class="container">
            <div class="Back">
                <i class="fa fa-arrow-left" onclick="Back()"></i>
            </div> 
            <p class="h2 text-center"><b>Reset your password</b></p>
            <p class="h3 text-center">An e-mail will be sent to yo with instructions on how to reset your password.</p>
						<small  class="form-text text-danger">Fill all fields</small>

<form  action = "includes/userforgot.php" method = "POST" name="myForm" >
<!--onsubmit="return validateForm()"-->
                <div>
                  <input class="form-control" id="ha" type="text" name="email" placeholder="Enter your e-mail address"><br />
                    <span class="Error"></span>
                </div>
				<button id = "submit" class= "btn btn-primary btn-block" type="submit" name="reset-request-submit">Receive new password by e-mail</button>

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