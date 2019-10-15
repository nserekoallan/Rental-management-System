<?php
include "connection.php";
session_start();
if(isset($_SESSION['email']){
  $_SESSION['msg']='You must be logged in to view this page';
  $session_destroy();
  header("location:login.html");
}
$pno1=$_POST['pno1'];
$pname=$_POST['pname'];
$amount=$_POST['amount'];
$pay=$_POST['pay'];
} 
    ?>



<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Payment Page</title>
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
                    <li><a href="tenant.html">Your Profile</a></li>
                    <li><a href="payment.html" class="current">Make Payment</a></li>
                    <li><a href="properties.html">View Properties</a></li>
                    <li><a href="maintenance.html">Maintenance Request</a></li>             
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

        <h3>Payment For Property</h3>


        <form method = "post" action="#" class="appear" class="templatemo_menu_login_section">
            <p><label >Property No:
                <input name="pno1" type="text" size="10" required="true" id="pno1">
            </label></p>
            <p><label>Property Name:
                <input name="pname" type="text" size="10" required="true">
            </label></p>
            <p><label>Amount to paid:
                <input name="amount" type="number" size="10" length="10" required="true">
            </label></p>
            
            <input type="submit" value="Confirm Payment" onsubmit="check_password();">
            <input type="reset" value="Clear">
                </form>


	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
