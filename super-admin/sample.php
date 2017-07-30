<?php
session_start();
include("connection.php");

if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
else
{
	$spic=$_SESSION['spic'];
}
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
                                    <img src="userimage/user.jpg" alt="user-img" class="img-circle user-img">
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
                                <img src="userimage/user.jpg" alt="Welcome" class="thumb-lg img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle text-center" data-toggle="dropdown" aria-expanded="false"><?php	echo	$na;?></a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown" id="setting-dropdown">
                         
                        </div>
					
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class="glyphicon glyphicon-home"></i><span> HOME </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bank"></i> <span> CENTRE </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled">
									
									<li><a href="centreedit.php">View Centre</a></li>
									<li><a href="centre-regestration.php">Add Centre</a></li>
								
								</ul>
							</li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md"></i><span> THERAPIST </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="adminedit.php">View Therapist</a></li>
									<li><a href="admin-regestration.php">Add Therapist</a></li>
									
								
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
									
									<li><a href="packageedit.php">View Package</a></li>
									<li><a href="new-package.php">Add Package</a></li>
									
								</ul>
                            </li>
							 <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> PRODUCTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
								
									<li><a href="productedit.php">View Product</a></li>
									
									<li><a href="new-product.php">Add Product</a></li>
									<li><a href="stock.php">View Current Stock</a></li>
									<li><a href="add-stock.php">Manage Stock</a></li>
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
                                        <div class="modal-block" id="morris-donut-example" style="height: 280px;"></div>     
                                	</div>
                        		</div>
                            </div><!-- end col -->
							
							<form method="post">
                            <div class="col-lg-4">
                                <div class="card-box">									
									<h4 class="header-title m-t-0">Treatment</h4>
									<div class="col-md-12 pull-right m-b-30">
                                        <input type="text" name="honey" id="reportrange" class="form-control">
                                            <!--<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>-->
                                            <!--<span></span>-->
                                    </div>
                                    <div class="modal-block" id="morris-bar-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->
							</form>

                            <div class="col-lg-4">
                                <div class="card-box ">

                                    <h4 class="header-title m-t-0 ">Total Revenue</h4>
                                    <div class="modal-block" id="morris-line-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                        </div>						
                    </div> <!-- container -->
                </div> <!-- content -->

	<!--	<div id="id1" name="lolo"></div>-->
		
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
		
		 <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		
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
					/*Morris.Bar({
						element: 'morris-bar-example',
						data:data,
						xkey: xkey,
						ykeys: ykeys,
						labels: labels,
						hideHover: 'auto',
						resize: true, //defaulted to true
						redraw:true,
						//gridLineColor: '#eef0f2',
						barSizeRatio: 0.6,
						barColors: lineColors,
						postUnits: ''
					});*/
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
						colors: colors,
						pieOptions: {	
							animationSteps: 100,
							animationEasing: "easeOutBounce",
							animateRotate: true,
						},
					});
				},

				Dashboard1.prototype.init = function() {
					//creating bar chart
					var $barData  = [
						{ y: '', a:0  },				
						{ y: '', a:0 },
					];
					this.createBarChart('morris-bar-example', $barData, ['y'], ['a'], []);

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
	$('input[name="honey"]').daterangepicker(
		{
			locale:{
				format:'YYYY-MM-DD'
			},
			StartDate:'2000-01-01',
			endDate:'2050-12-31'
		},
		function(start, end, label){
			var chart=Morris.Bar({
						element: 'morris-bar-example',
						data:[{'y':0,'a':0}],
						xkey: 'y',
						ykeys: 'a',
						labels: ['y','Treatments'],
						hideHover: 'auto',
						resize: true, //defaulted to true
						redraw:true,
						//gridLineColor: '#eef0f2',
						barSizeRatio: 0.6,
						//barColors: lineColors,
						postUnits: ''
					});
				var dts=(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
				$.ajax({
					url:"data1.php",
					method:"POST",
					//dataType:"JSON",
					data:{date_data:dts},
					success:function(data)
					{
						chart.setData(JSON.parse(data));
					}
				});
		});
        /*    $('#reportrange').val(moment().subtract(29, 'days').format('D MMM YYYY') + '-' + moment().format('D MMMM YYYY'));
            $('#reportrange').daterangepicker({
                format: 'D MMMM YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2000',
                maxDate: '12/31/2050',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportranges').val(start.format('D MMMM YYYY') + '-' + end.format('D MMMM YYYY'));
				//ajax	
            });*/
        </script>
	</body>
</html>