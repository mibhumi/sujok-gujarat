<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}

?><?php
 	 include("connection.php");
	$prodid=$_REQUEST['id'];
	$sql="select * from product_account where Product_Id='$prodid'";
	$res=mysqli_query($conn,$sql);
	$rr=mysqli_fetch_array($res);
	if(empty($rr))
	{
	 $qwertyu="delete from product where Product_Id='$prodid'";
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
	  echo "This Product has been taken<br> Cannot be Deleted!";
	}
?>
