<?php
session_start();
    ?>



<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Notifications</title>
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
                    <li><a href="index.php">Your Profile</a></li>
                    <li><a href="payment.php">Make Payment</a></li>
                    <li><a href="properties.php" >View Properties</a></li>
                    <li><a href="maintain.php">Maintenance Request</a></li>    
                    <li><a href="notice.php" class="current">Notifications</a></li> 
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
include "connection.php";
$pn=$_SESSION['property_no'];
$query ="SELECT * FROM property WHERE property_no=$pn";
$raw=mysqli_query($con,$query);
$check=mysqli_num_rows($raw);
$query1="SELECT * FROM payment WHERE property_no=$pn";
$raw1=mysqli_query($con,$query1);
$pay=mysqli_fetch_array($raw1);
$amount=$pay['amount'];
if(empty($check)){
    echo "<ul style='list-style-type:disc'>
   <li> <p style='font-size:20px; font-color:green; font-style:italic;'> You have not yet purchased a house or property number doesnt exist in the database, please process payment again with the available and correct property details</p> </li></ul>";
}else{
    while($results=mysqli_fetch_array($raw)){
        if($results['status']=='booked'){
            echo "<p style='font-size:20px; font-color:green; font-style:italic;'> Your payment is being processed, please wait for admin confirmation</p> ";
        }
        if($results['status']){

        echo "<ul> <li><p style='font-color:green; font-size:20px; font-style:italic;'> Congratulations,your payment of UGX.$amount has been successfully processed for property number:".$results['property_no']."</p> </li></ul>";
        }
    }
}
?>
	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
