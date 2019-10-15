<?php
include "connection.php";
session_start();
$pname=$_POST['pname'];
$price=$_POST['price'];
$rooms=$_POST['rooms'];
$location=$_POST['location'];
$filename=$_FILES['file']['name'];
$target_dir="images/";
$imgFileType = strtolower(pathinfo($_FILE['file']['name'],PATHINFO_EXTENSION));
$ext=explode('.',$filename);
$fext=strtolower(end($ext));
//print_r($_FILES);
$extensions = array('jpeg','jpg','png');
if(in_array($fext,$extensions) ){
   if(($_FILES['file']['size'] >= 5000000) || ($_FILES['file']['size'] == 0)) {
     echo "File too large. File must be less than 5MB.";
   }else{
       $image=$pname ."." .$fext;
    $target_file=$target_dir . $image ;
    move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
//adding house to database
    $query = "INSERT INTO property (property_name,price,location,rooms,image) VALUES('$pname','$price','$location','$rooms','$image')";
     mysqli_query($con,$query);
     echo "New house added successfully.";

   
   }

}else{
   echo "Invalid file extension.";
}


    ?>



<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>New Property</title>
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
                        <li><a href="maintenance.php">MAINTENANCE</a></li>
                        <li><a href="notify.php">NOTIFICATIONS</a></li>
                        <li><a href="add.php" class="current">ADD PROPERTY</a></li>
                       
                        
                               
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

        <h3>Add Property</h3>


        <form method = "post" action="#" class="appear" class="templatemo_menu_login_section"  enctype="multipart/form-data">
                            <p><label>Poperty Name: <br>
                                <input name="pname" type="text" size="10" required="true">
                            </label></p><br>
                            <p><label>NO. of Rooms: <br>
                                <input name="rooms" type="number" min='1' required="true">
                                </label></p> <br>
                            <p><label>Price: <br>
                                <input name="price" type="number" min='100000' required="true">
                            </label></p> <br>
                            <p><label>Location: <br>
                                <input name="location" type="text" required="true">
                            </label></p><br>
                            <p><label>Upload image <br>
                                <input name="file" type="file" >
                            </label></p><br>
                            <input name='submit' type="submit" value="submit">
                            <input name='' type="reset" value="Clear">
                        </form>
                   


	
</div>
<a href="logout.php?success">
        <button type="button" class="btn-app">Log Out</button></a>
<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
