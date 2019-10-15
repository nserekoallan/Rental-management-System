<?php
$dbhost="localhost";
$dbusername="admin";
$dbpassword="1234";
$db="rent";
  ///connection

$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$db);
  //checking my connection
if(!$con){
  die(mysqli_connect_error($con));
  echo "connection error";
  }

  ?>
