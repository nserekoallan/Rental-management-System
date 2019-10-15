<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tenants</title>
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
                        <li><a href="tenants.php" class="current">TENANTS</a></li>
                        <li><a href="propertylist.php">VIEW PROPERTY</a></li>
                        <li><a href="maintenance.php" >MAINTENANCE</a></li>
                        <li><a href="notify.php">NOTIFICATIONS</a></li>
                        <li><a href="add.php" >ADD PROPERTY</a></li>
                       
                        
                               
                </ul>  
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
<?php
include "connection.php";
$query="SELECT * FROM maintain";
$raw=mysqli_query($con,$query);
$results=mysqli_fetch_array($raw);
echo "";

?>
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

        <h3>Payment For Property</h3>


       

	
</div>
<a href="logout.php?success">
        <button type="button" class="btn-app">Log Out</button></a>
<div id="templatemo_footer_panel">
<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
