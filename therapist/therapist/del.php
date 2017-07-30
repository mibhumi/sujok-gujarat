<?php
		include("connection.php");
		 $centreid=$_REQUEST['id'];
		 $str="delete from centre where Centre_Id=$centreid";
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
