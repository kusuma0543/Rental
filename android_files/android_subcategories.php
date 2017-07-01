<?php
include 'myconnection.php';
$hh=$_GET['cid'];

$mysqcon = "SELECT * FROM adminsubcategory where cid='$hh'";
$exmyqry=mysqli_query($con,$mysqcon);
$result = array();
while($row = mysqli_fetch_array($exmyqry)){
array_push($result,
array('cid'=>$row['cid'],'sid'=>$row['sid'],
'sname'=>$row['sname'],'stype'=>$row['stype'],'scode'=>$row['scode'],'sactualcost'=>$row['sactualcost']
,'spickup'=>$row['spickup'],'sreturn'=>$row['sreturn'],'simgurl'=>$row['simgurl']
,'srent'=>$row['srent'],'scostdiscount'=>$row['scostdiscount']
,'stilldate'=>$row['stilldate'],'slat'=>$row['slat'],'slongi'=>$row['slongi']
));
}
echo json_encode(array("result"=>$result));
mysqli_close($con);

?>
