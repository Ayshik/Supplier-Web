<?php

  require_once '../models/db_connect.php';
  $query ="Delete from supplyitem where Phone='$_GET[id]'";
  execute($query);
	header("Location:../View/cproduct.php");
  ?>
