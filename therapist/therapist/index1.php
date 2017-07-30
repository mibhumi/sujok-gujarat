<?php 
include("connection.php");
	session_start();
	if(isset($_SESSION['uname']))
	{
		$thesess=$_SESSION['uname'];
		$str="select * from therapist where Username='$thesess'";
		$res=mysqli_query($conn,$str);
		$row=mysqli_fetch_array($res);
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
        <link rel="shortcut icon" href="assets\images\su-logo.png">
        <!-- App title -->
        <title>Sujok Admin Dashboard </title>

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
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="upload/<?php echo $row[2]; ?>" alt="Your Profile" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
										<h5> <?php echo $row[1]; ?> </h5>
                                    </li>
                                    <li><a href="therapist_profile.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="therapist_logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

							<li>
                                <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                    <i class="fa fa-cog fa-spin"></i>
                                </a>
                            </li>

							<li>
								<a class="right-menu-item">
									<span id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt"></i></span>
								</a>
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
                                <img src="hershey.jpg" alt="Welcome" class="thumb-lg img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Super Admin/Therapist <span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-account-settings-variant m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div>
					
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class="glyphicon glyphicon-home"></i><span> HOME </span> </a>
                            </li>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span>ENQUIRY</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="add_enquiry.php">Add Enquiry</a></li>
									<li><a href="enqdisp.php">View Enquiry</a></li>
								</ul>
                            </li>


							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-plus"></i><span> PATIENTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="add_patient.php">Add Patient</a></li>
									<li><a href="patient_edit.php">View Patient</a></li>
									<!--<li><a href="patientdisp.php">View Patients</a></li>-->
								</ul>
                            </li>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> COMPLAINTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="patientdisp.php">Add Complaint</a></li>
									<li><a href="complaint_edit.php">View Complaint</a></li>
									<!--<li><a href="compdisp.php">View Complaint</a></li>-->
								</ul>
                            </li>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md"></i><span> TREATMENT </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="patient_treatmentdisp.php">Add Treatment</a></li>
									<li><a href="treatment_edit.php">View Treatment</a></li>
									<!--<li><a href="compdisp.php">View Complaint</a></li>-->
								</ul>
                            </li>
							
                           
						    <li class="has_sub">
                                <a href="packagedisp.php" class="waves-effect"><i class="glyphicon glyphicon-list-alt"></i><span>PACKAGE</span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> PRODUCTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href=".html">Add Product</a></li>
									<li><a href=".html">Edit Product</a></li>
									<!--<li><a href=".html">Delete Product</a></li>-->
								</ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-list-alt"></i><span> ACCOUNTS </span></a>
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

						
						<br><br>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="fa fa-user-plus widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="patients">total patients</p>
                                        <h2 class="text-white"><span data-plugin="counterup">22</span> <small><i class="mdi mdi-arrow-up text-danger"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> &nbsp; 30.4k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-chart-bar widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="income">Total Income</p>
                                        <h2 class="text-white"><span data-plugin="counterup">203 </span> <small><i class="mdi mdi-arrow-up text-danger"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> &nbsp; 40.33k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class=" mdi mdi-cellphone-android widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="enquiry">Enquiries</p>
                                        <h2 class="text-white"><span data-plugin="counterup">690</span> <small><i class="mdi mdi-arrow-up text-primary"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> 29.8k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
							
							<div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class=" mdi mdi-chart-line widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="statistics">statistics</p>
                                        <h2 class="text-white"><span data-plugin="counterup">560</span> <small><i class="mdi mdi-arrow-up text-primary"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> 29.8k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        <!-- end row -->

                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    Sujok © 2017
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



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

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Flot chart js -->
        <!--<script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>-->

        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Dashboard init -->
        <!--<script src="assets\pages\jquery.dashboard_2.js"></script>-->

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>
    </body>
</html>