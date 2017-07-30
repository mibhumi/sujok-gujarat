<?php
include("connection.php");
	$id=$_REQUEST['id'];
	$otpt='';
	$sql="select * from complaint where Patient_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
			<p>  Complaint Id: '.$rows[0].'  </p>
			<p>  Major Complaint: '.$rows[3].' </p>
			<p>  Other Complaint: '.$rows[4].' </p>
			<p>  Remark: '.$rows[6].'  </p>
		';		
	}
	echo $otpt;
	if($otpt=="")
	{
		echo "No omplaint registered ";
	}
?>
