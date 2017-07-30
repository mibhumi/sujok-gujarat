<?php
		include("connection.php");
		 $patid=$_REQUEST['id'];
		 $str="delete from patient Patient_Id=$patid";
		 $result=mysqli_query($conn,$str);
	     if(!$result)
	     {
			echo "record is not deleted";
	     }
	     else
		 {
		    echo "record deleted";
		 }
?>
