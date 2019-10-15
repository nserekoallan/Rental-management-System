<?php session_start();?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registration</title>
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
                    <li><a href="tenant.html">Your Profile</a></li>
                    <li><a href="payment.html" class="current">Make Payment</a></li>
                    <li><a href="properties.html">View Properties</a></li>
                    <li><a href="maintenance.html">Maintenance Request</a></li>             
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
      


           
        </div>
    </div> 
</div> <!-- end of top panel -->


<div id="templatemo_content_panel_1" >

        <h3>registered</h3>

 


        <?php session_start();  ?>
<?php
include "connection.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

if($password1!=$password2){
  die("password dont match");
    }
else {
  $password=md5($password1);

      }
$sql="INSERT INTO tenant (FirstName,LastName,Email,contact,password) VALUES('$fname','$lname','$email','$contact','$password')";
mysqli_query($con,$sql);
if(mysqli_query($con,$sql)){
  echo "Error: ".$sql .mysqli_connect_error($con);

      }
else {
  echo "<p><b>THANK YOU, $fname for registering with us</b> <br> The following data has been captured about you:<br>";
  echo "<table align='center' border='0'>";
  echo "<tr>";
  echo "<th colspan='2'>NEW TENANT INFORMATION</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>First name</td>";
  echo "<td>$fname</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Last Name</td>";
  echo "<td>$lname</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>email</td>";
  echo "<td>$email</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Contact</td>";
  echo "<td>$contact</td>";
  echo "</tr>";
  echo "</table>";
  echo "<a href='login.html' >click here to login</a>";
        }
$_SESSION['email']=$email;
if(isset($_SESSION['email'])){
  echo "successfully logged in";
  echo "<p><a href='login.html>click here to login</";
 }
else {
 echo "You must login to view this page";
 // header("location:contact.html");
 }

    

                  ?>
       

	
</div>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
