<?php
session_start();

include("connection.php");

$tr_id=$_REQUEST['tid1'];
$tname=$_REQUEST['Therapist_Name'];
$user=$_REQUEST['username'];
$addr=$_REQUEST['addr'];
$centre=$_REQUEST['centre'];
$cont=$_REQUEST['cont'];

$rem=$_REQUEST['remark'];
$str="update therapist set Therapist_Name='$tname',Username='$user',Address='$addr',Centre_Id='$centre',Contact='$cont',Remark='$rem' where Therapist_Id='$tr_id'";	
$res=mysqli_query($conn,$str);
if(!$res)
{
	echo "Could not update";
}
else
{
	header('location:adminedit.php');
}
?>