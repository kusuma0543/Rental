<?php
include 'myconnection.php';
$rmobile=$_POST['umobilenumber'];
$upassword=$_POST['upassword'];
$qquery="SELECT * FROM adminusers WHERE umobilenumber='$rmobile' ";
$emy=mysqli_query($con,$qquery);
 $login_row=mysqli_num_rows($emy);
 $row = mysqli_fetch_array($emy);
 if ($login_row>0) {

$qqueryy="SELECT * FROM adminusers WHERE umobilenumber='$rmobile' ";
$emyy=mysqli_query($con,$qqueryy);
 $roww = mysqli_fetch_array($emyy);
if ($upassword==$roww['upassword']) {
  $responq['exits'] =TRUE;
   $responq['user_det']['umobilenumber']=$roww['umobilenumber'];
     $responq['user_det']['upassword']=$roww['upassword'];
        $responq['user_det']['uid']=$roww['uid'];

}
 else {
   $responq['exits'] =FALSE;
   $responq['messeade'] ="password wrong";

}
}else {
   $responq['exits'] =FALSE;
   $responq['messeade'] ="user not";
 }

echo json_encode($responq);
mysqli_close($con);
 ?>
