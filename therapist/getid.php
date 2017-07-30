<?php
session_start();
include("connection.php");
$e=$_REQUEST['e'];
	$sql="select * from patient where Patient_Id='$e'";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);

					$getval="select * from seating where Patient_Id='$e'";
					$result3=mysqli_query($conn,$getval);
					
					$oldset=mysqli_fetch_array($result3);
					if($oldset){
						
						
					
				echo  $_SESSION["chkseating"]=$oldset[2]; 
}
else
{
	echo $_SESSION["chkseating"]=0;
}
?>

<br>



