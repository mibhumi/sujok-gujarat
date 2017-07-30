<?php
include("connection.php");

$the_id=$_REQUEST['theid1'];
$the_name=$_REQUEST['Therapist_Name'];


$username=$_REQUEST['Username'];
$password=$_REQUEST['Password'];
$centreid=$_REQUEST['Centre_Id'];
$the_add=$_REQUEST['Address'];
$contact=$_REQUEST['Contact'];
$the_rem=$_REQUEST['Remark'];
$str="update therapist set Therapist_Name='$the_name',Username='$username',Password='$password',Centre_Id='$centreid',Address='$the_add',Contact='$contact',Remark='$the_rem' where Therapist_Id='$the_id'";
move_uploaded_file($tmp,$path);	
$res=mysqli_query($conn,$str);
if(!$res)
{
	echo "Could not update";
}
else
{
	header('location:therapist_edit.php');
}
?>