<?php
ob_start();
session_start();
include 'myconnection.php';
error_reporting(0);
$sno=$_GET['id'];
echo $sno;
$query="DELETE FROM admincategory WHERE id='$sno'";
$ans = mysqli_query($con,$query);
header("location:admincategory_display.php?yes=1");

    ob_end_flush();
                exit;
?>
