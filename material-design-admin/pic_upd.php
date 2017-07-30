<?php
include("connection.php");
	$id=$_POST['tid'];
	$therapist_pic=$_FILES['fileup']['name'];
	$tmp=$_FILES['fileup']['tmp_name'];
	$path="upload/$therapist_pic";
	$string="update therapist set Photo='$therapist_pic' where Therapist_Id='$id'";
	move_uploaded_file($tmp,$path);
	$output=mysqli_query($conn,$string);
	if(!$output)
	{
		echo mysqli_error("Could not Update");
	}	
	else
	{
		header('location:therapist_profile.php');
	}
?>