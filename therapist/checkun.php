<?php

$connect=mysqli_connect("localhost","root","","sujok");
$chk=$_REQUEST['uname'];
$dat="";
$str="SELECT * FROM therapist where Username='$chk'";
$result=mysqli_query($connect,$str);

				 while($row=mysqli_fetch_array($result))
					 {
						 $dat= $row[3];
					
					// echo $dat;
					//	 echo $chk;
						 
			}
				
					if($chk != $dat)
					{
						echo "*username is not valid";
					}
			
?>