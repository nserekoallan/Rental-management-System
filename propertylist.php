<?php
session_start();
if(isset($_SESSION['username'])){

}else{
    echo "You must login to view this page";
    session_destroy();
    header("location:index.html");
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Property</title>
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
                        <li><a href="tenants.php" >TENANTS</a></li>
                        <li><a href="propertylist.php" class="current">VIEW PROPERTY</a></li>
                        <li><a href="maintenance.php">MAINTENANCE</a></li>
                        <li><a href="notify.php">NOTIFICATIONS</a></li>
                        <li><a href="add.php" >ADD PROPERTY</a></li>
                       
                        
                               
                </ul> 
            </div> <!-- end of menu -->
        </div>
        
    </div> 
</div> <!-- end of top panel -->


<form method = "get" action="search.php" class="appear" class="templatemo_menu_login_section">
             <br>
                <input name="query" type="text" size="10" required="true" id="pno1">
                <input name='search' type="submit" value="search"></p>
</form>

<?php
include "connection.php";
$query="SELECT * FROM property";
$raw=mysqli_query($con,$query);
echo "<ul>";
while($result=mysqli_fetch_array($raw)){
    $image=$result['image'];
    $rooms=$result['rooms'];
    $price=$result['price'];
    $status=$result['status'];
    $property_no=$result['property_no'];
    $house=$result['property_name'];
    
    echo "<li>
    <li><div class='templatemo_section_2'>
            <img src='images/$image' alt='image goes here' />
            <h4>$house House</h4>
            <h5>Property No: $property_no</h5>
            <p>$rooms bedrooms,Kitchen,Lounge.</p>
            <div class='price'>PRICE:<span> UGX $price</span></div>
            <p>Status:$status</p>                            
            <div class='readmore'><a href='preferences.php'>Preferences</a></div>
        </div>
        </li>
        ";
}
echo "</ul>";
?>
      
<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</div>
</body>
</html>