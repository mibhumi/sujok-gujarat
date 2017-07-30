<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
<title> center-regestration</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- App title -->
        <title>SUJOK </title>

       		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css"> 

        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		<link rel="stylesheet" href="assets\css\chinnu.css">
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets\js\modernizr.min.js"></script>
	
		

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
									
									<li><a href="patientdisp.php">Add Product</a></li>
									<li><a href="stock.php">View Current Stock</a></li>
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


                         <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Centre Regestration</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Sujok</a>
                                        </li>
										<li class="active">
                                         Centre
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

                                            
                                            <p class="text-muted font-13 m-b-10">
                                                
                                            </p>

                                            <div class="p-20">
                                               <form  method="post" id="centre_form" novalidate="novalidate">

<!-- Text input-->

<div class="form-group">
  <label >Centre Name:</label>  
  
  <input name="centre_name" placeholder="Centre's Name" id="c1" class="form-control" type="text" >
  </div>
  


<!-- Text input-->

<div class="form-group ">
  <label >Address:</label> 
   
  <textarea name="address" class="form-control" data-bv-field="address"> </textarea>
	
</div>

  
<!-- Text input-->

<div class="form-group">
  <label >City:</label>  
  
  <input name="city" placeholder="Enter City" class="form-control" type="text" data-bv-field="city">
   
</div>

<!-- Text input-->

<div class="form-group">
  <label >State:</label> 
    
 
  <input name="state" placeholder="Enter State" class="form-control" type="text" data-bv-field="state">
    
</div>

<!-- Text input-->

<div class="form-group">
  <label >Pincode:</label> 
   

  <input name="pincode" placeholder="Enter Pincode" class="form-control" type="number" data-bv-field="pincode">
</div>

<!-- Text input-->
       
<div class="form-group">
  <label >Contact No.</label>  
    
  <input name="contact_no" placeholder="(+91)" class="form-control" type="number" data-bv-field="contact_no">
    
</div>

<div class="form-group">
  <label >Centre Code:</label> 
    
  <input name="code" placeholder="Centre Code" class="form-control" type="text" data-bv-field="centre_code">
</div>

<div class="form-group">
  <label >Remarks:</label> 
    
  
  <textarea name="remark" class="form-control" data-bv-field="remark"> </textarea>
</div>


<!-- Select Basic -->

<!-- Success message 
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>-->

<!-- Button -->
<div class="form-group">
  <button type="submit" name="submit" id="add" class="btn btn-success" >Submit </button>
  <a href="centreedit.php" class="btn text-dark " >Cancle</a>
  </div>
</div>
</form>
												
                                            </div>

                                        </div>

                                    
                                    </div>
									</div>
									</div>
									</div>
                                    <!-- end row -->
<footer class="footer text-right">
					<span class="col-md-8" ></span>	
                    <div class="text-right col-md-4">Design By :<a href="http//www.easternts.com" target="_blank"> Eastern Techno Solution</a></span>
                </footer>
                         
        <!-- END wrapper -->

		
		
	

  
      <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
		<script src="assets\js\detect.js"></script>
        <script src="assets\js\centrebootstrap.js"></script>
		<script src="assets\js\centremain.js"></script>
		<script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <!--<script src="assets\js\waves.js"></script>-->
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>


		
		
        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
	
    </body>
</html>
<?php
													if(isset($_POST['submit']))
													{
																$connect=mysqli_connect("localhost","root","","sujok");
																$name=$_POST['centre_name'];
																$add=$_POST['address'];
																$city=$_POST['city'];
																$st=$_POST['state'];
																$pinc=$_POST['pincode'];
																$cont=$_POST['contact_no'];
																$c_code=$_POST['code'];
																$remarks=$_POST['remark'];
																$str="insert into centre values('','$name','$add','$city','$st','$pinc','$cont','$c_code','$remarks')";
																$res=mysqli_query($connect,$str);
																if(!$res)
																{
																	echo "Could not insert";
																}
																else
																{
																	echo "Successfully Inserted";
																	header("location:centreedit.php");
																}
													}
													?>