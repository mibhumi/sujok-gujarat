<?php
		include("connection.php");
		 $compid=$_REQUEST['id'];
		 $str="delete from complaint where Complaint_Id=$compid";
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
