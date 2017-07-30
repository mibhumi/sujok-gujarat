<?php
include("connection.php");
$e=$_REQUEST['e'];
$f=$_REQUEST['f'];
	$sql="select Total_Stock from inventory where Centre_Id='".$e."' and Product_Id='".$f."' ";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
if($row)
{
echo $row[0]; 
}
else{
echo 0;
}
?>

