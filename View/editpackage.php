
<?php
require_once ('../Controller/pcont.php');

$pid = $_GET["id"];
$product=getProduct($pid);



?>


<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="mystyle.css">
	</head>
	<body>

<!--editproduct starts -->
<div class="center">
<table>
	
	<td>
		<form method="post" action="../Controller/pcont.php" enctype="multipart/form-data" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4>
				<input type="text" name="name" value="<?php echo $product["Name"]?>" class="form-control">
			</div>

			<div class="form-group">
				<h4 class="text">Product detals:</h4>
				<input type="text" name="unit_price" value="<?php echo $product["Product"]?>" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Quantity:</h4>
				<input type="text" name="unit_qty" value="<?php echo $product["Quantity"]?>" class="form-control">
			</div>

			
			<input type="hidden" name="id" value="<?php echo $product["Phone"]?>" >
			
			<div class="form-group text-center">

				<input type="submit" class="btn btn-success" name="edit_product" value="Edit Product" class="form-control">
			</div>
		</form>
	</td>
</table>
</div>
