<?php
require 'headeruser2.php'; 

 //$_SESSION['username'] = "Admin";
?>
<title>
User Car viewing
</title>
<body>
<br />
<br />
<section class="gallery-links">
<div class="wrapper">
<div class="gallery-container">

<?php

include_once 'includes/dbh.inc.php';
$sql = "SELECT * FROM cargallery1 ORDER BY orderGallery DESC";
$stmt = mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL statement failed!";
}else{
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	while($row = mysqli_fetch_assoc($result)){
	echo '<a href="#">
<div style="background-image: url(uploads/Gallery/'.$row["imgFullNameGallery"].');">
</div>
Name: '.$row["nameGallery"].'</h3><br />
Contact: '.$row["contactGallery"].' <br />
Location: '.$row["locationGallery"].' <br />
Car Description: '.$row["descGallery"].'<br />
Car Price: '.$row["priceGallery"].'
<?php
<form method="post" action="includes/cart.php?add&idGallery=$row["idGallery"]">

<input type="text" name="quantity" value="1">
<input type="hidden" name="hidden_name" value="'.$row["nameGallery"].'" />
<input type="hidden" name="hidden_price" value="'.$row["priceGallery"].'" />
<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to cart" /></a>
';	
}
}
?>
<div class="forum">
<div style="clear: both"></div>
<h3>Shopping Cart Details</h3>
<div class="table-responsive">
<div class="table table-bordered">
<table>
<tr>
<th width="40%">Product Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Total Price</th>
<th width="5%">Remove Item</th>
</tr>
<?php
if(!empty($_SESSION["shopping_cart"]))
{
	$total = 0;
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		?>
		<tr>
		<td><?php echo $values["item_name"]; ?></td>
		<td><?php echo $values["item_quantity"]; ?></td>
		<td><?php echo $values["item_price"]; ?></td>
		<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
		<td><a href="includes/cart.php?action=delete&idGallery=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
		</tr>
		<?php
		$total = $total + ($values["item_quantity"] * $values["item_price"]);
	}
	?>
	<tr>
	<td colspan="3" align="right">Total</td>
	<td align="right"><?php echo number_format($total, 2); ?></td>
	<?php
}

?>
</table>
</div>
</div>
</div>
</div>

</body>
</html>