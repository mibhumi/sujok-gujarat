<?php 
session_start();
include("connection.php");
	
/*	if(isset($_SESSION['uid']))
	{
		$theid=$_SESSION['uid'];
		
		$str="select * from therapist where Therapist_Id='$theid'";
		$res=mysqli_query($conn,$str);
		$row=mysqli_fetch_array($res);
	}
	else
	{
		header('location:therapist_login.php');
	}*/
?>

<?php
	$query="SELECT c.Centre_Name, p.Centre_Code, COUNT( * ) AS tot_pat FROM centre c, patient p WHERE c.Centre_Code = p.Centre_Code GROUP BY p.Centre_Code";
	$outcome=mysqli_query($conn,$query);
	$data=array();
	while($rec=mysqli_fetch_array($outcome))
	{
		$data[]=array(
			'label' => $rec['Centre_Name'],
			'value' => $rec['tot_pat']
		);
	}
	$data = json_encode($data);
?>

<?php
	$dates=date("d-M-Y");
	$barquery="select c.Centre_Name, t.Centre_Id, count(*) as tot_treat from centre c, treatment t where c.Centre_Id=t.Centre_Id and Treatment_Date='31 May 2017' group by t.Centre_Id";
	$baroutcome=mysqli_query($conn,$barquery);
	$bardata=array();
	while($barrec=mysqli_fetch_array($baroutcome))
	{
		$bardata[]=array(
			'y' => $barrec['Centre_Name'],
			'a' => $barrec['tot_treat']
		);
	}
	$bardata = json_encode($bardata);
?>


<!DOCTYPE html>
<html> <!---->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\su-logo.png">
        <!-- App title -->
        <title>Sujok Admin Dashboard </title>

        <!-- morris chart -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

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
                                <img src="upload/<?php echo $row[2]; ?>" alt="Welcome" class="thumb-lg img-circle">
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
									<li><a href="patientdisp.php">View Patient</a></li>
									<li><a href="complaint_edit.php">View Complaint</a></li>
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
									<li><a href="patient_treatmentdisp.php">Add Treatment</a></li>
									<li><a href="viewtreatment.php">View Treatment</a></li>
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
						
							<?php 
								$exe = mysqli_query($conn,"select count(*) from patient");
								$roww = mysqli_fetch_array($exe);
								$total = $roww[0];
							?>
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="fa fa-user-plus widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="patients">total patients</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total; ?></span> <small><i class="mdi mdi-arrow-up text-danger"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> &nbsp; 30.4k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
							
                            <?php 
								$exe2 = mysqli_query($conn,"select count(*) from therapist");
								$roww2 = mysqli_fetch_array($exe2);
								$total2 = $roww2[0];
							?>
							<div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-chart-bar widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="income">Total Therapist</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total2; ?> </span> <small><i class="mdi mdi-arrow-up text-danger"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> &nbsp; 40.33k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

							<?php 
								$exe1 = mysqli_query($conn,"select count(*) from enquiry");
								$roww1 = mysqli_fetch_array($exe1);
								$total1 = $roww1[0];
							?>
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class=" mdi mdi-cellphone-android widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="enquiry">Enquiries</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total1; ?></span> <small><i class="mdi mdi-arrow-up text-primary"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> 29.8k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

							<?php 
								$exe3 = mysqli_query($conn,"select count(*) from centre");
								$roww3 = mysqli_fetch_array($exe3);
								$total3 = $roww3[0];
							?>
							<div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class=" mdi mdi-chart-line widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="statistics">Total Centres</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total3; ?></span> <small><i class="mdi mdi-arrow-up text-primary"></i></small></h2>
                                        <p class="m-0"><b>Last Hour:</b> 29.8k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
						
						<div class="row">
							<div class="modal-block"> </div>
                            <div class="col-lg-4">
									<div class="card-box">
                        			<h4 class="header-title m-t-0 "> Patients </h4>
                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example" style="height: 280px;"></div>     
                                	</div>
                        		</div>
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box">
									<h4 class="header-title m-t-0">Treatment as on <span class="text-success" id="cal"> </span></h4>					
                                    <div id="morris-bar-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box ">

                                    <h4 class="header-title m-t-0 ">Total Revenue</h4>
                                    <div id="morris-line-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                        </div>						
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

		<!-- morris chart -->
        <script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>
		
        <!-- Dashboard init 
		<script src="assets\pages\jquery.dashboard.js"></script>-->

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>
			
		<script>						
			/**
			* Theme: Zircos  Admin Template
			* Author: Coderthemes
			* Dashboard
			*/
			
			$(document).ready(function(){
			var today=new Date();
			var d=today.getDate();
			var months = ['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'September', 'October', 'November', 'December'];
			var m=months[today.getMonth()];
			var y=today.getFullYear();
			$('#cal').text(d+ " " + m + " " +y);
			});
			
			!function($) {
				"use strict";

				var Dashboard1 = function() {
					this.$realData = []
				};

				//creates Bar chart
				Dashboard1.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
					Morris.Bar({
						element: element,
						data: <?php echo $bardata; ?>,
						xkey: xkey,
						ykeys: ykeys,
						labels: labels,
						hideHover: 'auto',
						resize: true, //defaulted to true
						//gridLineColor: '#eef0f2',
						barSizeRatio: 0.6,
						barColors: lineColors,
						postUnits: ''
					});
				},

				//creates line chart
				Dashboard1.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
					Morris.Line({
					  element: element,
					  data: data,
					  xkey: xkey,
					  ykeys: ykeys,
					  labels: labels,
					  fillOpacity: opacity,
					  pointFillColors: Pfillcolor,
					  pointStrokeColors: Pstockcolor,
					  behaveLikeLine: true,
					  gridLineColor: '#eef0f2',
					  hideHover: 'auto',
					  resize: true, //defaulted to true
					  pointSize: 0,
					  lineColors: lineColors,
						postUnits: 'k'
					});
				},

				//creates Donut chart
				Dashboard1.prototype.createDonutChart = function(element, data, colors) {
					Morris.Donut({
						element: element,
						data:<?php echo $data; ?>,
						resize: true, //defaulted to true
						colors: colors
					});
				},

				Dashboard1.prototype.init = function() {
					//creating bar chart
					var $barData  = [
						{ y: '', a:2  },				
						{ y: '', a:2  },
					];
					this.createBarChart('morris-bar-example', $barData, ['y'], ['a'], ['Statistics'], ['#b3b3cc']);

					//create line chart
					var $data  = [
						{ y: '2008', a: 50, b: 0 },
						{ y: '2009', a: 75, b: 50 },
						{ y: '2010', a: 30, b: 80 },
						{ y: '2011', a: 50, b: 50 },
						{ y: '2012', a: 75, b: 10 },
						{ y: '2013', a: 50, b: 40 },
						{ y: '2014', a: 75, b: 50 },
						{ y: '2015', a: 100, b: 70 }
					  ];
					this.createLineChart('morris-line-example', $data, 'y', ['a','b'], ['Series A','Series B'],['0.9'],['#ffffff'],['#999999'], ['#f5707a','#188ae2']);

					//generating random colors
					var colorarray=['#3ac9d6', '#f5707a', '#4bd396','#ffb3b3','#936c6c','#6c6c93'];
					
					var $donutData = [
							{label: "", value:0},
							{label: "", value:0},
							{label: "", value:0},
						];
					this.createDonutChart('morris-donut-example', $donutData, colorarray);
				},
								
				//init
				$.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
			}(window.jQuery),

			//initializing 
			function($) {
				"use strict";
				$.Dashboard1.init();
			}(window.jQuery);
		</script>	

				<script>
				
		</script>
    </body>
</html>