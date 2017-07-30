<?php 
session_start();
include("connection.php");
	
	if(isset($_SESSION['tuid']))
	{
		$theid=$_SESSION['tuid'];
		 $cid=$_SESSION['Centre_Id'];
		$str="select * from therapist where Therapist_Id='$theid'";
		$res=mysqli_query($conn,$str);
		$row=mysqli_fetch_array($res);
	}
	else
	{
		header('location:therapist_login.php');
	}
?>

<?php
	include("connection.php"); 	
	$counter=" ";
	$d=date('Y-m-d');
	$year=date("Y",strtotime($d));
	$year1=date('Y-m-d', strtotime(date('Y-m')." -1 year"));
	$m=date("m",strtotime($d));
	for($i=1;$i<=$m;$i++)
	{
		$strz=mysqli_query($conn,"select * from treatment where Treatment_Date between '$year1-$i-01' and '$year-$i-31' ");
		$rowz=mysqli_num_rows($strz);
		$counter.=$rowz." ";
	}
	$co=explode(" ",$counter);
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
        <title>Sujok Admin Dashboard </title>

        <!-- date range picker -->
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
		<style>
	#container {
	min-width: 100%
	;
	max-width: 100%;
	margin: 0 auto;
	}
	</style>
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

						
						<br><br>
                        <!-- end row -->


                        <div class="row">
						
							<?php 
								$sql1="select * from centre where Centre_Id=$cid";
								$res1=mysqli_query($conn,$sql1);
								$result1=mysqli_query($conn,$sql1);
								if($row1=mysqli_fetch_array($result1))
								{  												
										$_SESSION['Centre_Code']= $row1[7];																												
								}
								$Code1=$_SESSION['Centre_Code'];
								$exe1 = mysqli_query($conn,"select count(*) from patient where Centre_Code='$Code1'");
								$roww1 = mysqli_fetch_array($exe1);
								$total1 = $roww1[0];
							?>
							
                            <div class="col-lg-4 col-md-6"><big><big>
                               <a href="patientdisp.php">  <div class="card-box widget-box-two widget-two-info">
                                   <i class="fa fa-user-plus widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="patients">Total Patients</p>
                                        <h1 class="text-white"><span data-plugin="counterup"><?php echo $total1; ?></span> <small><i class="mdi mdi-arrow-up text-danger"></i></small></h1>
                                        <p class="m-0"><b></b> &nbsp;</p>
                                    </div>
                                </div></a></big></big>
                            </div><!-- end col -->
							
                            <?php 
								$exe2 = mysqli_query($conn,"select count(*) from treatment where Centre_Id='$cid'");
								$roww2 = mysqli_fetch_array($exe2);
								$total2 = $roww2[0];
							?>
							
							<div class="col-lg-4 col-md-6"><big><big>
                                <a href="viewtreatment.php"><div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi fa fa-user-md widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="income">Total Treatment</p>
                                        <h1 class="text-white"><span data-plugin="counterup"><?php echo $total2; ?> </span> <small><i class="mdi mdi-arrow-up text-danger"></i></small></h1>
                                        <p class="m-0"><b></b> &nbsp; </p>
                                    </div>
                                </div></a></big></big>
                            </div><!-- end col -->

							<?php 
								$sql3="select * from centre where Centre_Id=$cid";
								$res13=mysqli_query($conn,$sql3);
								$result3=mysqli_query($conn,$sql3);
								if($row3=mysqli_fetch_array($result3))
								{  												
										$_SESSION['Centre_Code']= $row3[7];																												
								}
								$Code3=$_SESSION['Centre_Code'];
								$exe3 = mysqli_query($conn,"select count(*) from enquiry  where Centre_Code='$Code3'");
								$roww3 = mysqli_fetch_array($exe3);
								$total3 = $roww3[0];
							?>
							
                            <div class="col-lg-4 col-md-6"><big><big>
                                <a href="enqdisp.php"><div class="card-box widget-box-two widget-two-danger">
                                    <i class=" mdi ion-person-stalker widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="enquiry">Enquiries</p>
                                        <h1 class="text-white"><span data-plugin="counterup"><?php echo $total3; ?></span> <small><i class="mdi mdi-arrow-up text-primary"></i></small></h1>
                                        <p class="m-0"><b></b> &nbsp; </p>
                                    </div>
                                </div></a>
                            </div><!-- end col -->

							<?php 
								$exe3 = mysqli_query($conn,"select count(*) from centre");
								$roww3 = mysqli_fetch_array($exe3);
								$total3 = $roww3[0];
							?>
							<!-- end col -->
                        </div>
                        <!-- end row -->
						
						<div class="row">
							<div class="modal-block"> </div>
                            <!-- end col -->

                            <!-- end col -->

                            <div class="row">
							<div class="modal-block"> </div>                            
							<div class="col-lg-4">
                                <div class="card-box" style="width:309%;">									
									<h4 class="header-title m-t-0">Treatment</h4><div class="text-right">
									<button id="for_month" class="btn btn-success">Monthly</button>
									<button id="for_year" class="btn btn-warning">Yearly</button></div>
									<div class="modal-block" id="container"></div>
									<button id="plain" class="btn">Plain</button>
									<button id="inverted" class="btn">Inverted</button>
									<button id="polar" class="btn">Polar</button>
                                </div>
                            </div><!-- end col -->
							
							
                        </div>	

                        </div>						
                    </div> <!-- container -->
                </div> <!-- content -->

                


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
<footer class="footer text-right">
					<span class="col-md-8" ></span>	
                 <small><small>   <div class="text-right col-md-4">Design By :<a href="http//www.easternts.com" target="_blank"> Eastern Techno Solution</a></span></small></small>
                </footer>
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
      <!--  <script src="assets\js\waves.js"></script>-->
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
			
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-more.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		
		<script>
var chart = Highcharts.chart('container', {

    title: {
        text: 'Yearly Records'
    },
	
    xAxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php for($i=1;$i<=$m;$i++)
		{
			echo $co[$i] . ",";
		}?>],
        showInLegend: false,
    }]

});


$('#plain').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

$('#inverted').click(function () {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

$('#polar').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});
</script>

<script>
	$('#for_month').click(function(){
	$.ajax({
		url:"day.php",
		success:function(data)
		{
			$('#container').html(data);
		}
	});
});
	$('#for_year').click(function(){
	$.ajax({
		url:"samp1.php",
		success:function(data)
		{
			$('#container').html(data);
		}
	});
});
</script>
    </body>
</html>