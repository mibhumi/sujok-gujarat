<?php
include("connection.php");
session_start();
$e=$_REQUEST['q'];
	$sql="select Total_Stock from inventory where Product_Id='".$e."' and Centre_Id=$_SESSION[Centre_Id]";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
if($row)
{
 echo $row[0];
}
?>

