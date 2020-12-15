<?php
require 'headeruser3.php'; 

//session_start();
//include_once 'dbhh.php';
if(isset($_POST['add'])){
	if(isset($_SESSION["cart"])){
		if (! function_exists('array_column')) {
    function array_column(array $input, $columnKey, $indexKey = null) {
      
		$item_array_id = array_column($_SESSION["cart"], "item_id");
		if(!in_array($_GET["idGallery"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
		$item_array = array(
		'item_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'item_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"],
		);		
		$_SESSION["cart"][$count] = $item_array;
		}else{
		echo '<script>alert("Item Already Added")</script>';
		echo '<script>window.location="carsold.php"</script>';
		}}}
	else{
		$item_array = array(
		'item_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'item_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"],
		);
		$_SESSION["cart"][0] = $item_array;
	}
}
	if(isset($_GET["action"])){
		if($_GET["action"] == "delete")
		{
			foreach($_SESSION["cart"] as $key => $value)
			{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$key]);
				echo '<script>alert("Item Removed")</script>';
						echo '<script>window.location="../carsold.php"</script>';

			}				
			}
		}
	}
}
	
 //$_SESSION['username'] = "Admin";
?>

<body>
<br />
<br />
<section class="container" style="width: 65%">
<h2>shopping cart</h2>
<section class="gallery-links">
<div class="wrapper">
<div class="gallery-container">
<?php
$sql = "SELECT * FROM cargallery1 ORDER BY orderGallery DESC"; 
$result = mysqli_query($connn, $sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
		?>
		<div class="col-md-3">
<form method="post" action="CARSOLD3.php?action=add&id=<?php echo $row["idGallery"] ?>">
<div class="product">
<img src="<?php  echo 'url(uploads/Gallery/'.$row["imgFullNameGallery"].')';?>" class="img-responsive">

<h5 class="text-info"><?php $row["nameGallery"];?></h5>
<h5 class="text-info"><?php $row["contactGallery"];?></h5>
<h5 class="text-info"><?php $row["locationGallery"];?></h5>
<h5 class="text-info"><?php $row["descGallery"];?></h5>
<h5 class="text-danger"><?php $row["priceGallery"];?></h5>
<input type="text" name="quantity" class="form-control" value="1">
<input type="hidden" name="hidden_name" value="<?php echo $row["nameGallery"];?> " />
<input type="hidden" name="hidden_contact" value="<?php echo $row["contactGallery"];?> " />
<input type="hidden" name="hidden_location" value="<?php echo $row["locationGallery"];?> " />
<input type="hidden" name="hidden_desc" value="<?php echo $row["descGallery"];?> " />

<input type="hidden" name="hidden_price" value="<?php echo $row["locationGallery"];?> " />
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to cart" />
		</div>
		</form>
		</div>
		<?php
}}
		?></div></section>
		<div style="clear: both"></div>
<h3 class="title2">Shopping Cart Details</h3>
<div class="table-responsive">
<div class="table table-bordered">
<table>
<tr>
<th width="40%">Product Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="10%">Total Price</th>
<th width="17%">Remove Item</th>
</tr>
<?php
if(!empty($_SESSION["cart"]))
{
	$total = 0;
	foreach($_SESSION["cart"] as $key => $value)
	{
		?>
		<tr>
		<td><?php echo $value["item_name"]; ?></td> 
		<td><?php echo $value["item_quantity"]; ?></td>
		<td><?php echo $value["item_price"]; ?></td>
		<td><?php echo number_format($value["item_quantity"] * $value["item_price"], 2); ?></td>
		<td><a href="CARSOLD3.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
		</tr>
		<?php
		$total = $total + ($value["item_quantity"] * $value["item_price"]);
	}
	?>
	<tr>
	<td colspan="3" align="right">Total</td>
	<th align="right"><?php echo number_format($total, 2); ?></th>
	</tr>
	<?php
	}	
	?>
	

</div>
</div>
</div>

</body>
</html>