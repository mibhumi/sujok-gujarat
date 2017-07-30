<?php
ob_start();
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?>


 <?php 
if(isset($_SESSION['updateid']))
{
	
 $updateid=$_SESSION['updateid'];
 
 $connect=mysqli_connect("localhost","root","","sujok");
 
 
	 $procedure="SELECT * FROM product where Product_Id=$updateid";
	 $result=mysqli_query($connect,$procedure);
	 
	 $row=mysqli_fetch_array($result);
	 
	 ?>



<!DOCTYPE html>
<html>
    <head>
<title>Edit Product</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\logo.png">
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
                                    <li></li>
                                   
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
                                    
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">SUJOK</a>
                                        </li>
                                       
                                        <li class="active">
                                           Edit Product
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

                                            <h4 class="header-title m-t-0">Edit Product</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                
                                            </p>

                                            <div class="p-20">
											<form id="frm2" method="post" enctype="multipart/form-data">
           
                <!-- Start content -->
                   	<!--kaam ka-->
										
                                        
                                            <div class="text-center bhumi">
                                                
                                                   <img id="profile" src="upload/<?php echo $row[4]; ?>" style="height:250px;width:275px;" class="img-circle img-thumbnail" alt="profile pic">
												        <input type="file" class="filestyle" data-buttonname="btn-primary" id="imgupload" name="fileup">
                                                       
														<i class="mdi mdi-star-circle member-star text-	success" title="verified user"></i>
                                                    <div class="">
                                                        <h4 class="m-b-5"></h4>
                                                    </div>
													<div> <button type="submit" id="upic" name="upic" class="btn btn-success btn-md btn-round"> <i class="glyphicon glyphicon-open"></i></button></div>
													<div id="message" class="text-danger"></div>
													</form>
													
													
													</div>
													<?php
															include("connection.php");
															if(isset($_REQUEST['upic']))
															{
																
															$therapist_pic=$_FILES['fileup']['name'];
															if($therapist_pic=="")
															{
																$therapist_pic=$row[2];
															}else{
															$tmp=$_FILES['fileup']['tmp_name'];
															$path="upload/$therapist_pic";
															}
															$string="update product set Product_Image='$therapist_pic' where Product_Id='$updateid'";
															move_uploaded_file($tmp,$path);
															$output=mysqli_query($conn,$string);
															if(!$output)
															{
																echo mysqli_error("Could not Update");
															}	
															else
															{
																header('location:updatepro.php');
															}
															}
														?>
                                                <form id="contact_form" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label >Product Name<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Product Name" class="form-control" id="Product_Name" name="Product_Name" value="<?php echo $row[1]; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Product Price<span class="text-danger">*</span></label>
                                                        <div>
                                                            <input type="number" class="form-control" required  placeholder="Enter Product price in Rs." id="Product_Price" name="Product_Price"value="<?php echo $row[2]; ?>">
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
											
                                                       <!-- <label>Product photo</label>
                                                       
														
															 <input type="file"  class="form-control" id="photo" name="photo"  >
															<span id="error" name="error" value="<?php //echo $row[4]; ?>"></span>
														-->
														
														
                                                    </div>                                       
													<div class="form-group">
                                                        <label>Description<span class="text-danger"></span></label>
                                                        <textarea  class="form-control" name="Description" id="Description" placeholder="Enter description" required><?php echo $row[3]; ?></textarea>
                                                    </div> 
														<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control"  name="Remark" ><?php echo $row[5]; ?></textarea>
                                                    </div> 													
													<input type="submit" name="add" id="add" value="Submit" class="btn1 btn btn-success ">
                                                         
                                                        
														
															<?php
					
																 if(isset($_REQUEST['add']))
																 {
																		 $connect=mysqli_connect("localhost","root","","sujok");
																			
																			$Product_Name=$_REQUEST['Product_Name'];
																		 $Product_Price=$_REQUEST['Product_Price'];
																		 $Description=$_REQUEST['Description'];
																		 $Product_Image=$_FILES['photo']['name'];
																		 $tmp=$_FILES['photo']['tmp_name'];
																		 $path="upload/$Product_Image";
																		 $Remark=$_REQUEST['Remark'];
																		 
$str="update product set Product_Name='$Product_Name',Product_Price='$Product_Price',Description='$Description',Remark='$Remark' where Product_Id='$updateid'";
																					move_uploaded_file($tmp,$path);
																					$result1=mysqli_query($connect,$str);
																					
																					if($result1)
																					{
																					echo "work";
																					header('location:productedit.php');
																					}
																					else
																					{echo "fail";
																					}
																 }
																 }
																?>

														
                                                       <a href="productedit.php" class="btn">Cancel</a> 
                                                    

                                                 
                                                  													
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
       <!-- <script src="assets\js\waves.js"></script> -->
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>
      <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        
        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        
 
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
            Product_Name: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Product Name'
						}
                }
              },
			  Product_Price: {
                validators: {
                        stringLength: {
                        min: 2,
						max:3,
						},
                        notEmpty: {
                        message: 'Please enter Product price'
						}
                }
              },
			  Description: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Description'
						}
                }
              },
			  photo: {
                validators: {
						file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png,image/jpg',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
						},
                        
                }
              }
            }
        })
		
        
});
</script>



    </body>
</html>

