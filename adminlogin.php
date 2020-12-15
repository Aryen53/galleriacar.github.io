
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CYBER-ACADEMY STUDENT LOGIN</title>
    <link rel="icon" href="img/core-img/PhysicsLogoWeb.jpg">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ARYENSIGNUP.css">
    <style>
        body{
            background-attachment:fixed;
            background-size:cover;
        }
        .primary-main{
            font-size:35px;
            letter-spacing: 22px;
        }
        .primary-sub{
            font-size:30px;
            letter-spacing: 22px;
        }
    </style>
</head>

<body style="background-image: linear-gradient(rgba(0, 0, 0, 0.86), rgba(0, 0, 0, 0.86)), url('img/shutterstock_695764828.jpg');">
  <!-- ##### Preloader ##### -->
  <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <h1 class="heading-primary">
        <span class="primary-main">STUDENT</span><hr style="width:70%;">
        <span class="primary-sub">LOGIN</span>
    </h1>
    <script>
        function createAccount() {
            var a = document.forms['carcreate']['fname'].value;
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

    <div class="my-form">
    <form class="box" action="admin.php" method="POST" name="carcreate" onsubmit="return createAccount()" autocomplete="off">
        <p style="color:red;text-transform:uppercase;visibility:hidden;" id="loginfail">wrong user-name or passcode !!</p>
        <input type="text" name="fname" placeholder="First Name">        
        <input type="password" name="password" placeholder="User Password">
        <input type="submit" name="submit" value="LOGIN">
        <a href="stdregister.php" style="color:blue;">Don't Have An Account ??</a><br><br><br>
        <a href="index.php" style="color:blue;">Home</a>
       
    </form>
    </div>
   
    <!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="" async defer></script>
</body>


</html>