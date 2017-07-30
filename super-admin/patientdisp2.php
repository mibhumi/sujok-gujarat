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
        <title>Sujok Admin Dashboard</title>
		
		       <link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet">
        <link href="../plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css">
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">


        <!-- DataTables -->
        <link href="../plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css">
		

        <!-- App css -->
		
		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://www.webserveglobal.com/catalog/view/theme/wsg/css/animate.css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif] 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		-->
	<style>
		#tr2:hover{
			background-color:#C9E4FF;
			color:black;
			cursor:pointer;
		}
		
		.modal-content{
			background-color:rgba(242,246,248,0.92);
		}
		
		.modal{
			margin-top: 100px;
			margin-left: 134px;
			text-align: center;
		}
		
		.modal::before {
		content: "";	  
		display: inline-block;
		height: 100%;		
		margin-right: -4px;
		vertical-align: middle;
		}
		
		.modal-dialog {	
		display: inline-block;	
		text-align: left;	
		vertical-align: middle;
		}

		.brownbtn{
			width:12%;
		}
		
	</style>
		<script>
		function showCentre(str)
		{
			
			if(str=="")
			{
				document.getElementById("div1").innerHTML="";
				return;
			}
			else
			{
				if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}	
				xmlhttp.onreadystatechange=function()
				{
					if (this.readyState==4 && this.status==200)
					{
						document.getElementById("div1").innerHTML=this.responseText;
					}
				};
				xmlhttp.open("GET","getrecord.php?e="+str,true);
				xmlhttp.send();
			}
		}
	</script>

	
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
                    <a href="index.php" class="logo"><span>SUJOK</span><i class="mdi mdi-cube"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
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
                                <form role="search" class="app-search" method="post">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="hershey.jpg" alt="" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Welcome,Admin</h5>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bank"></i> <span> CENTRE </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled">
									<li><a href="add_centre.php">New Centre</a></li>
									<li><a href="centre_edit.php">Edit Centre</a></li>
									<li><a href="centredisp.php">All Centre</a></li>
								</ul>
							</li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md"></i><span> THERAPIST </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="admin-regestration.php">New Therapist</a></li>
									<li><a href="patientdisp.php">Edit Therapist</a></li>
									<li><a href="patientdisp.php">Delete Therapist</a></li>
								</ul>
                            </li>

                          <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-plus"></i><span> PATIENT </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="add_patient.php">Add patient</a></li>
									<li><a href="patientdisp.php">view all patient</a></li>
									<li><a href="patientdisp.php">Register complaint</a></li>
									<li><a href="complaintdisp.php">all compalint</a></li>
									<li><a href="patient_treatmentdisp.php">insert treatment</a></li>
								</ul>
                            </li>
							
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> PRODUCTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="new-product.php">Add Product</a></li>
									<li><a href="productedit.php">Edit Product</a></li>
									<li><a href="productdisp.php">All Product</a></li>
								</ul>
                            </li>
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-package-variant"></i><span> PACKAGES </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="new-package.php">Add PACKAGES</a></li>
									<li><a href="packageedit.php">Edit Product</a></li>
									<li><a href="packagedisp.php">All packages</a></li>
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


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Centre </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Sujok</a>
                                        </li>
                                        <li class="active">
                                           All Centres
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
						
					<?php
						 $conn=mysqli_connect("localhost","root","","sujok");
						$str="select * from patient";
						$res=mysqli_query($conn,$str);
					?>

					<div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <!--<h4 class="m-t-0 header-title"><a  href="add_centre.php" class="btn btn-success"><i class="ion-plus-round "></i>Add New Centre</a></h4>-->
									<select name="sel1" class="selectpicker show-tick brownbtn" data-style="btn-brown" onchange="showCentre(this.value)">
										<?php 
											include("connection.php");
											$string="select * from centre";
											$output=mysqli_query($conn,$string);
											while($record=mysqli_fetch_array($output))
											{
												$centre_code=$record['Centre_Code'];
												echo "<option value='$centre_code'>" .$record['Centre_Name']. "</option>";
											}
										?>
                                    </select>
									<p class="text-muted font-13 m-b-30">                                       
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr id="tr1">
											<th width="13%">Centre Code</th>
                                            <th width="10%">Patient Id</th>
											<th width="13%">Patient Name</th>
											<th width="15%">Image</th>
											<th width="15%">regestration Date</th>
											<th width="7%">State</th>
                                            <th width="10%">Contact</th>
											<th width="5%"></th>
											<th width="5%"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
										<?php
											while($row=mysqli_fetch_array($res))
											{
										?>
                                        <tr id="tr2">                                            
                                           <td width="10%" id="td1"><?php echo $row[1]; ?></td>
										   <td width="13%"><?php echo $row[0]; ?></td>
										   <td width="15%"><?php echo $row[2]; ?></td>
										   <td><img src='img_pat/<?php echo $row[3]; ?>' height=50 width=50></td>
										   <td width="12%"><?php echo $row[4]; ?></td>
										   <td width="12%"><?php echo $row[7]; ?></td>
										   <td width="13%"><?php echo $row[9]; ?></td>
										   <td width='5%'> <button type="button" class="btnview btn-success" id="<?php echo "$row[0]"; ?>" data-toggle="modal" data-target="#MyModal"> <i class="fa fa-eye"></i> </button> </td>
										   <td width='5%'> <button type="button" class="btncom btn-warning" onclick="window.location.href='add_complaint.php?pid=<?php echo $row[0] ?>'" id="<?php echo "$row[0]"; ?>" > <i class="mdi mdi-clipboard-text"></i> </button> </td>
										</tr>
											<?php
											} ?>
						            </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
					
														
									<div id="div1"><b>Here Comes the Information</b><div>

					</form>
	
        <!-- END wrapper -->
		
		<div class="modal fade" id="MyModal" aria-labelledby="myModalLabel" data-animation="bounceIn">
			<div class="modal-dialog">
				<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal">&times;</button> 
						<div class="text-primary" id="res" name="res">
						</div>
				</div>
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
		 <script src="assets\js\patientdispjs.js"></script>
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

        <!-- init -->
        <script src="assets\pages\jquery.datatables.init.js"></script>
        <script type="text/javascript" src="assets\pages\jquery.form-advanced.init.js"></script>

        <!-- App js -->
		
		<script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

     
    </body>
</html>