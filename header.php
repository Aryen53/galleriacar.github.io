
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="REGISTERED.css" />
</head>
<body>
<form action="includes/loginn.inc.php" method="POST">
<input type="text" name="mailuid" placeholder="username/E-mail...">
<input type="password" name="pwd" placeholder="Password...">
<button type="submit" name="login-submit">Login</button>
</form>
<form action="includes/logoutt.inc.php" method="POST">
<button type="submit" name="logout-submit">Logout</button>
</form>
</body>
</html>