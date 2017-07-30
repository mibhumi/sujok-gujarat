<?php 
session_start();
include("connection.php");
	
	if(isset($_SESSION['tuid']))
	{
		 $cid=$_SESSION['Centre_Id'];
		$theid=$_SESSION['tuid'];
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
        <title>View Product</title>

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
	<!--	<link href="assets\css\patientdisp_modal.css" rel="stylesheet" type="text/css">
		<link href="assets\css\patientedit_modal.css" rel="stylesheet" type="text/css">-->
		<link rel="stylesheet" href="http://www.webserveglobal.com/catalog/view/theme/wsg/css/animate.css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif] -->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
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
                                    <h4 class="page-title">Product</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Sujok</a>
                                        </li>
                                        <li class="active">
                                           All Product
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
						
					<?php
						
						
						$str="select * from product_account where Centre_Id='$cid' ";
						//$str="select * from patient order by Patient_Id desc";
						$res=mysqli_query($conn,$str);

					?>

					<div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    
                                    <p class="text-muted font-13 m-b-30">                                       
                                    </p>

                                    <table id="datatable-responsive" class="table table-striped  table-colored table-info draggable">
                                        <thead>
                                        
                                            
                                            <th >Buyer Name</th>
											<th >Product Name</th>
											<th >Contact</th>
											<th >Address</th>
                                            <th >Selling Date</th>
											<th>Quantity</th>
											<th>Total</th>
											<th>Paid</th>
											<th>Payment type</th>
											<th>Cheque no.</th>
											<th>Bank Name</th>
											
                                    
                                        </thead>
                                        <tbody>
										<?php
											while($row=mysqli_fetch_array($res))
											{
										?>
                                        <tr id="tr2">                                            
                                           <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[3]; ?>"><?php echo $row[3]; ?></td>
										   <?php  
											$str5="select * from product where Product_Id='$row[2]'";
											$res5=mysqli_query($conn,$str5);
											
											 if($row5=mysqli_fetch_array($res5))
											 {  ?>												
											      <td draggable="true" ondragstart="drag(event)" id="<?php echo $row5[2]; ?>"><?php echo $row5[1]; ?></td>																												
											<?php }
										   ?> 
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[5]; ?>"><?php echo $row[4]; ?></td>
											<td draggable="true" ondragstart="drag(event)" id="<?php echo $row[5]; ?>"><?php echo $row[5]; ?></td>
										   <?php
												$timestamp = strtotime($row[6]);
												$dat=date('d-M-Y', $timestamp);
											?>
										  <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[4]; ?>"><?php echo $dat; ?></td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[2]; ?>"><?php echo $row[7]; ?></td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[9]; ?>"><?php echo $row[8]; ?></td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[11]; ?>"><?php echo $row[9]; ?></td>
										   <?php $type=$row[10];
												if($type==0)
												{
													$t1="cash";
												}else{
													$t1="cheque";
												}
										   ?>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[2]; ?>"><?php echo $t1; ?></td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[9]; ?>"><?php echo $row[11]; ?></td>
										   <td draggable="true" ondragstart="drag(event)" id="<?php echo $row[11]; ?>"><?php echo $row[12]; ?></td>
										   
	                                    
										</tr>
											<?php
											} ?>
						            </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
					</form>
	
        <!-- END wrapper -->
		
		<div class="modal " id="MyModal" aria-labelledby="myModalLabel" data-animation="bounceIn">
		
		<section class="col-md-4 modal-block">
					</section>
					<div class="modal-block">
			 <section class="panel panel-info panel-color   ">
                    <header class="panel-heading">
                        <h2 class="panel-title">View Patient </h2>
						<button type="button" class="close" data-dismiss="modal" style="margin-top: -18px;">&times;</button>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p id="res"> </p>
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
		
		
		
		<!--update modal-->
			<div id="MyModal2" class="modal" aria-labelledby="myModalLabel" data-animation="bounceIn">  
                <section class="col-md-4 modal-block">
					</section>
					<div class="modal-block">
			 <section class="panel panel-info panel-color   ">
                    <header class="panel-heading">
                        <h2 class="panel-title">update </h2>
						<button type="button" class="close" onclick="window.location.href='patientdisp.php'"  style="margin-top: -18px;">&times;</button>
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
			
		<!-- MODAL for complaint -->
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
						<button type="button" class="close" onclick="window.location.href='patientdisp.php'"  style="margin-top: -18px;">&times;</button>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p id="reha"> </p>
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
                        <h2 class="panel-title"> VIEW COMPLAINT </h2>
						<button type="button" class="close" data-dismiss="modal" style="margin-top: -18px;">&times;</button>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="text-primary" id="resk" >
						</div>
							 <div class="col-md-12 text-right">
								
                                
                                
                            </div>
                        </div>
					</div>

                </section>
				</div>
			
		</div>

		 <footer class="footer text-right">
					<span class="col-md-8" ></span>	
                  <div class="text-right col-md-4">Design By :<a href="http//www.easternts.com" target="_blank"> Eastern Techno Solution</a></span>
                </footer>
								
		<script>
            var resizefunc = [];
        </script>
		<script>

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

$("td").dblclick(function() {
			$(this).find("#datatable-colvid").html();   
 });
    
 

</script>

        <!-- jQuery  -->
        
		<script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
		<script src="assets\js\patientdispjs.js"></script>
		<!--<script src="assets\js\compedit_main.js"></script>-->
		<script src="assets\js\compedit_main.js"></script>
		<!--<script src="assets\js\compdisp_main.js"></script>-->
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

<!-- append child row <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>-->

		
        <!-- init -->
        <script src="assets\pages\jquery.datatables.init.js"></script>

        <!-- App js -->
		
		<script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

		
        <script type="text/javascript">
            
        </script>
		<script src="DRAGGABLE.js"></script>
		<script src="../plugins/moment/moment.js"></script>
     	<script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		
		
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>


		
				<script>
			
		</script>
		
    </body>
</html>