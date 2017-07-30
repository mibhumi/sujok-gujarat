<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?><!-- insert record using php -->


 



<!DOCTYPE html>
<html>
    <head>
<title>New Product</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css"> 

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
                    <a href="index.php" class="logo"><span>sujok<span></a>
                    
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
                            <li>
							 <a  class="dropdown-toggle user-link text-white">
                                  <big> <b> Welcome,<?php echo $_SESSION['supername']; ?></b></big>
                             </a>
							
                                
                            </li>

                          

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="userimage/<?php echo $_SESSION['spic']?>" alt="user-img" class="img-circle user-img">
									<i class=" mdi mdi-arrow-down-drop-circle-outline "></i>
                                </a>
								
								
                             <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, <?php 
										
										 $connect=mysqli_connect("localhost","root","","sujok");
													
													$un=$_SESSION['uname'];
													$up=$_SESSION['pas'];
												echo	$na=$_SESSION['supername'];
													
						
															 
																				
										?> </h5>
                                    </li>
                                    <li><a href="therapist_profile.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                   
                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                                <img src="userimage/<?php echo $_SESSION['spic']?>" alt="Welcome" class="thumb-lg img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Admin <span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="therapist_profile.php"><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                               
                                <li><a href="logout.php"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div>
					
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class="glyphicon glyphicon-home"></i><span> HOME </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bank"></i> <span> CENTRE </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled">
									<li><a href="centre-regestration.php">New Centre</a></li>
									<li><a href="centreedit.php">View Centre</a></li>
								
								</ul>
							</li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md"></i><span> THERAPIST </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="admin-regestration.php">New Therapist</a></li>
									<li><a href="adminedit.php">View Therapist</a></li>
								
								</ul>
                            </li>

                            <li class="has_sub">
                                 <a href="patientdisp.php"  class="waves-effect"><i class="fa fa-user-plus"></i><span> PATIENTS </span></a>
                            </li>

                          <!--  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> PRODUCTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="new-product.php">Add Product</a></li>
									<li><a href="productedit.php">View Product</a></li>
							
								</ul>
                            </li>-->
								<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-package-variant"></i><span> PACKAGES </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="new-package.php">Add Package</a></li>
									<li><a href="packageedit.php">View Package</a></li>
									
								</ul>
                            </li>
                    <!--        <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-list-alt"></i><span> ACCOUNTS </span></a>
                            </li>-->

                           

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
           
																										<?php
												 if(isset($_REQUEST['add']))
												 {
														 $connect=mysqli_connect("localhost","root","","sujok");
													 
														 $Therapist_Name=$_REQUEST['Therapist_Name'];
														 $Photo=$_FILES['Patient_Photo']['name'];
														 $tmp=$_FILES['Patient_Photo']['tmp_name'];
															
														$path="img_thep/$Photo";
														move_uploaded_file($tmp,$path);
														 $Username=$_REQUEST['Email'];
														 $Password=md5($_REQUEST['password']);
														 $Centre_Id=$_REQUEST['centre'];
														 $Address=$_REQUEST['Address'];
														 $Contact=$_REQUEST['Mobile'];
														 $Remark=$_REQUEST['Remark'];
														 
echo $str="insert into therapist values ('','$Therapist_Name','$Photo','$Username','$Password','$Centre_Id','$Address','$Contact','$Remark' )";
																
																	$result=mysqli_query($connect,$str);
																	if(!$result)
																	{
																		echo "worng";
																	}
																	else
																	{
																	header('location:adminedit.php');
																	}  
												 }
												?>
														
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
                                    <h1 class="page-title">Add New Patient</h1>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">SUJOK</a>
                                        </li>
                                        <li>
                                            <a href="#">Patinet </a>
                                        </li>
                                        <li class="active">
                                            Add Patinet
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
                                                        <label >Therapist Name<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Therapist Name" class="form-control" id="Therapist_Name" name="Therapist_Name">
                                                    </div>
													
													<div class="form-group m-b-0">
                                                                <label class="control-label">Therapist Photo</label>
                                                                <input type="file" class="filestyle" data-buttonname="btn-primary" id="Patient_Photo" name="Patient_Photo">
                                                            </div>	
													
													<div class="form-group">
                                                        <label >Email<span class="text-danger">*</span></label>
                                                        <input type="Email" required placeholder="Enter Email" class="form-control" id="Username" name="Email">
                                                    </div>
													<div class="form-group">
                                                        <label >Password<span class="text-danger">*</span></label>
                                                    	<input type="password" required  class="form-control" id="password" name="password">
                                                    </div>
													<div class="form-group">
                                                        <label >Centre<span class="text-danger">*</span></label>
                                                       <select name="centre" class="form-control" required>
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str2="select * from centre where Centre_Id='$row[5]'";
														$result2=mysqli_query($con,$str2);
														
														
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str2="select * from centre";
														$result2=mysqli_query($con,$str2);
														while($row1=mysqli_fetch_array($result2))
														{
														?>
														<option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
														<?php }?>
														</select>
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Address" class="form-control" id="Address" name="Address">
                                                    </div>
													<div class="form-group">
                                                        <label >Contact<span class="text-danger">*</span></label>
                                                        <input type="number" required placeholder="Enter Mobile number" class="form-control" id="Mobile" name="Mobile">
                                                    </div>
													
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control"  name="Remark" ></textarea>
                                                    </div><br><br> 													
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
												</form>

                                            </div>

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
        <script src="assets\js\waves.js"></script> 
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

		
			
	
		<script src="bootstrapvalidator.min.js"></script>
<script>  $(document).ready(function() {
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
            Therapist_Name: {
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
			  
			  Email: {
                validators: {
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              }
            }
        })
		
        
});
</script>
<script>

		$(document).ready(function(){
    $("#Username").blur(function(){
        var dip=$("#Username").val();
		
			$.ajax({url:"chkTHE.php",
			method:"POST",
			data:{cenid:dip},
			success:function(data){
				
				$('#errr').html(data);
			}
		});
	});
});
</script>

<script src="../plugins/moment/moment.js"></script>
     	<script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		
		
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>


    </body>
</html>