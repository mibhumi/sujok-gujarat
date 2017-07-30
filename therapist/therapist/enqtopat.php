  <?php
include("connection.php");
$patid=$_REQUEST['id'];
$str="select * from enquiry where Person_Id='$patid'";
$res=mysqli_query($conn,$str);
$row=mysqli_fetch_array($res);
?>

<html>

<head>
	<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		
		
		<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		
		
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		
-->
</head>

<body>
<div class="container">
<form name="frmupd" id="contact_form"  enctype="multipart/form-data" class="well form-horizontal bv-form" method="post" action="enqpatadd.php?patid1=<?php echo $patid; ?>"  novalidate="novalidate">

                                                    <div class="form-group">
                                                        <label >Centre Name<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Code" class="form-control" required>
										
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str1="select * from centre";
														$result1=mysqli_query($con,$str1);
														while($row1=mysqli_fetch_array($result1))
														{
															if($row[1]!=$row1[7])
															{
																
														?>
														<option value="<?php echo $row1[7] ?>"><?php echo $row1[1] ?></option>
															<?php }
															else
															{
																echo "<option value='$row1[7]' selected> $row1[1]</option>";
															}
															}?>
														</select>
														</td>
                                                    </div>
													<div class="form-group">
                                                        <label >Patient_Name<span class="text-danger">*</span></label>
                                                        <input type="text"  required  class="form-control" value="<?php echo $row[2]; ?>" id="Patient_Name" name="Patient_Name">
                                                    </div>
													
													<div class="form-group m-b-0">
                                                                <label class="control-label">Patient Photo</label>
                                                                <input type="file" class="filestyle" data-buttonname="btn-primary" id="Patient_Photo" name="Patient_Photo">
                                                            </div>	
													
													 <?php
														$timestamp = strtotime($row[3]);
														$dat1=date('d-M-Y', $timestamp);
													?>
													<div class="form-group">
                                                        <label >Registration date<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="<?php echo $dat1; ?>"  id="datepicker-autoclose1" name="Registration_Date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text"  required placeholder="Enter Address" class="form-control" value="<?php echo $row[4]; ?>" id="Address" name="Address">
                                                    </div>
                                                        
													<div class="form-group">
														<label >City<span class="text-danger">*</span></label>
                                                        <input type="text"  required placeholder="Enter City" class="form-control" value="<?php echo $row[5]; ?>" id="City" name="City">
    
                                                    </div>
													<div class="form-group">
                                                        <label >State<span class="text-danger">*</span></label>
                                                        <input type="text" required  class="form-control" value="<?php echo $row[6]; ?>" id="State" name="State">
                                                    </div>
													<div class="form-group">
                                                        <label >Pincode<span class="text-danger">*</span></label>
                                                        <input type="number"  required placeholder="Enter Pincode" class="form-control" value="<?php echo $row[7]; ?>" id="Pincode" name="Pincode">
                                                    </div>
													<div class="form-group">
                                                        <label >Mobile number<span class="text-danger">*</span></label>
                                                        <input type="number" required  placeholder="Enter Mobile number" class="form-control" value="<?php echo $row[8]; ?>" id="Mobile" name="Mobile">
                                                    </div>
													<div class="form-group">
                                                        <label >Phone number<span class="text-danger">*</span></label>
                                                        <input type="number"  required placeholder="Enter Phone number" class="form-control" value="<?php echo $row[9]; ?>" id="Phone" name="Phone">
                                                    </div>
													<div class="form-group">
                                                        <label >Email Address<span class="text-danger">*</span></label>
                                                        <input type="email"  required placeholder="Enter Email address" class="form-control" value="<?php echo $row[10]; ?>" id="Email" name="Email">
                                                    </div>
													
													 <div class="form-group">
                                                        <label >Gender<span class="text-danger">*</span></label>
                                                        <td><select name="Gender" class="form-control" required>
										
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str1="select * from enquiry  where Person_Id='$patid'";
														$result1=mysqli_query($con,$str1);
														while($row1=mysqli_fetch_array($result1))
														{
															if($row[11]=="1")
															{
																
														?>
														<option value="1">Female</option>
														<option value="0">Male</option>
															<?php }
															else
															{
																echo "<option value=0>Male</option>";
																echo "<option value=1>Female</option>";
															}
															}?>
														</select>
														</td>
                                                    </div>
													<?php
														$timestamp = strtotime($row[12]);
														$dat=date('d-M-Y', $timestamp);
													?>
													<div class="form-group">
                                                        <label >Date of Birth<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="<?php echo $dat; ?>" id="datepicker-autoclose" name="DOB">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >Occupation<span class="text-danger">*</span></label>
                                                        <input type="Occupation"  required  class="form-control" value="<?php echo $row[13]; ?>" id="Occupation" name="Occupation">
                                                    </div>
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark"  class="form-control" value="<?php echo $row[13]; ?>"  name="Remark" ></textarea>
                                                    </div> 													
													<input type="submit" name="s2" id="add" value="Add Patient" class="btn1 btn btn-success ">
												</form></div>

<!-- jQuery  -->
        <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
		<!--<script src="assets\js\valpatinet.js"></script>-->
        <script src="assets\js\jquery.blockUI.js"></script>
        <!--<script src="assets\js\waves.js"></script>-->
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
	
	<script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="../plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

	
	<script src="../plugins/moment/moment.js"></script>
     	<script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		
		<script>
			$(document).ready(function(){
			var today=new Date();
			var d=today.getDate();
			var months = ['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'September', 'October', 'November', 'December'];
			//var m=months[today.getMonth()];
			var m=today.getMonth();
			m += 1; 
			var y=today.getFullYear();
			$('.datepicker-autoclose').val(m+ "/" + d + "/" +y);
			/*var today=new Date();
			$('#Treatment_Date').attr("placeholder",today.toDateString());*/			
			});	
		</script>
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>





</body>
</html>