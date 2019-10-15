<?php
include "connection.php";
session_start();
if(isset($_SESSION['email'])){
  $_SESSION['msg']='You must be logged in to view this page';
  $session_destroy();
  header("location:login.html");
}
$pno1=$_POST['pno1'];
$pname=$_POST['pname'];
$amount=$_POST['amount'];
$pay=$_POST['pay'];




    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Kayiwa">
        <meta name="description" content="Rental Management system">

        <title>Property Payment</title>

        <link rel="stylesheet" type="text/css" href="style1.css">

    </head>

    <body background="house6.jpg">
        <header class="header">RAZ'S RENTAL MANAGEMENT SYSTEM</header>

        <nav class="menu">
            <div class="wrapped">
                <ul>

                        <ul>
                                <li><a href="index.php">Your Profile</a></li>
                                <li><a class="active" href="">Payment</a></li>
                                <li><a href="maintenace.php">Maintenance Request</a></li>

                        </ul>

                </ul>
            </div>
        </nav>



        <div class="main">
            <div class="wrapped">
                <h3>Payment For Property</h3>


                <form method = "post" action="#" class="appear">
                    <p><label >Property No:
                        <input name="pno1" type="text" size="10" required="true" id="pno1">
                    </label></p>
                    <p><label>Property Name:
                        <input name="pname" type="text" size="10" required="true">
                    </label></p>
                    <p><label>Amount to paid:
                        <input name="amount" type="number" size="10" length="10" required="true">
                    </label></p>
                    <p><label>Choice of payment method:
                        <label>Cash:
                            <input name ="pay" type ="radio" value="Appliances">
                        </label>
                        <label>Mobile Money:
                            <input name="pay" type="radio" value="Electrical">

                        <label>Kwiksy:
                            <input name="pay" type="radio" value="QR code">
                        </label>
                        <label>Credit Card:
                            <input name="pay" type="radio" value="Other">
                        </label>
                    </label></p>

                    <input type="submit" value="Confirm Payment" onsubmit="check_password();">
                    <input type="reset" value="Clear">
                        </form>




            </div>
            </div>

        <footer class="footer">
            <div class="wrapped">
                    <p>&copy <a href="#">RAZ'S RENTAL MANAGEMENT SYSTEM </a>All rights reserved.</p>
            </div>

        </footer>
    </body>




</html>
