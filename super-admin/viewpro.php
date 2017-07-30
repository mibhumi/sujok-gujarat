<?php
include("connection.php");
	$id=$_REQUEST['id'];	
	$otpt='';
	$sql="select * from product where Product_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
		<div class="col-md-4"> <p> <label > <img src="upload/'.$rows[4].'" height=150px width="150px"> </label> </p></div>
		<div class="col-md-8">
		
		
		<p> <label class="col-md-6"> Product Name: </label><label class=col-md-6>'.$rows[1].' </label> </p>
		<p> <label class="col-md-6"> Product Price: </label><label class=col-md-6>'.$rows[2].' </label> </p>
		<p> <label class=col-md-6> Price:</label> <label class=col-md-6>'.$rows[2].' </label> </p>
		
			<p> <label class=col-md-6> description:</label> <label class=col-md-6>'.$rows[3].' </label> </p>
			
			<p> <label class=col-md-6> remark:</label><label class=col-md-6> '.$rows[5].' </label> </p>
			
			
			</div>
		';		
	}
	echo $otpt;
?>
