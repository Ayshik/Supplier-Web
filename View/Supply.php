
<?php
//for database
  include ('../Models/db.php');



  $name=$phone=$space= $sql=$error="";
  $flag=0;
  if(isset($_POST['ownersignup'])){
    if(!empty($_POST['ouname'])){
      $name = mysqli_real_escape_string($conn, $_POST['ouname']);
    }
else{

  $error="name can not be empty";
  $flag=1;

}


   
     if(!empty($_POST['ophone'])){
      $phone = mysqli_real_escape_string($conn, $_POST['ophone']);

    }
    else{

      $error="phone can not be empty";
      $flag=1;

    }
    if(!empty($_POST['ospace'])){
      $space = mysqli_real_escape_string($conn, $_POST['ospace']);

    }
    else{

      $error="Product can not be empty";
      $flag=1;

    }

    if(!empty($_POST['oaddress'])){
      $address = mysqli_real_escape_string($conn, $_POST['oaddress']);

    }
    else{

      $error="Quantity can not be empty";
      $flag=1;

    }

   
if(!empty($_POST['oaddress'])&&!empty($_POST['ospace'])&&!empty($_POST['ophone'])&&!empty($_POST['ouname'])){

  $sql = "INSERT INTO supplyitem (Name,Phone,Product,Quantity)
            VALUES ('$name','$phone','$space','$address');";

    mysqli_query($conn, $sql);
      echo '<script>alert("Your Order has been Placed")</script>';



}

else{






}





  }

  ?>
<style>

#error_message{
    margin-bottom: 20px;
    background: #fe8b8e;
    padding: 0px;
    text-align: center;
    font-size: 14px;
    transition: all 0.5s ease;
  }





</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
    <link rel="stylesheet" href="Supply.css" />
  </head>
  <body>
    <form class="box" onsubmit="return validate();" action="" method="post" >
    <div id="Error_Message"><?php echo $error ?>
    </div>
      <h1>Order</h1>
      <input type="text" name="ouname" id="uname" placeholder="Name" />
     
      <input type="text" name="ophone" id="phone" placeholder="Phone Number" />
      <input type="text" name="ospace" id="space" placeholder="Product Details" />
      <input type="text" name="oaddress" id="address" placeholder="Quantity" />
      <input type="submit" name="ownersignup" value="Order" />
     
    </form>
  </body>
</html>

<script>
function Validate(){
var uname = document.getElementById("uname").value;

var phone = document.getElementById("phone").value;
var space = document.getElementById("space").value;
var address = document.getElementById("address").value;

var error = document.getElementById("Error_Message").value;

error.style.padding="10px";
var message;



if(uname.length<1){
message="Please write your Username";
error.innerHTML=message;
return false;



}


}












</script>
