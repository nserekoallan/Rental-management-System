<?php session_start(); ?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Search results</title>
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
                                <li><a class="active" href="">Payment</a></li>
                                <li><a href="maintenace.php">Maintenance Request</a></li>

                        </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
      


           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

        <h3>Search results</h3>

        
<?php
include "connection.php";
$search=$_GET['query'];
$qsearch="SELECT * FROM property WHERE property_name like '%".$search."%' OR rooms like '%".$search."%' AND status='available'";
$raw=mysqli_query($con,$qsearch);
$check=mysqli_num_rows($raw);
if($check==0 || empty($check)){
    echo "no matching houses found";
}
/*
  /* while($results = mysqli_fetch_array($raw)){
        echo '<p>';
        echo $results['property_name'];
        echo ' at ';
        echo $results['price'];
        echo ' with status ';
        echo $results['status'];
          echo '</p>';
  }*/
  echo "<ul>";

  while($result=mysqli_fetch_array($raw)){
      $image=$result['image'];
      $rooms=$result['rooms'];
      $price=$result['price'];
      $status=$result['status'];
      $property_no=$result['property_no'];
      $house=$result['property_name'];
      
      echo "
      <hr>
      <li> <div class='templatemo_section_2'>
              <img src='images/$image' alt='image goes here' />
              <h4>$house House</h4>
              <h5>Property No: $property_no</h5>
              <p>$rooms bedrooms,Kitchen,Lounge.</p>
              <div class='price'>PRICE:<span> UGX $price</span></div>
              <p>Status:$status</p>                            
              <div class='readmore'><a href='payment.php'>Apply For House</a></div>
          </div>
          </li>
          ";
  }
  echo "</ul>";

  $results=mysqli_fetch_array($raw);
  
                  ?>
       

	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
