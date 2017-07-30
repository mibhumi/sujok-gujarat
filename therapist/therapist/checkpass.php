<?php

$connect=mysqli_connect("localhost","root","","sujok");
$chk=md5($_REQUEST['pass']);
$chk1=$_REQUEST['uname'];
$dat="";
$dat1="";
$str="SELECT * FROM therapist where Username='$chk1' and Password='$chk'";
$result=mysqli_query($connect,$str);

				 while($row=mysqli_fetch_array($result))
					 {
						 $dat= $row[3];
						 $dat1= $row[4];
					
					// echo $dat;
					//	 echo $chk;
						 
			}
				
					if(($chk != $dat1) && ($chk1 != $dat) )
					{
						echo "*Please enter valid password";
					}
			
?>