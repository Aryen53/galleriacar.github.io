<?php
//require 'headersearch.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log in.css"/>
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
            } var password = document.forms['myForm']['password'].value;
            if (password == null || password == "") {
                alert("password Name must be filled !!");
                return false;
            }
        
            
        }
    </script>
</head>
<body>
<button onclick="document.getElementById('id01') .style.display='block'" style="width:auto;">Login</button>
<div id="id01" class="modal">
<form class="modal-content animate" action = "includes/userlog2.php" method = "POST" name="myForm" onsubmit="return validateForm()">
<div class="imgcontainer">
<span onclick="document.getElementById('id01') .style.display='none'" class="close" title="Close Modal"> &times;</span>
		<img src = "icon.jpg" alt ="avatar" class="avatar">

                <div class="form-group">
                   <label for="ha">First Name:<input class="form-control" id="ha" type="text" name="first" placeholder="First Name"><br />
                    <span class="Error"></span>
                </div>
				 <div class="form-group">
<label for="ha">Last Name:<input class="form-control" id="ha" type="text" name="last" placeholder="Last Name"><br />
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label for="hf">Password: <input class="form-control" id="hf" type="password" name="password" placeholder="Enter new password" min='8'><br />

                    <span class="Error"></span>
                </div>
                <div class="form-group">
				<button id = "submit" class= "btn btn-primary btn-block" type="submit" name="submit">SUBMIT</button>
</div>
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
			</body>
			</html>