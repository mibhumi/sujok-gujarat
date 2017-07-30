<?php
include("connection.php");
	$id=$_REQUEST['id'];
	$otpt='';
	$sql="select * from treatment where Patient_Id=$id";
	$ress=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($ress))
	{
		$otpt='
			<p> <label> Treatment date: '.$rows[2].' </label> </p>
			<p> <label> CS: '.$rows[3].' </label> </p>
			<p> <label> EFT: '.$rows[4].' </label> </p>
			<p> <label> 6KI: '.$rows[5].' </label> </p>
			<p> <label> Triorigin: '.$rows[6].' </label> </p>
			<p> <label> Other: '.$rows[7].' </label> </p>
		';		
	}
	echo $otpt;
?>
