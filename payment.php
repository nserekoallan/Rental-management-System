<?php
include "connection.php";
session_start();
if(isset($_SESSION['email'])){
    $pno1=$_POST['pno1'];
    $pname=$_POST['pname'];
    $amount=$_POST['amount'];
   // $pay=$_POST['pay'];
    $query="INSERT INTO payment (name,property_no, amount) VALUES ('$pname','$pno1','$amount')";
    $query2="UPDATE property SET status='booked' WHERE property_no=$pno1";
    mysqli_query($con,$query2);
    $raw=mysqli_query($con,$query);
}
if($raw){
    $_SESSION['property_no']=$pn01;
    echo "<marquee><p font-size='100' font-color='green' >payment successful, please wait for landlord confirmation</p></marquee>";
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
                    <li><a href="index.php">Your Profile</a></li>
                    <li><a href="payment.php" class="current">Make Payment</a></li>
                    <li><a href="properties.php">View Properties</a></li>
                    <li><a href="maintenance.php">Maintenance Request</a></li>             
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
            <p><label >Property No: <br>
                <input name="pno1" type="text" size="10" required="true" id="pno1">
            </label></p>
            <p><label>Property Name: <br>
                <input name="pname" type="text" size="10" required="true">
            </label></p>
            <p><label>Amount to paid: <br>
                <input name="amount" type="number" size="10" length="10" min="50000" required="true">
            </label></p>
            
            <input name='submit' type="submit" value="Confirm Payment" onsubmit="alert('your payment is being processed, please wait for admin confirmation');">
            <input type="reset" value="Clear">
                </form>


	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>