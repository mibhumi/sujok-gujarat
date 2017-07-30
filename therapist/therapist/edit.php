<?php
include("connection.php");
$id=$_POST["id"];
$text=$_POST["text"];
$column_name=$_POST["column_name"];	
$str="update $column_name=$text where Centre_Id=$id";
$res=mysqli_query($conn,$str);
if(!$res)
{
	echo "not updated";
}
else
{
	echo "updated";
}
?>