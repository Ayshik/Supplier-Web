<?php
$var;
  require_once '../Models/db_connect.php';
  if(isset($_POST["edit_product"]))
  {
    editProduct();
  }
 
	
  
  function product()
  {
    $query ="SELECT * FROM supplyitem";
    $products = get($query);
    return $products;
  }
function getProduct($id)
	{
		$query="SELECT * FROM supplyitem WHERE Phone='$id'";
		$product=get($query);
		return $product[0];
		echo $query;

	}
 function editProduct()
		{
		
			$id=$_POST["id"];
			$name=$_POST["name"];

			$price=$_POST["unit_price"];
			$qty=$_POST["unit_qty"];

			
$query="UPDATE `supplyitem` SET `Name` = '$name', `Product` = '$price', `Quantity` = '$qty' WHERE `Phone` = $id";
			echo $query;
			execute($query);
//header("Location:../Views/cproduct.php");
		}
?>
