  <?php
include("connection.php");
$treatid=$_REQUEST['id'];
$str="select * from treatment where Treatment_Id='$treatid'";
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
<form name="frmupd" id="contact_form"  enctype="multipart/form-data" class="well form-horizontal bv-form" method="post" action="updtreat.php?tid1=<?php echo $treatid; ?>"  novalidate="novalidate">

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
                                                        <label >Patient Id<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $row[1]; ?>" id="Patient_Id" name="Patient_Id">
                                                    </div>

													<div class="form-group">
                                                        <label >Treatment date<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="<?php echo $row[2]; ?>" id="datepicker-autoclose" name="Treatment_Date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >CS<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $row[3]; ?>" id="CS" name="CS">
                                                    </div>
													<div class="form-group">
                                                        <label >EFT<span class="text-danger">*</span></label>
                                                        <input type="text"   class="form-control" value="<?php echo $row[4]; ?>" id="EFT" name="EFT">
                                                    </div>
													<div class="form-group">
                                                        <label >6KI<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $row[5]; ?>" id="KI" name="KI">
                                                    </div>
													<div class="form-group">
                                                        <label >Triorigin<span class="text-danger">*</span></label>
                                                        <input type="text"  class="form-control" value="<?php echo $row[6]; ?>" id="Triorigin" name="Triorigin">
                                                    </div>
													<div class="form-group">
                                                        <label>Other<span class="text-danger">*</span></label>
                                                        <input type="text"  class="form-control" value="<?php echo $row[7]; ?>" id="Other" name="Other">
                                                    </div>
													
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
														<input type="text"  class="form-control" value="<?php echo $row[9]; ?>" id="remark" name="remark">
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
		
		<script>
			$('#EFT').keydown(function (e) {
			if (e.keyCode == 38){ 
				var c=$('#EFT').val();
				$('#EFT').val(c+"↑");
			}
			});
			
			$('#EFT').keydown(function (e) {
			if (e.keyCode == 40){ 
				var c=$('#EFT').val();
				$('#EFT').val(c+"↓");
			}
			});
			
			
			$('#KI').keydown(function (e) {
			if (e.keyCode == 38){ 
				var c=$('#KI').val();
				$('#KI').val(c+"↑");
			}
			});
			
			$('#KI').keydown(function (e) {
			if (e.keyCode == 40){ 
				var c=$('#KI').val();
				$('#KI').val(c+"↓");
			}
			});
			
			
			$('#Triorigin').keydown(function (e) {
			if (e.keyCode == 38){ 
				var c=$('#Triorigin').val();
				$('#Triorigin').val(c+"↑");
			}
			});
			
			$('#Triorigin').keydown(function (e) {
			if (e.keyCode == 40){ 
				var c=$('#Triorigin').val();
				$('#Triorigin').val(c+"↓");
			}
			});
		</script>

		
        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

				<!-- Init js -->
        <script src="assets\pages\jquery.form-pickers.init.js"></script>
		
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>


</body>
</html>