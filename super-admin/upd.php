<?php
include("connection.php");

$cent_id=$_REQUEST['centreid1'];
$cent_name=$_REQUEST['centre_name'];
$cent_add=$_REQUEST['address'];
$cent_city=$_REQUEST['city'];
$cent_state=$_REQUEST['state'];
$cent_pin=$_REQUEST['pincode'];
$cent_no=$_REQUEST['contact_no'];
$cent_code=$_REQUEST['centre_code'];
$cent_rem=$_REQUEST['remark'];
$str="update centre set Centre_Name='$cent_name',Address='$cent_add',City='$cent_city',State='$cent_state',Pincode='$cent_pin',Contact='$cent_no',Centre_Code='$cent_code',Remark='$cent_rem' where Centre_Id='$cent_id'";
$res=mysqli_query($conn,$str);	
if(!$res)
{
	echo mysqli_error("Could not update");
}
else
{
	header('location:centreedit.php');
}
?>