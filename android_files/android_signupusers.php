<?php
include 'myconnection.php';
$uname=$_POST['user'];
$uemail=$_POST['email'];
$umobile=$_POST['mobile'];
$upassword=$_POST['password'];


$s_id=uniqid('',true);
$rqlqry="INSERT INTO adminusers (uid,uname,uemail,umobilenumber,upassword) VALUES('$s_id','$uname','$uemail','$umobile','$upassword')";

$response['exits']=TRUE;
$response['users_detail']['uid']=$uname;
$response['users_detail']['uname']=$uemail;
$response['users_detail']['uemail']=$umobile;
$response['users_detail']['umobilenumber']=$umobile;
$emyq=mysqli_query($con,$rqlqry);

mysqli_close($con);
 ?>
