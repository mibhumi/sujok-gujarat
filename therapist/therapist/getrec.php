<?php
include("connection.php");
$e=$_REQUEST['q'];
	$sql="select * from package where Package_Id='".$e."'";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
if($row)
{
?><br>
<label >Seting <span class="text-danger"></span></label>
<input type="text" required placeholder="" class="form-control" id="seting" name="seting" value="<?php echo $row[4]; ?>" >
<br>
<label >Charge <span class="text-danger"></span></label>
<input type="text" required placeholder="" class="form-control" id="charge" name="charge" value="<?php echo $row[3]; ?>" >
<?php 
}
?>

