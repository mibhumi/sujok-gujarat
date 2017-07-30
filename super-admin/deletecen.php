<?php
 	 
	 include('connection.php');
		// $Package_Id=$_REQUEST["Package_Id"];
		// echo $Package_Id;
		$delid=$_REQUEST['id'];
		$sql="select * from therapist where Centre_Id='$delid'";
		$res=mysqli_query($conn,$sql);
		$rr=mysqli_fetch_array($res);
		if(empty($rr))
		{
		 $qwertyu="delete from centre where Centre_Id=$delid";
		 $result=mysqli_query($conn,$qwertyu);   
		 if($result)
		 {
		   echo "Successfully Deleted!";
		 }
		 else
		 {
			echo "Could not Delete"; 
		 }
		 //echo "hello";
		}
		else
		{
		  //echo "Bye";
		  echo "This Centre has therapist in it<br> cant be deleted";
		 	
		}
		 ?>
