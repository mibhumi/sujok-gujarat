<?php
 if(isset($_REQUEST['add']))
 {
		 $connect=mysqli_connect("localhost","root","","sujok");
	 
	if(isset($_FILES['photo']['name']))
	{
		$Product_Name=$_REQUEST['Product_Name'];
		 $Product_Price=$_REQUEST['Product_Price'];
		 $Description=$_REQUEST['Description'];
		 $Product_Image=$_FILES['photo']['name'];
		// $tmp=$_FILES['photo']['tmp_name'];
		// $path="upload/$Product_Image";
		 $Remark=$_REQUEST['Remark'];
		 $name= $_FILES['photo']['name'];
		$size= $_FILES['photo']['size'];
		$tname= $_FILES['photo']['tmp_name'];
		$type= $_FILES['photo']['type'];
		$target_dir = "upload/";
		$target_file = $target_dir.basename($_FILES["file"]["name"]); 
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if($size > 0)
		{
			if($size <= 10000000)
			{
			      //echo $imageFileType;
				if($imageFileType == "JPG" || $imageFileType == "jpg"  )
				{
				   if(move_uploaded_file($tname,"upload/".$name))
					$str="insert into product(Product_Name,Product_Price,Description,Product_Image,Remark) values('$Product_Name','$Product_Price','$Description','$Product_Image','$Remark')";
					//move_uploaded_file($tmp,$path);
					$result=mysqli_query($connect,$str);
					
				// echo "record inserted";
					echo '<script type="text/javascript">';
					echo 'alert("record inserted")';
					echo '</script>';
					header('location:add_centre.php');
				
			}
				else
				{
					echo '<script type="text/javascript">';
					echo 'alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed")'; 
					echo '</script>';
				}
			}
		
		}
		else
		{
					echo '<script type="text/javascript">';
					echo 'alert("wrong")'; 
					echo '</script>';
		}
			 
		
	}
	else
		{
					echo '<script type="text/javascript">';
					echo 'alert("bwrong")'; 
					echo '</script>';
		}
	
 }
?>

 



<html>
<body>
 <form enctype="multipart/form-data" method="POST">
 Please choose a file: <input name="uploaded" type="file" /><br />
 <input type="submit" value="Upload" />
 </form>
</body> 
 </html>