<?php
include "connection.php"
$lat=$_POST['lat'];
$lng=$_POST['lng'];

$mysqcon="INSERT INTO gpstab (lat_andro,lng_andro) values('$lat','$lng')";

$exmyqry=mysqli_query($con,$mysqcon);
?>
