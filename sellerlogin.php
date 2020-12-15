<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log in.css"/>
</head>
<body>
    <script>
        function createAccount() {
            var a = document.forms['carcreate']['email'].value;
            if (a == null || a == "") {
                alert("First Name must be filled !!");
                return false;
            }
            
            var c = document.forms['carcreate']['password'].value;
            if (c == null || c == "") {
                alert("Password must be filled !!");
                return false;
            }
            
        }
    </script>

  
    <div class="container">
            <div class="Back">
                <i class="fa fa-arrow-left" onclick="Back()"></i>
            </div>
            <p class="h2 text-center">Log in credentials</p>
    <form class="box" action="includes/sellerlogin.inc.php" method="POST" name="carcreate" onsubmit="return createAccount()" autocomplete="off">
                <div class="preview text-center">
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="email" name="email" placeholder="Enter Your Email"/>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input class="form-control" type="password" name="password"  placeholder="Enter Password"/>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
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

