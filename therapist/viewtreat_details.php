<?php
include("connection.php");
	$id=$_REQUEST['id'];
	$otpt='';
	$sql="select * from treatment where Treatment_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
			<p> <label class="col-md-3"> Remark: </label><label class="col-md-20">'.$rows[2].' </label> </p>
			<p> <label class="col-md-3"> Complaint Id: </label><label class="col-md-20">'.$rows[3].' </label> </p>
			<p> <label class="col-md-3"> Major Complaint: </label><label class="col-md-20">'.$rows[4].' </label> </p>
			<p> <label class="col-md-3"> Other Complaint: </label><label class="col-md-20">'.$rows[5].' </label> </p>
			<p> <label class="col-md-3"> Remark: </label><label class="col-md-20">'.$rows[6].' </label> </p>
			<p> <label class="col-md-3"> Remark: </label><label class="col-md-20">'.$rows[9].' </label> </p>
		';		
	}
	echo $otpt;
?>
