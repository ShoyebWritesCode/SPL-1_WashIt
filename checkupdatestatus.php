<?php
require_once('connect.php');
	$serviceId = $_GET['serviceId'];


  $q = "update laundryservice set  serviceStatus='F' where serviceId =$serviceId";

  if(!$mysqli->query($q)){
  echo "Update failed: ". $mysqli->error;
  }else{
  header("Location: updatestatus.php");
  }
 ?>
