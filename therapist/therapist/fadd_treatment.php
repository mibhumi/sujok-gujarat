
 <!-- insert record using php -->
<?php
session_start();
include("connection.php");
	
	if(isset($_SESSION['uid']))
	{
		$theid=$_SESSION['uid'];
		$str="select * from therapist where Therapist_Id='$theid'";
		$res=mysqli_query($conn,$str);
		$row=mysqli_fetch_array($res);
	}
	else
	{
		header('location:therapist_login.php');
	}
 if(isset($_REQUEST['add']))
 {
		 $connect=mysqli_connect("localhost","root","","sujok");
	 
		 $Patient_Id=$_REQUEST['id'];
		 $var1 =$_REQUEST['Treatment_Date'];
		$Treatment_Date= date("Y-m-d", strtotime($var1) );
		 $CS=$_REQUEST['CS'];
		 $EFT=$_REQUEST['EFT'];
		 $Triorigin=$_REQUEST['Triorigin'];
		 $KI=$_REQUEST['KI'];
		 $Other=$_REQUEST['Other'];
		 $Centre_Id=$_SESSION['Centre_Id'];
		 $Remark=$_REQUEST['Remark'];
		 
		 
					$str="insert into Treatment(Patient_Id,Treatment_Date,CS,EFT,6KI,Triorigin,Others,Centre_Id,Remark) values('$Patient_Id','$Treatment_Date','$CS','$EFT','$KI','$Triorigin','$Other','$Centre_Id','$Remark')";
					$result=mysqli_query($connect,$str);
					if(!$result)
					{
						echo "<script type='text/javascript'>alert('Treatment is not inserted')</script>";
					}
					else
					{
						$chkseating=$_SESSION['chkseating'];
						if($chkseating>0)
						{
						
						$chk="select * from seating where Patient_Id='$Patient_Id'";
						
						$resultchk=mysqli_query($connect,$chk);
						
						if($resultchk)
						{
											$rowchk=mysqli_fetch_array($resultchk);
											$old=$rowchk[2];
											
											if($old > 0)
											{
											$dec=1;
											$remaining=$rowchk[2] - $dec;
											$procedure="update seating set Seating='$remaining' where Patient_Id='$Patient_Id'";
											$result2=mysqli_query($connect,$procedure);
											if($result2)
											{
															echo "done!";
															header('location:patient_treatmentdisp.php');
															
														}else
														{
															echo "fail!";
														}
											
											
											}
											else
											{
												$_SESSION["bypackpat"]=$Patient_Id;
												  header('location:pacpayment.php');
											}
						}else{
													
							
							}
						
						
											
						}else
							{
								
							$_SESSION["bypackpat"]=$Patient_Id;
							header('location:pacpayment.php');
							
							}
						
						
						
						
					}
 }
?>




<!DOCTYPE html>
<html>
    <head>
<title>Register Enquiries</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\logo.png">
			<!-- App title -->
        <title>Sujok Admin Dashboard</title>

        <!-- App css -->
        		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css"> 
				
				<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		
		<link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet">
        <link href="../plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css">
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

		
		
		

        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		<link rel="stylesheet" href="assets\css\chinnu.css">
        

        <script src="assets\js\modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

       <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo"><span>sujok care<span></a>
                    <!-- Image logo -->
                    <!--<a href="dashboard_2.htm" class="logo">
                        <span>
                            <img src="ISA-logo.png" alt="" height="30">
                        </span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->	
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                           
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="img_thep/<?php echo $row[2]; ?>" alt="Your Profile" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
										<h5> <?php echo $row[1]; ?> </h5>
                                    </li>
                                    <li><a href="therapist_profile.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="therapist_logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

							
                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            
			
			
			
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                         <div class="user-details">
                            <div class="overlay"></div>
                            <div class="text-center">
                                <img src="img_thep/<?php echo $row[2]; ?>" alt="Welcome" class="thumb-lg img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo $row[1]; ?></a>
                                </div>
                            </div>
                        </div>

                        
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class="glyphicon glyphicon-home"></i><span> HOME </span> </a>
                            </li>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion-person-stalker"></i><span>ENQUIRY</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="enqdisp.php">View Enquiry</a></li>
									<li><a href="add_enquiry.php">Add Enquiry</a></li>
									
								</ul>
                            </li>


							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-plus"></i><span> PATIENTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="patientdisp.php">View Patient</a></li>
									<li><a href="complaint_edit.php">View Complaint</a></li>
									<li><a href="add_patient.php">Add Patient</a></li>
									
									<!--<li><a href="patientdisp.php">View Patients</a></li>-->
								</ul>
                            </li>
							
							<!--<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> COMPLAINTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="patientdisp.php">Add Complaint</a></li>
									-->
									<!--<li><a href="compdisp.php">View Complaint</a></li>-->
								<!--</ul>
                            </li>-->
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md"></i><span> TREATMENT </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="viewtreatment.php">View Treatment</a></li>
									<li><a href="patient_treatmentdisp.php">Add Treatment</a></li>
									
									<!--<li><a href="compdisp.php">View Complaint</a></li>-->
								</ul>
                            </li>
							
                           
						    <li class="has_sub">
                                <a href="packagedisp.php" class="waves-effect"><i class="glyphicon glyphicon-list-alt"></i><span>PACKAGE</span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> PRODUCTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href=".html">Edit Product</a></li>
									<li><a href=".html">Add Product</a></li>
									
									<!--<li><a href=".html">Delete Product</a></li>-->
								</ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion-calculator"></i><span> ACCOUNTS </span></a>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span> CHARTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.htm">Flot Chart</a></li>
                                    <li><a href="chart-morris.htm">Morris Chart</a></li>
                                    <li><a href="chart-google.htm">Google Chart</a></li>
                                    <li><a href="chart-chartist.htm">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.htm">Chartjs Chart</a></li>
                                    <li><a href="chart-c3.htm">C3 Chart</a></li>
                                    <li><a href="chart-sparkline.htm">Sparkline Chart</a></li>
                                    <li><a href="chart-knob.htm">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map-marker"></i> <span> MAPS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="maps-google.htm">Google Maps</a></li>
                                    <li><a href="maps-vector.htm">Vector Maps</a></li>
                                    <li><a href="maps-mapael.htm">Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">More</li>
                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-dark"><b>Email:</b></span> <br> sujok@sujok.com </p>
                        <p class="m-b-0"><span class="text-dark"><b>Call:</b></span> <br> (+91)4546789871</p>
                    </div>
                    </div>
        <!-- Sidebar -->
                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

			
			

                  <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h1 class="page-title">Add New Treatment</h1>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">SUJOK</a>
                                        </li>
                                        <li>
                                            <a href="#">Treatment </a>
                                        </li>
                                        <li class="active">
                                            Add Treatment
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box chi-back">

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-9 ">


                                            <div class="p-20">
                                                <form id="contact_form" method="post" enctype="multipart/form-data">
												<div class="form-group">
                                                        <label >Patient Id<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="sp" name="sp" value="<?php echo $_REQUEST['id'] ?>">
                                                    </div>
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
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control"  name="Remark" ></textarea>
                                                    </div> 													
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5" onclick="window.location.href='patient_treatmentdisp.php'">
                                                            Cancel
                                                        </button>
												</form>

                                            </div>
										</div>
									</div>
								</div>
                                        </div>
										
										<div class="form-group col-md-3">
                                                     <h2>  <label >Seating left :</label>
                                                       <big><b><span class="text-success"  id="Patient_Name"  > 0 </span></b></big></h2>
                                                    </div>
										 <footer class="text-right">
                    
	<!--<div class="clearfix divider_dashed10"></div>
   	<div  data-anim-type="fadeInLeft" style="margin-top: -20px;">© 2017 Sujok Automation. All Rights Reserved.</div>
   	-->
      
     
         <small><small> Designed by-<a href="http://www.easternts.com" target="_blank">Eastern Techno Solutions</a></small></small>
  
                </footer>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
       <!-- <script src="assets\js\waves.js"></script> -->
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
		
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
				var cenid = $('#sp').val();
				 $.ajax({
				   url:"getid.php",
					method:"POST",
					data:{e:cenid},
					success:function(data)
			        {
					$("#Patient_Name").html(data);
					},
					 });
					 
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
			<script>
		
				
		</script>
		
        
        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        
 
        
		
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>


    </body>
</html>

