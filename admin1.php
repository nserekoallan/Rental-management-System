<?php
include "connection.php";
session_start();
$username=strtolower($_POST['username']);
$admin_password=$_POST['password'];
$check="SELECT * FROM admin WHERE username='$username'";
$row=mysqli_query($con,$check);
$results=mysqli_fetch_array($row);
if($results) {
  echo "wrong user name or password";
 // header("location: login.html");
  }
if($results['password']===$admin_password){
  $_SESSION['username']=$username;
  $_SESSION['success']='You are now logged in as admin';
        }
else{
  echo "<p>wrong username or password<p>";
  session_destroy();
  header("location:login.html");
    }    


/*$query="SELECT * FROM property";
$raw=mysqli_query($con,$query);
$property=mysqli_fetch_array($raw);
*/
  ?>

<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Raz's Rental Management System</title>
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
                        <li><a href="tenants.php" class="current">Tenants</a></li>
                        <li><a href="maintenace.php">Maintenance</a></li>
                        <li><a href="notify.php">Notifications</a></li>
                        <li><a href="properylist.php">View Property</a></li>
                        <li><a href="add.php">Add Property</a></li>
                        <li><a href="reserved.php">Reserved</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                               
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

        <p>This page is supposed to have the add properties stuff.</p><hr>
        <p>This page is supposed to show maintenance requests.</p><hr>
        <p>This page is supposed to have the reports on all properties.</p>
	
</div>
<a href="index.html">
        <button type="button" class="btn-app">Log Out</button></a>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>