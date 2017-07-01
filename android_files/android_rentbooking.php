<?php
include 'myconnection.php';
$hh=$_POST['sid'];
$hhj=$_POST['uid'];
$uname=$_POST['dateo'];
$uemail=$_POST['timeo'];
$umobile=$_POST['desco'];



$s_id=uniqid('',true);
$rqlqry="INSERT INTO adminbooking (uid,sid,bdate,btime,bdescription) VALUES('$hh','$hhj','$uname','$uemail','$umobile')";

$response['exits']=TRUE;
$response['users_detail']['uid']=$hh;
$response['users_detail']['sid']=$hhj;
$response['users_detail']['bdate']=$uname;
$response['users_detail']['btime']=$uemail;
$response['users_detail']['bdescription']=$umobile;
$emyq=mysqli_query($con,$rqlqry);

mysqli_close($con);
 ?>
