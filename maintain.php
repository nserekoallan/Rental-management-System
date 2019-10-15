<?php
session_start();



?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Maintenance</title>
        <meta name="keywords" content="rental management system" />
        <meta name="description" content="Rental Management System by Raz" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="gallery_style.css" />
        </head>
<body>
<div id="templatemo_container" >
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
                    <li><a href="index.php">Your Profile</a></li>
                    <li><a href="payment.php">Make Payment</a></li>
                    <li><a href="properties.php">View Properties</a></li>
                    <li><a href="maintain.php" class="current">Maintenance Request</a></li>             
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" height="100px">

        <form method="post" action="upload.php" class="appear" enctype="multipart/form-data">
            <p><label>Name: <br>
                <input name="Name" type="text"  size="10" required>
            </label>
            </p>
            <p><label>Property Number: <br>
                    <input name="pno" type="text" size="10"  required>
            </label>
            </p>
            <p><strong>Maintenace Issue:</strong><br>
            <label>Appliances:
                <input name ="issues" type ="radio" value="Appliances">
            </label>
            <label>Electrical:
                <input name="issues" type="radio" value="Electrical">
            </label>
            <label>Plumbing:
                <input name="issues" type="radio" value="Plumbing">
            </label>
            
            <label>Other:
                <input name="issues" type="radio" value="Other">
            </label><br> <br>

            </p>

            <p><label>Description:<br>
                <textarea required name="des" rows="4" cols="36" placeholder="Please describe your issue here."></textarea>
            </label><br>
            <label>upload image: <br>
            <input name="file" type="file" required >
            </label>
            </p>

            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>


	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>