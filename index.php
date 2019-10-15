<?php
ob_start();  //deals with header files sent to server( using buffer)
session_start();
include "connection.php";
if(isset($_SESSION['email'])){

}
else{
  $_SESSION['msg']="You must login to view this page";
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
  header("location: login.html");
  }
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
                    <li><a href="index.php" class="current">Home</a></li>
                    <li><a href="payment.php">Make Payment</a></li>
                    <li><a href="properties.php">View Properties</a></li>
                    <li><a href="maintain.php">Maintenance</a></li>   
                    <li><a href="update.php">Change Password</a></li> 
                    <li><a href="notice.php">notifications</a></li> 
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="templatemo_login_section">
        	
           
        </div>
    </div> 
</div> <!-- end of top panel -->

<?php
$image=$_SESSION['image'];
$name=$_SESSION['tenant_name'];
$email=$_SESSION['email'];
$contact=$_SESSION['contact'];
echo "<div id='templatemo_content_panel_1' >

        <table border= '0'>
                <thead>
                     <tr>
                         <th>
    <img src= 'images/uploads/profile/$image' width=300 height = 150 alt = 'Profile picture'>
                         </th>
                       <th rowspan = '2'>". $name ."<br>
                   
                      <a href = 'mailto:". $email."'>" .$email. "</a><br>".
                      $contact.
                     " </th>
                     </tr>
               </thead>
              <tbody>
                <tr><td>Contact information</td></tr>
               <tr>
                 <td>Address<br> <i>655 West 34th Street, Uganda, NY 10001</i></td>
                 <td>Fax<br>1234567890</td>
                </tr>
    
              <tr>
                  <td>Company Website<br>
                          http//www.razrentals.com
                  </td>
                  <td>Currency<br>
                        UGX
                   </td>
            </tr>
    
           <tr>
              <td>Date Format<br>
                    mm/dd/yyyy</td>
            <td>Time Format<br>
                  AM/PM
            </td>
         </tr>
    
        <tr>
           <td>Time Zone<br>
                   East Africa/kampala - UTC +3:00
            </td>
       </tr>
    <hr>
      <tr colspan = '2'>
          <td>Login & password<br>
                Change your account login & password at any time. Except in the case of a shared 
           </td>
    </tr>
    </tbody>
    </table>

	
</div>"

?>
<a href="logout.php?success">
        <button type="button" class="btn-app">Log Out</button></a>

<div id="templatemo_footer_panel">
    Copyright © 2019 <a href="index.html">Group 13</a> </div>
</body>
</html>
