<?php
session_start();
include("connection.php");
	$email_value=$_REQUEST['emval'];
	//$the_name=$_REQUEST['thename'];
	$u_name="";
	$sql="select * from therapist where Username='$email_value'";
	$otpt=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($otpt))
	{
		$u_name=$row[3];
		$thename=$row[1];
	}
	 //$_SESSION['tname']=$thename;
	 //$_SESSION['temail']=$u_name;
	if(empty($email_value))
	{
		echo "Please Provide your Email";
	}
	else if($u_name != $email_value)
	{
		echo "This Email Does Not Exist";
	}
?>