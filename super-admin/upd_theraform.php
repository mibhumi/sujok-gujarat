  <?php
include("connection.php");
$treatid=$_REQUEST['id'];
$str="select * from therapist where Therapist_Id='$treatid'";
$res=mysqli_query($conn,$str);
$row=mysqli_fetch_array($res);

?>

<html>

<head>

		<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		
</head>

<body>
<div class="container">
<form name="frmupd" id="contact_form"  enctype="multipart/form-data" class="well form-horizontal bv-form" method="post" action="upd_thera.php?tid1=<?php echo $treatid; ?>"  novalidate="novalidate">
																<div class="form-group">
                                                        <label >Centre Name<span class="text-danger">*</span></label>
                                                        <td><select name="centre" class="form-control" required>
														<option><?php
														
														
														$str2="select * from centre where Centre_Id='$row[5]'";
														$result2=mysqli_query($conn,$str2);
														while($row1=mysqli_fetch_array($result2))
														{
														?>
														<option value="<?php echo $row1[0] ?>" selected><?php echo $row1[1] ?></option>
														<?php }?></option>
														<?php
														
														
														$str2="select * from centre";
														$result2=mysqli_query($conn,$str2);
														while($row1=mysqli_fetch_array($result2))
														{
														?>
														<option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
														<?php }?>
														</select>
														</td>
													</div>

                                                    <!--<div class="form-group">
                                                        <label >Patient Id<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Code" class="form-control" required>
										
														<php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str1="select * from centre";
														$result1=mysqli_query($con,$str1);
														while($row1=mysqli_fetch_array($result1))
														{
															if($row[1]!=$row1[7])
															{
																
														?>
														<option value="<php echo $row1[7] ?>"><php echo $row1[1] ?></option>
															<php }
															else
															{
																echo "<option value='$row1[7]' selected> $row1[1]</option>";
															}
															}?>
														</select>
														</td>
                                                    </div>-->
													
											<div class="">
											
                                                <!--<form id="contact_form" method="post" enctype="multipart/form-data">-->
													<div class="form-group">
                                                        <label >Therapist Name<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $row[1]; ?>" id="Therapist_Name" name="Therapist_Name">
                                                    </div>

													
													<div class="form-group">
                                                        <label >Username<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $row[3]; ?>" id="CS" name="username">
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text"   class="form-control" value="<?php echo $row[6]; ?>" id="EFT" name="addr">
                                                    </div>
													
													<div class="form-group">
                                                        <label >Contact<span class="text-danger">*</span></label>
                                                        <input type="text"  class="form-control" value="<?php echo $row[7]; ?>" id="Triorigin" name="cont">
                                                    </div>
													
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
														<input type="text"  class="form-control" value="<?php echo $row[8]; ?>" id="remark" name="remark">
                                                    </div> 											
											<input type="submit" name="s2" id="add" value="UPDATE" class="btn1 btn btn-success ">
                                            </div>
										</form></div>

<!-- jQuery  -->
        <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

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
			var m=months[today.getMonth()];
			//var m=today.getMonth();
			//m += 1; 
			var y=today.getFullYear();
			$('#datepicker-autoclose').val(d+ " " + m + " " +y);
			/*var today=new Date();
			$('#Treatment_Date').attr("placeholder",today.toDateString());*/			
			});	
		</script>
		
		
		
        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

				<!-- Init js -->
        <script src="assets\pages\jquery.form-pickers.init.js"></script>
		
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="bootstrapvalidator.min.js"></script>


</body>
</html>