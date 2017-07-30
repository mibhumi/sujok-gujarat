<?php 
@ob_start();
session_start();
include("connection.php");
	if(isset($_SESSION['tuid']))
	{
		$theid=$_SESSION['tuid'];
		$str="select * from therapist where Therapist_Id='$theid'";
		$res=mysqli_query($conn,$str);
		$row=mysqli_fetch_array($res);
	}
	else
	{
		header('location:therapist_login.php');
	}
	if(isset($_SESSION['tuid']))
	{
		$theid=$_SESSION['tuid'];
		$str="select * from therapist where Therapist_Id='$theid'";
		$res=mysqli_query($conn,$str);
		$row=mysqli_fetch_array($res);
		$nam=$row[1];
	}
	else
	{
		header('location:therapist_login.php');
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
        <link rel="shortcut icon" href="assets\images\logo.png">
        <!-- App title -->
        <title>Therapist Profile</title>

        <!-- date range picker -->
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
                                    <img src="../super-admin/img_thep/<?php echo $row[2]; ?>" alt="Your Profile" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
										<h5> <?php echo $row[1]; ?> </h5>
                                    </li>
                                    <li><a href="therapist_profile.php"><i class="ti-user m-r-5"></i> Profile</a></li>
									<li><a href="therapist_password.php"><i class="ti-key m-r-5"></i>Change Password</a></li>
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
                                <img src="../super-admin/img_thep/<?php echo $row[2]; ?>" alt="Welcome" class="thumb-lg img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle text-centre" data-toggle="dropdown" aria-expanded="false"> <?php echo $row[1]; ?></a>
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
									<li><a href="productselldisp.php">View sold product</a></li>
									<li><a href="productdisp.php">View Product</a></li>
									<li><a href="sellpro.php">Buy Product</a></li>
									
									<!--<li><a href=".html">Delete Product</a></li>-->
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
                                    
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">SUJOK</a>
                                        </li>
                                      
                                        <li class="active">
                                           Therapist Profile
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
						
							<div class="row card-box">		
							<div class="col-md-4"> 
								<form id="frm2" method="post" enctype="multipart/form-data">
           
                <!-- Start content -->
                   	<!--kaam ka-->
										
                                        
                                            <div class="text-center bhumi">
                                                
                                                   <img id="profile" src="../super-admin/img_thep/<?php echo $row[2]; ?>" style="height:250px;width:275px;" class="img-circle img-thumbnail" alt="profile pic">
                                                        <input type="file" id="imgupload" name="fileup" style="display:none"/> 
														<i class="mdi mdi-star-circle member-star text-	success" title="verified user"></i>
                                                    <div class="">
                                                        <h4 class="m-b-5"></h4>
                                                    </div>
													<div> <button type="submit" id="upic" name="upic" class="btn btn-success btn-md btn-round"> <i class="glyphicon glyphicon-open"></i></button></div>
													<div id="message" class="text-danger"></div>
													</form>
													
													
													</div>
													<?php
															include("connection.php");
															if(isset($_REQUEST['upic']))
															{
																
															$therapist_pic=$_FILES['fileup']['name'];
															if($therapist_pic=="")
															{
																$therapist_pic=$row[2];
															}else{
															$tmp=$_FILES['fileup']['tmp_name'];
															$path="../super-admin/img_thep/$therapist_pic";
															}
															$string="update therapist set Photo='$therapist_pic' where Therapist_Id='$theid'";
															move_uploaded_file($tmp,$path);
															$output=mysqli_query($conn,$string);
															if(!$output)
															{
																echo mysqli_error("Could not Update");
															}	
															else
															{
																header('location:therapist_profile.php');
															}
															}
														?>
														</div>
														<div class="col-md-1 ">
								</div>
														<div class="col-md-6">
													<form id="frm1" method="post" action="profile_upd.php" enctype="multipart/form-data">
													<div > <header><h2><?php echo $nam ?> </h2></header></div>
                                                    <hr>
                                                    <div class="text-left">
														<div class="form-group">
															<label>Username<span class="text-danger">*</span></label> 
															<input type="text" required placeholder="Change Username" class="form-control" id="username" value="<?php echo $row[3]; ?>" name="username">
														</div>
														
														<div class="form-group">
															<label>Address<span class="text-danger">*</span></label>
															<input type="text" required placeholder="Change Address" class="form-control" id="Address" value="<?php echo $row[6]; ?>"  name="Address">
														</div>
														<div class="form-group">
															<label>Contact<span class="text-danger">*</span></label>
															<input type="text" required placeholder="Change Contact" class="form-control" id="Contact" value="<?php echo $row[7]; ?>"  name="Contact">
														</div>
														<button type="button" id="edit" style="margin-left:72px;" class="btn btn-purple waves-effect waves-light">Edit Profile</button>
														<button type="submit" id="save" name="save" class="btn btn-info waves-effect waves-light">Save Changes</button>
                                                    </div>
                                                </div> <!-- end member-card -->
                                            <!-- end card-box -->
                                         <!-- end col -->
                                   
                        <!-- kaam ka End row -->
        
				</form>
				</div>
				</div> 
        </div> <!-- content -->
		</div>
		<footer class="footer text-right">
					<span class="col-md-8" ></span>	
                  <div class="text-right col-md-4">Design By :<a href="http//www.easternts.com" target="_blank"> Eastern Techno Solution</a></span>
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
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

		<script>		
			$(document).ready(function(){
				 $('#username').prop('disabled',true);
				 $("#username").css("background-color", "#EFF1F2");
				 
				 $('#password').prop('disabled',true);
				 $("#password").css("background-color", "#EFF1F2");
				 
				 $('#Address').prop('disabled',true);
				 $("#Address").css("background-color", "#EFF1F2");
				 
				 $('#Contact').prop('disabled',true);
				 $("#Contact").css("background-color", "#EFF1F2");
			});	
			
			$(document).on('click','#edit',function(){
				$('#username').prop('disabled',false);
				 $("#username").css("background-color", "");
				 
				 $('#password').prop('disabled',false);
				 $("#password").css("background-color", "");
				 
				 $('#Address').prop('disabled',false);
				 $("#Address").css("background-color", "");
				 
				 $('#Contact').prop('disabled',false);
				 $("#Contact").css("background-color", "");
			});
			
			$('#eyepswd').hover(function(){
				$(this).css('cursor','pointer');
			});
			
			$('#eyepswd').click(function(){
				$('#password').attr('type','text');
			});
			
			$('#eyepswd').mouseout(function(){
				$('#password').attr('type','password');
			});			
			
			$('#profile').mouseover(function(){
				$(this).css('cursor','pointer');
				$(this).css('background-color',"#0BA293");
			});
			
			$('#profile').mouseout(function(){
				$(this).css('background-color',"");
			});
		
			
			$('#profile').click(function(){ 
				$('#imgupload').trigger('click'); 
				$('#upic').css('display','inline'); //to be commented
			});
			
			
			$(function() {
					$("#imgupload").change(function() {
						$("#message").empty(); // To remove the previous error message
						var file = this.files[0];
						var imagefile = file.type;
						var match= ["image/jpeg","image/png","image/jpg"];
						if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
						{
							$('#profile').attr('src','userbg.jpg');
							$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
							return false;
						}
						else
						{
							var reader = new FileReader();
							reader.onload = imageIsLoaded;
							reader.readAsDataURL(this.files[0]);
						}
					});
				});
				function imageIsLoaded(e) {
					$("#imgupload").css("color","green");
					//$('#image_preview').css("display", "block");
					$('#profile').attr('src', e.target.result);
					$('#profile').attr('width', '250px');
					$('#profile').attr('height', '230px');
				};
		</script> 
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script>  $(document).ready(function() {
    $('#frm2').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			
			  fileup: {
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
              }
            }
        })
		
        
});
</script>

    </body>
</html>