<?php
	include("connection.php");
	$packid=$_REQUEST['id'];
	$sql="select * from package_account where Package_Id='$packid'";
	$res=mysqli_query($conn,$sql);
	$rr=mysqli_fetch_array($res);
	if(empty($rr))
	{
	 $qwertyu="delete from package where Package_Id='$packid'";
	 $result=mysqli_query($conn,$qwertyu);   
	 if($result)
	 {
	   echo "Successfully Deleted!";
	 }
	 else
	 {
		echo "Could not Delete<br> Try again later"; 
	 }
	}
	else
	{
	  echo "The Package has been taken<br> Cannot be Deleted!";
	}
?>
