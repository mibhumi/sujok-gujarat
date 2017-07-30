<?php
include("connection.php");
	$id=$_REQUEST['id'];	
	$otpt='';
	$sql="select * from therapist where Therapist_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
		<div class="col-md-6"><p > <label>  <img src="img_thep/'.$rows[2].'" width=150px height=200px > </label> </p></div>
		
			<p> <label> name: '.$rows[1].' </label> </p>
			
			<p> <label> username: '.$rows[3].' </label> </p>
			
			<p> <label> Centre Id: '.$rows[5].' </label> </p>
			<p> <label> Address : '.$rows[6].' </label> </p>
			<p> <label> Centact: '.$rows[7].' </label> </p>
			<p> <label> Remark: '.$rows[8].' </label> </p></div>
		';		
	}
	echo $otpt;
?>
