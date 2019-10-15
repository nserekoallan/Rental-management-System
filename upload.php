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

        <h3>maintenace requests</h3>
        <?php
session_start();
include "connection.php";
$name=$_POST['Name'];
$pno=$_POST['pno'];
$issue=$_POST['issues'];
$description=$_POST['des'];
$filename=$_FILES['file']['name'];

$target_dir="images/maintain/";
$extarr=explode('.',$filename);
$imgext = strtolower(end($extarr));
$extensions = array('jpeg','jpg','png');
if(in_array($imgext,$extensions)){
   if(($_FILES['file']['size'] >= 5000000) || ($_FILES["file"]["size"] == 0)) {
     echo "File too large. File must be less than 5MB.";
   }else{
      $target_file=$target_dir.$pno.$imgext;
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
     
       $query ="INSERT INTO maintain (name,property_no,issue,description) VALUES('$name','$pno','$issue','$description')";

       mysqli_query($con,$query);
       echo "<p>Uploaded successfully.</p>";

     }
   }

}else{
   echo "Invalid file extension.";
}
?>

	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
