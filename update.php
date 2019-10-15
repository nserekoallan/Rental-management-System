<?php
session_start();
include "connection.php";
if(isset($_SESSION['email'])){

}
else {
  $_SESSION['msg']="You must login to view this page";
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
  header("location: login.html");
}
$password1=$_POST['query'];
$password2=$_POST['query1'];
if($password1==$password2){
  $password=md5($password1);
  $query="UPDATE tenant SET password=$password WHERE Email='$email'";
  mysqli_query($con,$query);
  if (mysqli_query($con,$query)) {
    echo "Your password has been changed";
    header("location:index.php");
  }


} else {
  echo "passwords do not match, please try again";
  header("location:update.php");
}
 ?>

<?php

    ?>



<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Change password</title>
        <meta name="keywords" content="rental management system" />
        <meta name="description" content="Rental Management System by Raz" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="gallery_style.css" />
        </head>
<body>
<div id="templatemo_container">
<div id="templatemo_top_panel">
	<div id="templatemo_header_section">
		<div id="templatemo_header">
        	Raz's Rental
        </div>
    </div> <!-- end of header section -->
    
    <div id="templatemo_menu_login_section">
    	<div id="templatemo_menu_section">
        	<div id="templatemo_menu_panel">
            <ul>
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="payment.php">Make Payment</a></li>
                    <li><a href="properties.php">View Properties</a></li>
                    <li><a href="maintain.php">Maintenance</a></li>   
                    <li><a href="update.php" class="current">Change Password</a></li> 
                    <li><a href="logout.php">Log Out</a></li> 
                </ul>  
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
       
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

            <h3>Change password</h3>
                 <form action="#" method="post" class="appear">
                   Enter new password: <br><input type="password" name="query" /> <br>
                   Confirm password: <br><input type="password" name="query1" />
                  <input type="submit" value="update" />
                 </form>

       

	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
