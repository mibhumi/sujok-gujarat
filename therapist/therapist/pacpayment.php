	<!-- insert record using php -->
<?php
  @ob_start();
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
 $cid=$_SESSION['Centre_Id'];

		
?>



<!DOCTYPE html>
<html>
    <head>
<title>Package Payment</title>
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
                                    <h1 class="page-title">Pay</h1>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">SUJOK</a>
                                        </li>
                                       
                                        <li class="active">
                                            Pay
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
                                  <?php  $dipa=$_SESSION['bypackpat']; ?>
													<div class="form-group" hidden>
                                                        <label >Patient_Id<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="dipid" name="dipid" value="<?php echo $dipa; ?>">
																										
											
													
                                                    </div>
													
													<?php 
											include("connection.php");
											
										
											
											  $dipa=$_SESSION['bypackpat'];
											
											$stringpat="select * from Patient where Patient_Id=$dipa";
											$outputpat=mysqli_query($conn,$stringpat);
											while($recordpat=mysqli_fetch_array($outputpat))
											{?>
												<div class="form-group" >
                                                        <label >Patient Name<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"  value="<?php echo $recordpat[2]; ?>">
																										
											
													
                                                    </div>
											<?php	
												
											}
										?>
													
													<br>
													<label >Package </label >
													<select name="sel1" id="sp" class=" form-control" data-style="btn-brown" onchange="showCentre(this.value)">
													<option></option>
											<?php 
											include("connection.php");
											$string="select * from Package";
											$output=mysqli_query($conn,$string);
											while($record=mysqli_fetch_array($output))
											{
												$centre_code=$record['Package_Id'];
												echo "<option value='$centre_code'>" .$record['Package_Name']. "</option>";
											}
										?>
                                    </select>
													<div class="form-group">
                                                        
														<div class="form-group" id="se"> </div>
                                                       
                                                    </div>
												<div class="form-group">
												<label >Remark </label >
												<input type="text" name="remarks" class="form-control">
												
												</div>
													<div class="form-group">
                                                        												
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
														<span class="text-danger">
	<?php													 
 if(isset($_REQUEST['add']))
 {
		 $connect=mysqli_connect("localhost","root","","sujok");
		 
		 
		 
		 
		 
		 
			$Patient_Id=$_REQUEST['dipid'];
			$pack=$_REQUEST['sel1'];
			$seating=$_REQUEST['seting'];
			$charge=$_REQUEST['charge'];
			$remark=$_REQUEST['remarks'];
			
			
		$sqlqry="INSERT INTO package_account(Patient_Id, Package_Id, seating, Charge, Remark) VALUES ('$Patient_Id','$pack','$seating','$charge','$remark')";
			 $resultqry=mysqli_query($connect,$sqlqry);
		
										if($resultqry)
										{
			
			
			
			
		
									 $sql="select * from seating where Patient_Id=$Patient_Id";
									 
									 
									 $result1=mysqli_query($connect,$sql);
									
									$row1=mysqli_fetch_array($result1);
									if(!$row1)
									{
										$seating=$seating-1;
										$procedure="INSERT INTO seating(Patient_Id, Seating) VALUES ('$Patient_Id','$seating')";
										$result2=mysqli_query($connect,$procedure);

										if($result2)
										{
											echo "done!";
												header('location:patient_treatmentdisp.php');
										}else{
											echo "fail!";
										}
										
										
									}else{
												$getval="select * from seating where Patient_Id='$Patient_Id'";
												$result3=mysqli_query($connect,$getval);
												$oldset=mysqli_fetch_array($result3);
												
												
										echo $newset = $seating + $oldset[2];
										
										$procedure="update seating set Patient_Id='$Patient_Id', Seating='$newset' where Patient_Id='$Patient_Id'";
										$result2=mysqli_query($connect,$procedure);

										if($result2)
										{
											echo "done!";
											session_unset($_SESSION['bypackpat']);
											header('location:patient_treatmentdisp.php');
										}else{
											echo "fail!";
										}
										
										
										
									}	
									
									}else{
									
									echo "*fail to add package";
									}
 
 
 }
 ?></span>
												</form>

                                            </div>

                                        </div>
										</div>
										
										<div class="form-group col-md-3">
                                                     <h2>  <label >Seating left :</label>
                                                       <big><b><span class="text-success"  id="Patient_Name"  > 0 </span></b></big></h2>
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
       <!-- <script src="assets\js\waves.js"></script> -->
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
		
		<script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="../plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
       <!-- <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>-->
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Flot chart js
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>   -->

        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init 
        <script src="assets\pages\jquery.dashboard_2.js"></script> -->

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        
 <script>
            var resizefunc = [];
        </script>

        

        <!-- Examples
	    <script src="../plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	    <script src="../plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
	    <script src="../plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="../plugins/tiny-editable/mindmup-editabletable.js"></script>
	    <script src="../plugins/tiny-editable/numeric-input-example.js"></script>

     

        <script src="assets\pages\jquery.datatables.editable.init.js"></script>-->

		
			
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script>  $(document).ready(function() {
	var cenid = $('#dipid').val();
				 $.ajax({
				   url:"getid.php",
					method:"POST",
					data:{e:cenid},
					success:function(data)
			        {
					$("#Patient_Name").html(data);
					},
					 });
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			Centre_Code: {
                validators: {
                        stringLength: {
                        min: 1,
						},
                        notEmpty: {
                        message: 'Please enter Centre code'
						}
                }
              },
            Patient_Name: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Patient Name'
						}
                }
              },
			  Patient_Photo: {
                validators: {
						file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/JPEG,image/png,image/JPG,image/jpg',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
						},
                        notEmpty: {
                        message: 'Please select image'
						}
                }
              },
			  Address: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Address'
						}
                }
              },
			  Mobile: {
                validators: {
                        stringLength: {
                        min: 10,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              },
			  Phone: {
                validators: {
                        stringLength: {
                        min: 6,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter phone number'
						}
                }
              },
			  Email: {
                validators: {
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              },
			  Gender: {
                validators: {
                        notEmpty: {
                        message: 'Please select gender'
						}
                }
              },
			  Occupation: {
                validators: {
                        stringLength: {
                        min: 2,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter Occupation'
						}
                }
              },
			  Pincode: {
                validators: {
                        stringLength: {
                        min: 6,
						max:6,
						},
                        notEmpty: {
                        message: 'Please enter pincode'
						}
                }
              },
			  State: {
                validators: {
                        stringLength: {
                        min: 3,
						max:15,
						},
                        notEmpty: {
                        message: 'Please enter state'
						}
                }
              },
			  City: {
                validators: {
                        stringLength: {
                        min: 2,
						max:15,
						},
                        notEmpty: {
                        message: 'Please select city'
						}
                }
              }
            }
        })
		
        
});
</script>


<script src="../plugins/moment/moment.js"></script>
     	<script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		
		<script>
	/*	$('#dipid').change(function (){
				
						var cenid = $('#dipid').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getid.php",
					method:"POST",
					data:{e:cenid},
					success:function(data)
			        {
					$("#Patient_Name").html(data);
					},
					 });
					});
				*/
		</script>
		<script>
			$('#sp').change(function (){
				
						var cenid = $('#sp').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getrec.php",
					method:"POST",
					data:{q:cenid},
					success:function(data)
			        {
					$("#se").html(data);
					},
					 });
					});
		</script>
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>


    </body>
</html>

