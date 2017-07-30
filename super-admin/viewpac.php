<?php
include("connection.php");
	$id=$_REQUEST['id'];	
	$otpt='';
	$sql="select * from package where Package_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
		
		<p> <label class=col-md-3> Package name:</label><label class=col-md-8>  '.$rows[1].' </label> </p>
		<p> <label class=col-md-3> Description:</label><label class=col-md-8>  '.$rows[2].' </label> </p>
			<p> <label class=col-md-3> Charge:</label><label class=col-md-8>  '.$rows[3].' </label> </p>
			<p> <label class=col-md-3> Seating: </label><label class=col-md-8> '.$rows[4].' </label> </p>
			<p> <label class=col-md-3> Remark:</label><label class=col-md-8>  '.$rows[5].' </label> </p>
			
			
			</div>
		';		
	}
	echo $otpt;
?>
