   <!-- insert record using php -->
<?php
 if(isset($_REQUEST['add']))
 {
		 include('connection.php');
	     
		 $Patient_Id=$_REQUEST['id'];
		 $Treatment_Date=$_REQUEST['Treatment_Date'];
		 $CS=$_REQUEST['CS'];
		 $EFT=$_REQUEST['EFT'];
		 $Triorigin=$_REQUEST['Triorigin'];
		 $KI=$_REQUEST['KI'];
		 $Other=$_REQUEST['Other'];
		 $Centre_Id=$_REQUEST['Centre_Id'];
		 $Remark=$_REQUEST['Remark'];
		 
		 
					$str="insert into Treatment(Patient_Id,Treatment_Date,CS,EFT,6KI,Triorigin,Others,Centre_Id,Remark) values('$Patient_Id','$Treatment_Date','$CS','$EFT','$KI','$Triorigin','$Other','$Centre_Id','$Remark')";
					$result=mysqli_query($conn,$str);
					if(!$result)
					{
						echo "<script type='text/javascript'>alert('Treatment is not inserted')</script>";
					}
					else
					{
						header('location:patient_treatmentdisp.php');
					}
 }
?>


<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\su-logo.png">
        <!-- App title -->
        <title>Add Treatment</title>
				
		<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
        <!-- App css -->
		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css"> 
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
       
                                            <h4 class="header-title m-t-0">Treatment</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                
                                            </p>

                                            <div class="">
                                                <form id="contact_form" method="post" enctype="multipart/form-data">
													<div class="form-group">
                                                        <label >Treatment date<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="datepicker-autoclose" name="Treatment_Date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >CS<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="CS" name="CS">
                                                    </div>
													<div class="form-group">
                                                        <label >EFT<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint"   class="form-control" id="EFT" name="EFT">
                                                    </div>
													<div class="form-group">
                                                        <label >6KI<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint" class="form-control" id="KI" name="KI">
                                                    </div>
													<div class="form-group">
                                                        <label >Triorigin<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint"  class="form-control" id="Triorigin" name="Triorigin">
                                                    </div>
													<div class="form-group">
                                                        <label>Other<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint"  class="form-control" id="Other" name="Other">
                                                    </div>
													<div class="form-group">
                                                        <label >Centre Name<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Id" class="form-control" required>
														
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str="select * from centre";
														$result=mysqli_query($con,$str);
														while($row=mysqli_fetch_array($result))
														{
														?>
														<option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
														<?php }?>
														</select>
														</td>
                                                    </div>
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control"  name="Remark" ></textarea>
                                                    </div> 													
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
												</form>
                                            </div>

                                        

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
		<!--<script src="assets\js\waves.js"></script>-->
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
    </body>
</html>



 
