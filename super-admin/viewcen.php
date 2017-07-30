<?php
include("connection.php");
	$id=$_REQUEST['id'];	
	$otpt='';
	$sql="select * from centre where Centre_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
		<p> <label class="col-md-3 "> Centre Id: </label><label class="col-md-8">  '.$rows[0].' </label> </p>
		<p> <label class="col-md-3 "> Centre name: </label><label class="col-md-8"> '.$rows[1].' </label> </p>
		<p> <label class="col-md-3 s"> address: </label><label class="col-md-8">  '.$rows[2].' </label> </p>
			<p> <label class="col-md-3 "> city: </label><label class="col-md-8"> '.$rows[3].' </label> </p>
			<p> <label class="col-md-3 "> state: </label><label class="col-md-8"> '.$rows[4].' </label> </p>
			<p> <label class="col-md-3 "> pincode: </label><label class="col-md-8"> '.$rows[5].' </label> </p>
			<p> <label class="col-md-3 " > contact : </label><label class="col-md-8"> '.$rows[6].' </label> </p>
			<p> <label class="col-md-3 "> Centre code:</label> <label class="col-md-8"> '.$rows[7].' </label> </p>
			<p> <label class="col-md-3 "> Remark: </label><label class="col-md-8"> '.$rows[8].' </label> </p>
			
			</div>
		';		
	}
	echo $otpt;
?>
