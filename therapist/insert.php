<?php
include("connection.php");
$name=$_POST['centre_name'];
$add=$_POST['address'];
$city=$_POST['city'];
$st=$_POST['state'];
$pinc=$_POST['pincode'];
$cont=$_POST['contact_no'];
$c_code=$_POST['centre_code'];
$remarks=$_POST['remark'];
$str="insert into centre values('','$name','$add','$city','$st','$pinc','$cont','$c_code','$remarks')";
$result=mysqli_query($conn,$str);
if(!$result)
{
	echo "Could not insert";
}
else
{
	echo "Successfully Inserted";
}
?>