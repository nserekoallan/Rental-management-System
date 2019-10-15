<?php
session_start();
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
 <html>
     <head>
         <meta charset="UTF-8">
         <meta name="author" content="Kayiwa">
         <meta name="description" content="Rental Management system">
         <meta name="viewport" content="width=device-width, intial-scale=1"; >
         <style>
         body, html {
             height: 100%;
             margin:0;
         }
         .bg{
     background-color:lightblue;
     height: 100%;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
 }
         </style>

         <title>Rental Management System</title>

         <link rel="stylesheet" type="text/css" href="style1.css">

     </head>

     <body>
         <div class="bg">
         <header class="header">RAZ'S RENTAL MANAGEMENT SYSTEM</header>

         <nav class="menu">
             <div class="wrapped">
                 <ul>
                         <ul>
                                 <li><a class="" href="index.php">Home</a></li>
                                 <li><a class="" href="properties.php">view properties</a></li>
                                 <li><a class="" href="notifications.php">notification</a></li>
                                 <li><a class="" href="invoice.php">invoices</a></li>
                                 <li><a class="" href="payment.php">payments</a></li>
                                 <li><a href="maintenace.php">maintenace</a></li>
                                 <li><a href="update.php">Change Password</a></li>
                                 <li><a href="logout.php">Log Out</a></li>

                         </ul>
                 </ul>
             </div>
         </nav>
         <div class="main">
             <div class="wrapped">
                 <h3>search property</h3>

                 <form action="search.php" method="GET">
                   <input type="text" name="query" />
                   <input type="submit" value="Search property" />
                 </form>
                             </div>
                             </div>


         <div class="main">
             <div class="wrapped">
                 <h3>Properties For Rent</h3>
                 <div class="clearfix">

                     <div class="houses">
                         <img src="uploads/house1.jpg">
                         <span class="house-title">63rd apartment</span>
                         <span class="house-title">Location:Kampala</span><br>
                         <a href="apply.php">
                         <button type="button" class="btn-app">Apply for Property</button></a>
                     </div>

                     <div class="houses">
                             <img src="uploads/house2.jpg">
                             <span class="house-title">63rd apartment</span>
                             <span class="house-title">Location:Kampala</span><br>
                             <a href="apply.php">
                             <button type="button" class="btn-app">Apply for Property</button></a>
                     </div>

                     <div class="houses">
                             <img src="uploads/house3.jpg">
                             <span class="house-title">63rd apartment</span>
                             <span class="house-title">Location:Kampala</span><br>
                             <a href="apply.php">
                             <button type="button" class="btn-app">Apply for Property</button></a>
                     </div>

                 </div>
             </div>
             </div>
 <a href="logout.php">Click here to <b>logout</b> </a>
         <footer class="footer">
             <div class="wrapped">
                     <p>&copy <a href="#">RAZ'S RENTAL MANAGEMENT SYSTEM </a>All rights reserved.</p>
             </div>

         </footer>
         </div>
     </body>




 </html>
