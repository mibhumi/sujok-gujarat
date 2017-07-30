<?php
	$conn=mysqli_connect("localhost","root","","sujok");
	$id=$_REQUEST['id'];
	$otpt='';
	$sql="select * from enquiry where Person_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
			
			<p> <label class="col-md-3"> Patient Name: </label><label class="col-md-8">'.$rows[2].' </label> </p>
			<p> <label class="col-md-3"> Address: </label><label class="col-md-8">'.$rows[4].' </label> </p>
			<p> <label class="col-md-3"> City: </label><label class="col-md-8">'.$rows[5].' </label> </p>
			<p> <label class="col-md-3"> State: </label><label class="col-md-8">'.$rows[6].' </label> </p>
			<p> <label class="col-md-3"> Pincode: </label><label class="col-md-8">'.$rows[7].' </label> </p>
			<p> <label class="col-md-3"> Mobile:</label><label class="col-md-8"> '.$rows[8].' </label> </p>
			<p> <label class="col-md-3"> Phone: </label><label class="col-md-8">'.$rows[9].' </label> </p>
			<p> <label class="col-md-3"> Email:</label><label class="col-md-8"> '.$rows[10].' </label> </p>
			<p> <label class="col-md-3"> date of birth: </label><label class="col-md-8">'.$rows[12].' </label> </p>
			<p> <label class="col-md-3"> Remark:</label><label class="col-md-8"> '.$rows[14].' </label> </p>
		';		
	}
	echo $otpt;
?>
