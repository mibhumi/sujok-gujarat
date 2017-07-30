<?php
//session_start();
include("connection.php");
$d=$_REQUEST['date_data'];
	$start_date=substr($d,0,10);
	$end_date=substr($d,14,23);
	$barquery="select c.Centre_Name, t.Centre_Id, count(*) as tot_treat from centre c, treatment t where c.Centre_Id=t.Centre_Id and Treatment_Date>='$start_date' and Treatment_Date<='$end_date' group by t.Centre_Id";
	$baroutcome=mysqli_query($conn,$barquery);
	$bardata=array();
	while($barrec=mysqli_fetch_array($baroutcome))
	{
		$bardata[]=array(
			'y' => $barrec['Centre_Name'],
			'a' => $barrec['tot_treat']
		);
	}
	$bardata = json_encode($bardata);
	echo $bardata;
	//$_SESSION['jsondata']=$bardata;
?>	
