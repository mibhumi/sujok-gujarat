<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?><?php
 	 $connect=mysqli_connect("localhost","root","","sujok");
	 
		 $Package_Id=$_REQUEST["id"];
		 $str="delete from therapist where Therapist_Id=$Package_Id";
		 $result=mysqli_query($connect,$str);
	     if(!$result)
	     {
			echo "record is not deleted";
	     }
	     else
		 {
		    echo "record deleted";
			header('location:adminedit.php');
		 }
?>
