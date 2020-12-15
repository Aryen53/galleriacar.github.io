<?php
require 'headercarsgarage.php';
?>
<title>
Contact Us
</title>
	<script>
        function validateForm() {
            var first = document.forms['myForm']['first'].value;
            if (first == null || first == "") {
                alert("First Name must be filled !!");
                return false;
            }
            
			 var last = document.forms['myForm']['last'].value;
            if (last == null || last == "") {
                alert("last Name must be filled !!");
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
<div class="forum">
<div class="bg-modal">
			<div class="modall-content">
		
<!-- <img src = "icon.jpg" alt ="" height="160px" width="175px">-->
    <div class="container">
            <div class="Back">
                <i class="fa fa-arrow-left" onclick="Back()"></i>
            </div>
            <p class="h2 text-center"><b>Contact Car Galleria</b></p>
<form  action = "includes/contactadmin.php" method = "POST" name="myForm" onsubmit="return validateForm()">
                <div class="form-group">
                <input class="form-control" id="ha" type="text" name="name" placeholder="Full Name"><br />
                    <span class="Error"></span>
                </div>
				 <div class="form-group">
<input class="form-control" id="ha" type="text" name="mail" placeholder="Your Email"><br />
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                     <input class="form-control" id="hf" type="text" name="subject" placeholder="Subject" min='8'><br />

                    <span class="Error"></span>
                </div>
				 <div class="form-group">
                     <input class="form-control" id="hf" type="textarea" name="message" placeholder="Message" min='8'><br />

                    <span class="Error"></span>
                </div>
                <div class="form-group">
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

