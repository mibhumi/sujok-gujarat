<?php

include('connection.php');
$chk=$_REQUEST['cenid'];
$str="SELECT * FROM centre where Centre_Code='$chk'";
$res=mysqli_query($conn,$str);
$result=mysqli_query($conn,$str);

				 while($row=mysqli_fetch_array($result))
					 {
						 $dat= $row[7];
						 
					if($chk == $dat)
					{
						echo "*centre code already taken.";
					}
					else{
						
					   }
						
			}
			
?>