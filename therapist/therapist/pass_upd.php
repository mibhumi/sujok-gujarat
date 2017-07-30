<?php
@ob_start();
session_start();
include("connection.php");

	$old_pass=md5($_REQUEST['passval']);
	$sql="select * from therapist where Therapist_Id='$_SESSION[uid]'";
	$otpt=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($otpt))
	{
		$pass=$row[4];
	}
	if($old_pass != $pass)
	{
		echo "Your current password is wrong!";
	}
?>