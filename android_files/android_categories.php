<?php
include 'myconnection.php';
$mysqcon = "SELECT * FROM admincategory";
$exmyqry=mysqli_query($con,$mysqcon);
$result = array();
while($row = mysqli_fetch_array($exmyqry)){
array_push($result,
array('id'=>$row['id'],'cid'=>$row['cid'],
'cname'=>$row['cname'],'cimgurl'=>$row['cimgurl']

));
}

echo json_encode(array("result"=>$result));

mysqli_close($con);

?>
