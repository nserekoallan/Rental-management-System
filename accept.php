<?php 
session_start();
$property_no=$_SESSION['property_no'];
include "connection.php";
 $query="UPDATE property SET status='accepted' WHERE property_no=$property_no";
            mysqli_query($con,$query);
            echo 'successfully updated';
            header('location:notify.php?success'); ?>