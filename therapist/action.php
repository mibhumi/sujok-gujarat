<?php
 /*if(isset($_POST['action']))
 {*/
	 $output='';
	 $connect=mysqli_connect("localhost","root","","sujok");
	 
		
		 $Package_Name=$_REQUEST["Package_Name"];
		 $Description=$_REQUEST["Description"];
		 $Charge=$_REQUEST["Charge"];
		 $Seating=$_REQUEST["Seating"];
		 $Remark=$_REQUEST["Remark"];
		 $str="insert into package(Package_Name,Description,Charge,Seating,Remark) values('$Package_Name','$Description','$Charge','$Seating','$Remark')";
		 $result=mysqli_query($connect,$str);
	     if(!$result)
	     {
			echo "please fill up form correctly";
	     }
	     else
		 {
		    echo "record inserted";
	     }
 /*}
 else
 {
	 echo "fail";
 }*/
 ?>
