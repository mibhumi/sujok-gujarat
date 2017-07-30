<?php
		include("connection.php");
		 $patid=$_REQUEST['id'];
		 $str="select * from complaint where Patient_Id='$patid'";
		 $result=mysqli_query($conn,$str);
	     $recs=mysqli_fetch_array($result);
		 if(empty($recs))
		 {
			 echo "No complaints to delete";
		 }
		 else
		 {
			 $sqlqry="delete from complaint where Patient_Id='$patid'";
			 $sqlres=mysqli_query($conn,$sqlqry);
			 if(!$sqlres)
			 {
				 echo "Could not delete";
			 }
			 else
			 {
				 echo "Deleted Successfully";
			 }
		 }
?>