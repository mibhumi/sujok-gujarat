<?php
session_start();
include("connection.php");

$tr_id=$_REQUEST['tid1'];
$var1 =$_REQUEST['Treatment_Date'];
$treat_date= date("Y-m-d", strtotime($var1) );
$cs=$_REQUEST['CS'];
$eft=$_REQUEST['EFT'];
$ki=$_REQUEST['KI'];
$triorigin=$_REQUEST['Triorigin'];
$other=$_REQUEST['Other'];
$Centre_Id=$_SESSION['Centre_Id'];
$rem=$_REQUEST['remark'];
$str="update treatment set Treatment_Date='$treat_date',CS='$cs',EFT='$eft',6KI='$ki',Triorigin='$triorigin',Others='$other',Centre_Id='$Centre_Id',Remark='$rem' where Treatment_Id='$tr_id'";	
$res=mysqli_query($conn,$str);
if(!$res)
{
	header('location:treerr.htm');
}
else
{
	header('location:viewtreatment.php');
}
?>