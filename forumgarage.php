<?php
include_once 'includes/dbhhh.php';
require 'headergarage2.php';

?>

<title>
Galleria Forum
</title>

<script>
function validateForm()
{
	var name = document.forms["myForm"]["name"].value;
	if(name == null || name == ""){
		alert("Write sometning here!");
return false;}
	var txt = document.forms["myForm"]["txt"].value;
	if(txt == null || txt == ""){
		alert("Write sometning here!");
return false;}
</script>
</head>
<body>

<div class="forum">
<br />
<br />
<?php
include_once 'includes/dbhhh.php';
 
$sql = "SELECT id, name, txt FROM forum2";
$result = mysqli_query($con, $sql);
echo '<table border=3px cell padding=10px bgcolor="#4CAF50" align="center"><tr><th>ID</th><th>Name</th><th>Text</th>';
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
		echo '<tr><td>' . $row["id"]. '</td>
		<td>' . $row["name"]. ' </td>
		<td>' . $row["txt"]. '</td>
		</tr>
		';
	}}else{

	echo "Ooops!! no conversation yet!";
		/*echo '<tr><h3>ID: ' . $row["id"]. '</h3>
		<h3>Name: ' . $row["name"]. '</h3><br />
		<p>' . $row["txt"]. '</p>
		';
	}else{
		echo "<div class='font'>";
	echo "Ooops!! no conversation yet!";
	echo "</div>";
	/*while($row = mysqli_fetch_assoc($result)){
		echo '<tr><td>' . $row["id"]. '</td>
		<td> ' . htmlspecialchars($first) . '
		' . htmlspecialchars($last) . ';</td>
		<td>' . $row["txt"]. '</td>
		</tr>
		';
	}}else{

	echo "Ooops!! no conversation yet!";
		/*echo '<tr><h3>ID: ' . $row["id"]. '</h3>
		<h3>Name: ' . $row["name"]. '</h3><br />
		<p>' . $row["txt"]. '</p>
		';
	}}else{
		echo "<div class='font'>";
	echo "Ooops!! no conversation yet!";
	echo "</div>";*/}
	$con->close();

?>
</div>
<div class="fieldset">
<form  action = "includes/forum.inc.php" method = "POST" name="myForm" onsubmit="return validateForm()">
<fieldset>
<legend class="fieldset">SEND YOUR CHAT TO US.</legend>
Name<input type="text" name="name" placeholder="Your name"><br /><br />
<textarea  name="txt" placeholder="Write your text here" class="resize"></textarea><br />
<button class= "button2" type="submit" name="submit">SUBMIT</button>
<button class= "button3" type="reset" onclick="window.location='forum.php'">CANCEL</button><br /><br />
</fieldset>
</form>

</div>
</div>
</body>
</html>