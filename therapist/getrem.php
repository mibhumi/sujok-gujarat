<?php
session_start();
include("connection.php");
$e=$_REQUEST['e'];
	

					$getvalq="select * from remainingpayment where Patient_Id='$e'";
					$result3q=mysqli_query($conn,$getvalq);
					
					$oldsetq=mysqli_fetch_array($result3q);
					if($oldsetq){
						
						
					
				echo  $_SESSION["chkrem"]=$oldsetq[2]; 
}
else
{
	echo $_SESSION["chkrem"]=0;
}
?>




