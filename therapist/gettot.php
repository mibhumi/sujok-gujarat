<?php
include("connection.php");
	$e=$_REQUEST['e'];
	$f=$_REQUEST['f'];
	$tot= $e * $f;


?>


<label >Total Price <span class="text-danger"></span></label>
<input type="number" required placeholder="" class="form-control"  name="tot" value="<?php echo $tot; ?>" >

