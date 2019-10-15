<?php
session_start();
    ?>



<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Notifications Page</title>
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
                        <li><a href="propertylist.php">VIEW PROPERTY</a></li>
                        <li><a href="maintenance.php" >MAINTENANCE</a></li>
                        <li><a href="notify.php" class="current">NOTIFICATIONS</a></li>
                        <li><a href="add.php" >ADD PROPERTY</a></li>
                        
                        
                               
                </ul> 

            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

        <h3>Notifications</h3>
<?php
include 'connection.php';

$query="SELECT * FROM property WHERE status ='booked'";
$raw=mysqli_query($con,$query);
$rows=mysqli_num_rows($raw);
if(empty($rows)){
    echo "<p>no notifications</p>";
}
while($results=mysqli_fetch_array($raw)){
    $image=$results['image'];
    $rooms=$results['rooms'];
    $price=$results['price'];
    $status=$results['status'];
    $property_no=$results['property_no'];
    $_SESSION[property_no]=$results['property_no'];
    $house=$results['property_name'];
    $query1="SELECT * FROM payment WHERE property_no=$property_no";
    $check=mysqli_query($con,$query1);
    $result1=mysqli_fetch_array($check);
    $amount=$result1['amount'];
    echo "<li>
    <div class='templatemo_section_2'>
    <p>  
            
            <img src='images/$image' alt='image goes here' />
            <h4>$house House</h4>
            <h5>Property No: $property_no</h5>
            <p>$rooms bedrooms,Kitchen,Lounge.</p>
            <div class='price'>PRICE:<span> UGX $price</span></div>
            <p>Status:$status</p>   
            <p style='font-style:italics;'>paid amount=$amount</p>               
            <div class='readmore'><a href='accept.php'>ACCEPT request</a></div>
        </div>
        </li>";


}

?>

       

	
</div>
<a href="logout.php?success">
        <button type="button" class="btn-app">Log Out</button></a>
<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
