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
        <title>Sujok Admin Dashboard</title>

	
        <!-- DataTables -->
        <link href="../plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css">
		
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
	<!--	<link href="assets\css\compdisp_modal.css" rel="stylesheet" type="text/css">
		<link href="assets\css\centreedit_modal.css" rel="stylesheet" type="text/css">-->
		<link rel="stylesheet" href="http://www.webserveglobal.com/catalog/view/theme/wsg/css/animate.css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->		
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
                                    <h4 class="page-title">Edit Complaint</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Sujok</a>
                                        </li>
										<li>
                                            <a href="#">Complaint</a>
                                        </li>
                                        <li class="active">
                                           Edit Complaint
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

					
					<div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><a  href="patientdisp.php" class="btn btn-success"><i class="ion-plus-round "></i>Add New Complaint</a></h4>
                                    <p class="text-muted font-13 m-b-30">                                       
                                    </p>
									<?php
										include("connection.php");
										$cid=$_SESSION['Centre_Id'];
										$str="select * from complaint where Centre_Id=$cid";
										$res=mysqli_query($conn,$str);
									?>

                                    <table id="datatable" class="table table-striped  table-colored table-info draggable ">
                                        <thead>
                                        
                                            <th>Complaint Id</th>
											<th>Patient Name</th>
                                            <th>Complaint Date</th>
											<th>Major Complaint</th>
											<th>Other Complaint</th>
											<th>Centre Name</th>
                                            <th>Remark</th>
											<th>View</th>
											<th>Delete</th>
											<th>Edit Complaint</th>
                          
                                        </thead>
                                        <tbody>
										<?php
											while($row=mysqli_fetch_array($res))
											{
										?>
                                        <tr id="tr2">                                            
                                           <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></td>
										 <?php  
											$str1="select * from patient where Patient_Id=$row[1]";
											$res1=mysqli_query($conn,$str1);
											
											 if($row1=mysqli_fetch_array($res1))
											 {  ?>												
											     <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[1]; ?>"><?php echo $row1[2]; ?></td>																												
											<?php }
										   ?>
										   <?php
												$timestamp = strtotime($row[2]);
												$dat=date('d-M-Y', $timestamp);
											?>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $dat; ?>"><?php echo $dat; ?></td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[3]; ?>"><?php echo $row[3]; ?></td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[4]; ?>"><?php echo $row[4]; ?></td>
										   <?php  
											$str1="select * from centre where Centre_Id=$row[5]";
											$res1=mysqli_query($conn,$str1);
											
											 if($row1=mysqli_fetch_array($res1))
											 {  ?>												
											     <td draggable="true" ondragstart="drag(event)" id="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></td>																												
											<?php }
										   ?>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[6]; ?>"><?php echo $row[6]; ?></td>
										  <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[1]; ?>"> <button type="button" class="btnview btn-success" id="<?php echo "$row[0]"; ?>" data-toggle="modal" data-target="#MyModal4"> <i class="fa fa-eye "></i> </button> </td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[1]; ?>"><button type="button" class="btndel btn-danger" id="<?php echo "$row[0]"; ?>" data-toggle="modal" data-target="#MyModal5"><i class="fa fa-trash-o "></i></button> </td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[1]; ?>"> <button type="button" class="btnupd btn-primary" id="<?php echo "$row[0]"; ?>" data-toggle="modal" data-target="#MyModal6"><i class="fa fa-pencil " ></i></button></td>
										   
									   </tr>
											<?php
											} ?>
						            </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
				</div>
			</div>
		</div>
						
						
			<!-- MODAL -->
            <div id="MyModal5" class="modal" aria-labelledby="myModalLabel" data-animation="bounceIn">        
               	<section class="col-md-4"></section>
				<div class="modal-block col-md-4">
			   <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title"> Confirmation </h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p> Are you Sure you want to Delete? </p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
								
                                <button type="button" id="dialogyes" class="btnyes btn  btn-primary waves-effect waves-light">YES</button>				
                                <button type="button" id="dialogno" class="btn btn-default waves-effect" data-dismiss="modal">NO</button>
                            </div>
                        </div>
                    </div>

                </section>
				</div>
            </div>
            <!-- end Modal -->	
		</div>			
        <!-- END wrapper -->

		
		<!--update modal-->
			<div id="MyModal6" class="modal" aria-labelledby="myModalLabel" data-animation="bounceIn">  
                <section class="col-md-4"></section>
			<div class="modal-block col-md-4">
				<section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title"> Update Record </h2>
						<button type="button" class="close" onclick="window.location.href='complaint_edit.php'" style="margin-top: -18px;">&times;</button>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p id="result"> </p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
                            </div>
                        </div>
                    </div>
                </section>
				</div>
            </div>

		<!-- view complaint -->
		<div class="modal fade" id="MyModal4" aria-labelledby="myModalLabel" data-animation="bounceIn">
			<section class="col-md-4"></section>
			<div class="modal-block col-md-4">
                <section class="panel panel-info panel-color  ">
                    <header class="panel-heading">
                        <h2 class="panel-title"> VIEW DETAILS </h2>
						<button type="button" class="close" data-dismiss="modal" style="margin-top: -18px;">&times;</button>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="text-primary" id="res" name="res">
						</div>
							 <div class="col-md-12 text-right">
								
                                
                                
                            </div>
                        </div>
					</div>

                </section>
				</div>
			
		</div>
		<script src="DRAGGABLE.js"></script>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
		<script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
		<script src="assets\js\compedit_main.js"></script>
		<script src="assets\js\compdisp_main.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
		
		
		<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.js"></script>
		
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap.min.js"></script>
        <!--<script src="../plugins/datatables/jszip.min.js"></script>-->
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../plugins/datatables/dataTables.colVis.js"></script>
        <script src="../plugins/datatables/dataTables.fixedColumns.min.js"></script>
		
		
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
			//var m=months[today.getMonth()];
			var m=today.getMonth();
			m += 1; 
			var y=today.getFullYear();
			$('.datepicker-autoclose').val(m+ "/" + d + "/" +y);
			/*var today=new Date();
			$('#Treatment_Date').attr("placeholder",today.toDateString());*/			
			});	
		</script>
			<script>

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

$("td").dblclick(function() {
			$(this).find("#datatable-colvid").html();   
 });
    
 

</script>
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>

		

        <!--init -->
        <script src="assets\pages\jquery.datatables.init.js"></script>
		
		<!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>
	</body>	
</html>