<?php
 /*if(isset($_POST['action']))
 {*/
	 $output='';
	 $connect=mysqli_connect("localhost","root","","sujok");
	 
		
		 $Product_Name=$_REQUEST["Product_Name"];
		 $Product_Price=$_REQUEST["Product_Price"];
		 $Description=$_REQUEST["Description"];
		 $Product_Image=$_REQUEST["Product_Image"];
		 //$Product_Image=$_FILES['Product_Image']['name'];
		 //$tmp=$_FILES['Product_Image']['tmp_name'];
		//$path="upload/$Product_Image";
		 $Remark=$_REQUEST["Remark"];
		 
		$str="insert into product(Product_Name,Product_Price,Description,Product_Image,Remark) values('$Product_Name','$Product_Price','$Description','$Product_Image','$Remark')";
		 //move_uploaded_file($tmp,$path);
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

 