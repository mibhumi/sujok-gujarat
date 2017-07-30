<?php
include("connection.php");
$e=$_REQUEST['q'];
	$sql="select * from Product where Product_Id='".$e."'";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
if($row)
{
?><br>


<label >Price <span class="text-danger"></span></label>
<input type="number" required placeholder="" class="form-control" id="pri" name="pri" value="<?php echo $row[2]; ?>" >
<?php 
}
?>

