<?php
include("connection.php");
	$id=$_REQUEST['id'];	
	$otpt='';
	$sql="select * from patient where Patient_Id=$id";
	$ress=mysqli_query($conn,$sql);
	 $rows=mysqli_fetch_array($ress);
	
		?>
			<div class="col-md-4"><p > <label> <img src="../therapist/img_pat/<?php echo $rows[3];?>" height="150px" width="150px"> </label> </p></div>
			<div class="col-md-8">
		
		<p> <label class="col-md-6"> Name:</label><label class="col-md-6"> <?php echo $rows[2];?> </label> </p>
		
			<p> <label class="col-md-6"> Regestration date:</label><label class="col-md-6"> <?php echo $rows[4];?> </label> </p>
			<p> <label class="col-md-6"> Address:</label><label class="col-md-6"> <?php echo $rows[5];?> </label> </p>
			<p> <label class="col-md-6"> city :</label><label class="col-md-6"> <?php echo $rows[6];?> </label> </p>
			<p> <label class="col-md-6"> pincode:</label><label class="col-md-6"> <?php echo $rows[8];?> </label> </p>
			<p> <label class="col-md-6"> mobile:</label><label class="col-md-6"> <?php echo $rows[9];?> </label> </p>
			<p> <label class="col-md-6"> phone:</label><label class="col-md-6"> <?php echo $rows[10];?> </label> </p>
			<p> <label class="col-md-6"> email:</label><label class="col-md-6"> <?php echo $rows[11];?> </label> </p>
		
			
			<p> <label class="col-md-6"> gender:</label><label class="col-md-6"> 
			<?php 
			if( $rows[12]==1)
				{	echo "female";
				}
				else
				{echo "male";}?>
			</label> </p>
		
			<p> <label class="col-md-6"> dob:</label><label class="col-md-6"> <?php echo $rows[13]?> </label> </p>
			<p> <label class="col-md-6"> occupation:</label><label class="col-md-6"> <?php echo $rows[14]?> </label> </p>
			<p> <label class="col-md-6"> Remarks:</label><label class="col-md-6"> <?php echo $rows[15]?> </label> </p></div>
			</div>
		
