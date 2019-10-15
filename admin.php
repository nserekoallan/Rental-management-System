<?php
include "connection.php";
session_start();
$username=strtolower($_POST['username']);
$admin_password=$_POST['password'];
$check="SELECT * FROM admin WHERE username='$username'";
$row=mysqli_query($con,$check);
$results=mysqli_fetch_array($row);
if($results) {
  echo "wrong user name or password";
 // header("location: login.html");
  }
if($results['password']===$admin_password){
  $_SESSION['username']=$username;
  $_SESSION['success']='You are now logged in as admin';
        }
else{
  echo "<p>wrong username or password<p>";
  session_destroy();
  header("location:login.html");
    }    


/*$query="SELECT * FROM property";
$raw=mysqli_query($con,$query);
$property=mysqli_fetch_array($raw);
*/
  ?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Raz's Rental Management System</title>
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
                        <li><a href="maintenance.php">MAINTENANCE</a></li>
                        <li><a href="notify.php">NOTIFICATIONS</a></li>
                        <li><a href="add.php">ADD PROPERTY</a></li>
                        <li><a href="reserved.php">RESERVED</a></li>
                        
                               
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >
<?php
include "connection.php";
$query="SELECT * FROM tenant";
$raw=mysqli_query($con,$query);
$results=mysqli_fetch_array($raw);
while($results=mysqli_fetch_array($raw)){
      echo  " <p>". $results['FirstName'] ." ".  $results['LastName'] . " contact:". $results['contact']. "</p><hr> ";
}
	?>
</div>
<a href="logout.php?success">
        <button type="button" class="btn-app">Log Out</button></a>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>