<?php
include("connection.php");

$comp_id=$_REQUEST['compid1'];
$pat_id=$_REQUEST['Patient_Id'];
$var1=$_REQUEST['Complaint_Date'];
$comp_date= date("Y-m-d", strtotime($var1) );
$maj_comp=$_REQUEST['Major_Complaint'];
$other_comp=$_REQUEST['Other_Complaint'];
$cent_id=$_REQUEST['Centre_Name'];
$rem=$_REQUEST['Remark'];


$str="update complaint set Complaint_Date='$comp_date',Major_Complaint='$maj_comp',Other_Complaint='$other_comp',Remark='$rem' where Complaint_Id='$comp_id'";
$res=mysqli_query($conn,$str);
if(!$res)
{
	header('location:comerr.htm');
}
else
{
	header('location:complaint_edit.php');
}
?>