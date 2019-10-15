<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Maintenance Page</title>
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
                        <li><a href="tenants.php" >TENANTS</a></li>
                        <li><a href="propertylist.php">VIEW PROPERTY</a></li>
                        <li><a href="maintenance.php"class="current" >MAINTENANCE</a></li>
                        <li><a href="notify.php">NOTIFICATIONS</a></li>
                        <li><a href="add.php" >ADD PROPERTY</a></li>
                     
                        
                               
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->
<div class="templatemo_content_panel_1">
<?php
include "connection.php";
$query="SELECT * FROM maintain";
$raw=mysqli_query($con,$query);
$results=mysqli_fetch_array($raw);
$check=mysqli_num_rows($aw);
if(empty($check)){
    echo "<ul style='list-style-type:disc'>
   <li> <p style='font-size:20px; font-color:green; font-style:italic;'> no maintenence requests yet</p> </li></ul>";
}else{
    while($result=mysqli_fetch_array($raw)){
        $image=$result['image'];
        $name=$result['name'];
        $issue=result['issue'];
        $description=$result['description'];
        $property_no=$result['property_no'];
        
        
        echo "
        <hr>
        <li> <div class='templatemo_section_2'>
                <img src='images/maintain/$image' alt='image goes here' />
                <p>name: $name</p>
                <h5>Property No: $property_no</h5>
                <p>issue:$issue</p>
                <p>Description:<br>$description </p>                            
                
            </div>
            </li>
            ";
    }
    echo "</ul>";
}
    
                    ?>
         





	
</div>
<a href="logout.php?success">
        <button type="button" class="btn-app">Log Out</button></a>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>