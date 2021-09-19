<?php

	require '../Controller/pcont.php';
	$products = product();


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Order Details</title>
<style>
table {
  border-collapse: collapse;
margin-left: 583px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

table tr:not(:first-child){
               cursor: pointer;transition: all .25s ease-in-out;
           }
           table tr:not(:first-child):hover{background-color: #ddd;}

           .btn {
   background-color: red;
   border: none;
   color: white;
   padding: 12px 16px;
   font-size: 16px;
   cursor: pointer;
	 border-radius: 10px;
 }


 .btn:hover {
   background-color: RoyalBlue;
 }

 a:link{


   color: white;
   text-decoration: none;

 }
 a:visited{

color: white;

 }

</style>
</head>
<body>

<center><h1>Order Maintanance</h1><br><br></center>




<table id="table" border="1">
  <thead>
    
      <th>Name</th>
   
<th>Phone</th>
<th>Product</th>
<th>Quantity</th>

  </thead>


  <tbody>
    <?php
      foreach($products as $product)
      {
        echo "<tr>";
         
            echo "<td>".$product["Name"]."</td>";
          
    echo "<td>".$product["Phone"]."</td>";
            echo "<td>".$product["Product"]."</td>";
          echo "<td>".$product["Quantity"]."</td>";
echo '<td><button class="btn"><a href="../Controller/dcont.php?id='.$product["Phone"].'" i class="fa fa-trash">  Delete</a></td>';
echo '<td><button class="btn"><a href="editpackage.php?id='.$product["Phone"].'" i class="fa fa-edit">  Edit</a></td>';
        echo "</tr>";
      }
    ?>

  </tbody>








</table>





</body>
</html>
