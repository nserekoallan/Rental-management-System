<?php
session_start();
include "connection.php";
$email=$_POST['email'];
$password=md5($_POST['password']);
$query="SELECT password,FirstName,LastName,contact,profile_image FROM tenant WHERE Email='$email'";
$result=mysqli_query($con,$query);
$tenant=mysqli_fetch_array($result);
if($result) {
  echo "not registered,please signup";
  header("location: contact.html");
}
if ($tenant['password']===$password) {
  echo "Redirecting to your profile......please wait..";
  $_SESSION['email']=$email;
  $_SESSION['tenant_name']=strtoupper($tenant['FirstName']). " " .strtoupper($tenant['LastName']);
  $_SESSION['contact']=$tenant['contact'];
  $_SESSION['image']=$tenant['profile_image'];
  $_SESSION['success']='<b>You are now logged in </b>';
  header("location:index.php");
}
else {
  echo "wrong username or password";
  header("location:contact.html");
  }

 ?>
