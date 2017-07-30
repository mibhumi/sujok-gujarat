<?php
include("connection.php");

$f=$_REQUEST['ii'];
	$sql="select Product_Image from Product where Product_Id='".$f."' ";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
if($row)
{
echo"<img src='upload/$row[0]' width=200px height=200px>"; 
}
else{
echo "";
}
?>

