 <?php
include("connection.php");
$patid=$_REQUEST['id'];
$compid="";
$str1="select * from complaint where Patient_Id='$patid'";
$res4=mysqli_query($conn,$str1);
$resc1=mysqli_fetch_array($res4);
if(empty($resc1))
{
	echo "Complaint is not registered";
}
else
{
$str="select * from complaint where Patient_Id='$patid'";
$res3=mysqli_query($conn,$str);
while($rowb=mysqli_fetch_array($res3))
{
	$compid=$rowb[0];
}
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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
	
		<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		
		
</head>

<body>
<div class="container">
<form name="frmupd" id="contact_form"  enctype="multipart/form-data" class="well form-horizontal bv-form" method="post" action="comp_upd.php?compid=<?php echo $compid; ?>"  novalidate="novalidate">


													<div class="form-group">
													 <label >Patient Name<span class="text-danger">*</span></label>
													<?php  
											$str1="select * from patient where Patient_Id=$row[1]";
											$res1=mysqli_query($conn,$str1);
											
											 if($row1=mysqli_fetch_array($res1))
											 {  ?>												
											      <input type="text"  required  class="form-control" value="<?php echo $row1[2]; ?>" id="Patient_Id" name="Patient_Id">	
											<?php }
										   ?>
                                                       
                                                        
                                                    
													</div>
													
													<?php
														$timestamp = strtotime($row[2]);
														$dat=date('d-M-Y', $timestamp);
													?>
													<div class="form-group">
                                                        <label >Complaint Date<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control datepicker-autoclose" value="<?php echo $dat; ?>"  name="Complaint_Date" id="datepicker-autoclose" name="Registration_Date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >Major Complaint<span class="text-danger">*</span></label>
                                                        <input type="text"  required placeholder="Major Complaint" class="form-control" value="<?php echo $row[3]; ?>" id="Major_Complaint" name="Major_Complaint">
                                                    </div>
                                                        
													<div class="form-group">
														<label >Other Complaint<span class="text-danger">*</span></label>
                                                        <input type="text"  required placeholder="Other Complaint" class="form-control" value="<?php echo $row[4]; ?>" id="Other_Complaint" name="Other_Complaint">
                                                    </div>
												
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark"  class="form-control" value="<?php echo $row[6]; ?>"  name="Remark" ></textarea>
                                                    </div> 													
													<input type="submit" name="s3" id="add" value="UPDATE" class="btn1 btn btn-success ">
												</form></div>
<?php } ?>

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
		
		
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>


        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>


</body>
</html>