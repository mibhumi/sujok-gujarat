<!DOCTYPE html>
<html>

<head>
<script src="//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js"></script>
<script src="//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js"></script>
<script src="//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js"></script>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
<link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
<link rel="canonical" href="https://codepen.io/juff03/pen/OXaXRG">
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


<link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"><link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"><link rel="stylesheet prefetch" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
<!--<style class="cp-pen-styles">#success_message{ display: none;}</style>-->	



        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- App title -->
        <title>SUJOK - Responsive Admin Dashboard Template</title>

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
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

        </script>
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
		

        <script src="assets\js\modernizr.min.js"></script>
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

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
                    <a href="index.htm" class="logo"><span>SUJOK</span><i class="mdi mdi-cube"></i></a>
                    
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
                            <li class="hidden-xs">
                                <a href="#" class="menu-item waves-effect waves-light">New</a>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a data-toggle="dropdown" class="dropdown-toggle menu-item waves-effect waves-light" href="#" aria-expanded="false">English
                                    <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-primary">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifications</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Signup</span>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                                <i class="mdi mdi-comment"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Message received</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-warning">
                                                <i class="mdi mdi-settings"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Settings</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Notification</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-email"></i>
                                    <span class="badge up bg-danger">8</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Messages</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets\images\users\avatar-2.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Patricia Beach</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets\images\users\avatar-3.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Connie Lucas</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets\images\users\avatar-4.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Margaret Becker</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Messages</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets\images\users\avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, John</h5>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                                <img src="assets\images\users\avatar-2.jpg" alt="Welcome" class="thumb-lg img-circle">
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
									<li><a href="centre-regestration.php">New Centre</a></li>
									<li><a href="patientdisp.php">Edit Centre</a></li>
									<li><a href="patientdisp.php">Delete Centre</a></li>
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
                                 <a href="patientdisp.php"  class="waves-effect"><i class="fa fa-user-plus"></i><span> PATIENTS </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cart-plus"></i><span> PRODUCTS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
									<li><a href="new-product.php">Add Product</a></li>
									<li><a href="patientdisp.php">Edit Product</a></li>
									<li><a href="patientdisp.php">Delete Product</a></li>
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
                                    
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">SUJOK</a>
                                        </li>
                                        <li>
                                            <a href="#">Forms </a>
                                        </li>
                                        <li class="active">
                                            Form Validation
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


						
<div class="container">
    <form class="well form-horizontal bv-form" action=" " method="post" id="contact_form" novalidate="novalidate">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>						
						<div class="form-group has-feedback">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="first_name" placeholder="First Name" class="form-control" type="text" data-bv-field="first_name"><i class="form-control-feedback" data-bv-icon-for="first_name" style="display: none;"></i>
    </div>
</div>
</div>

<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control" type="text" data-bv-field="last_name"><i class="form-control-feedback" data-bv-icon-for="last_name" style="display: none;"></i>
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Department / Office</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="department" class="form-control selectpicker">
      <option value="">Select your Department/Office</option>
      <option>Department of Engineering</option>
      <option>Department of Agriculture</option>
      <option>Accounting Office</option>
      <option>Tresurer's Office</option>
      <option>MPDC</option>
      <option>MCTC</option>
      <option>MCR</option>
      <option>Mayor's Office</option>
      <option>Tourism Office</option>
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_name" placeholder="Username" class="form-control" type="text" data-bv-field="user_name"><i class="form-control-feedback" data-bv-icon-for="user_name" style="display: none;"></i>
    </div>
  </div>
</div><br>

<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control" type="password" data-bv-field="user_password"><i class="form-control-feedback" data-bv-icon-for="user_password" style="display: none;"></i>
    </div>
  </div>
</div><br>

<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control" type="password" data-bv-field="confirm_password"><i class="form-control-feedback" data-bv-icon-for="confirm_password" style="display: none;"></i>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group has-feedback">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control" type="text" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(639)" class="form-control" type="text" data-bv-field="contact_no"><i class="form-control-feedback" data-bv-icon-for="contact_no" style="display: none;"></i>
    </div>
  <small data-bv-validator="stringLength" data-bv-validator-for="contact_no" class="help-block" style="display: none;">This value is not valid</small></div>
</div>

<!-- Select Basic -->

<!-- Success message 
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  </div>
</div>

</fieldset>
<input type="hidden" value=""></form>
</div>

						
						
						
                        
                                       <!-- <div class="col-sm-12 col-xs-12 col-md-9 chi-bor">
                                            <h4 class="header-title m-t-0"></h4>
                                            <p class="text-muted font-13 m-b-10">
                                                
                                            </p>

                                            <div class="p-20">
											
                                                    </div>
													
                                           <!--     <form role="form" data-parsley-validate="" novalidate="">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 form-control-label">Email<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input type="email" required parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass1" class="col-sm-4 form-control-label">Password<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input id="hori-pass1" type="password" placeholder="Password" required class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass2" class="col-sm-4 form-control-label">Confirm Password
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input data-parsley-equalto="#hori-pass1" type="password" required placeholder="Password" class="form-control" id="hori-pass2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="webSite" class="col-sm-4 form-control-label">Web Site<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input type="url" required parsley-type="url" class="form-control" id="webSite" placeholder="URL">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                            <div class="checkbox">
                                                                <input id="remember-2" type="checkbox">
                                                                <label for="remember-2"> Remember me </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Register
                                                            </button>
                                                            <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>-->

                                        <!--</div> -->
                                    </div>
                                    <!-- end row -->

                         
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

        <script type="text/javascript" src="../plugins/parsleyjs/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
            $(function () {
                $('#demo-form').parsley().on('field:validated', function () {
                    var ok = $('.parsley-error').length === 0;
                    $('.alert-info').toggleClass('hidden', !ok);
                    $('.alert-warning').toggleClass('hidden', ok);
                })
                .on('form:submit', function () {
                    return false; // Don't submit form for this demo
                });
            });
		</script>

		<script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script>  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
			 user_name: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    }
                }
            },
			 user_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
			confirm_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                  stringLength: {
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            },
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
//# sourceURL=pen.js
</script>

		
		
    </body>
</html>