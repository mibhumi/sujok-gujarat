<?php

$connect=mysqli_connect("localhost","root","","sujok");
$chk=$_REQUEST['cenid'];
$str="SELECT * FROM therapist";
$res=mysqli_query($connect,$str);
$result=mysqli_query($connect,$str);

				 while($row=mysqli_fetch_array($result))
					 {
						 $dat= $row[3];
						 
					if($chk == $dat)
					{
						echo "*Username is taken,try another.";
					}
					else{
					
					}
						
			}
			
?>