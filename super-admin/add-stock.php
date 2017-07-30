	<!-- insert record using php -->
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



<!DOCTYPE html>
<html>
    <head>
<title>Manage Product Stock</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\logo.png">
			<!-- App title -->
        <title>Sujok Admin Dashboard</title>

        <!-- App css -->
        		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css"> 
				
				<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		
		<link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet">
        <link href="../plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css">
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

		
		
		

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


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h1 class="page-title">Manage stock</h1>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">SUJOK</a>
                                        </li>
                                       
                                        <li class="active">
                                           manage stock
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


                                            <div class="p-20">
                                                <form id="contact_form" method="post" enctype="multipart/form-data">
                                  
													<div class="form-group">
                                                        <label >Centre<span class="text-danger">*</span></label>
                                                        <select class="form-control" id="centreid" name="centreid">
																	<option ></option>										
											<?php 
											
											echo $stringpat1="select * from centre ";
											
											$outputpat1=mysqli_query($conn,$stringpat1);
											
											while($recordpat=mysqli_fetch_array($outputpat1))
											{
												
												echo "<option value='$recordpat[0]'>" .$recordpat[1]. "</option>";
											}
										?>
														</select>
                                                    </div>
													
													
													
													<br>
													<label >Product </label >
													<select name="prid1" id="prid1" class=" form-control" data-style="btn-brown" >
													<option></option>
											<?php 
											
											$string="select * from Product";
											$output=mysqli_query($conn,$string);
											while($record=mysqli_fetch_array($output))
											{
												
												echo "<option value='$record[0]'>" .$record[1]. "</option>";
											}
										?>
                                    </select>
													<div class="form-group">
                                                        
														<div class="form-group" id="se"> </div>
                                                       <br>
												<label >Quantity<span class="text-danger"></span></label>
												<input type="number" required placeholder="Enter quantity"  class="form-control" id="qty" name="qty"  >
											

                                                    </div>
												<div class="form-group">
												<label >Remark </label >
												<input type="text" name="remarks" placeholder="Enter remark" class="form-control">
												
												</div>
													<div class="form-group">
                                                        												
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <a href="stock.php" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </a>
														<span class="text-danger">
	</span>
												</form>

                                            </div>

                                        </div>
										</div>
										
										<div class="form-group col-md-3">
                                                     <h2>  <label >Stock :</label>
                                                       <big><b><span class="text-success"  id="Patient_Name"  > 0 </span></b></big></h2>
														<div id="img"></div>
													</div>
</div>
</div>
</div>
</div>
<footer class="footer text-right">
					<span class="col-md-8" ></span>	
                    <div class="text-right col-md-4">Design By :<a href="http//www.easternts.com" target="_blank"> Eastern Techno Solution</a></span>
                </footer>

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
		
		<script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="../plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
       <!-- <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>-->
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Flot chart js
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>   -->

        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init 
        <script src="assets\pages\jquery.dashboard_2.js"></script> -->

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        
 <script>
            var resizefunc = [];
        </script>

        

        <!-- Examples
	    <script src="../plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	    <script src="../plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
	    <script src="../plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="../plugins/tiny-editable/mindmup-editabletable.js"></script>
	    <script src="../plugins/tiny-editable/numeric-input-example.js"></script>

     

        <script src="assets\pages\jquery.datatables.editable.init.js"></script>-->

		
			
		

<script src="../plugins/moment/moment.js"></script>
     	<script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		
		<script>
		$('#centreid').change(function (){
				
						var cenid = $('#centreid').val();
						var pid= $('#prid1').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getstock.php",
					method:"POST",
					data:{e:cenid,f:pid},
					success:function(data)
			        {
					$("#Patient_Name").html(data);
					},
					 });
					});
				
		</script>
		<script>
			$('#prid1').change(function (){
				var cenid = $('#centreid').val();
						var pid = $('#prid1').val();
				//	alert(cenid);
					 $.ajax({
				  url:"getstock.php",
					method:"POST",
					data:{e:cenid,f:pid},
					success:function(data)
			        {
					$("#Patient_Name").html(data);
					},
					 });
					});
		</script>
		<script>
			$('#prid1').change(function (){
				var pid= $('#prid1').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getimg.php",
					method:"POST",
					data:{ii:pid},
					success:function(data)
			        {
					$("#img").html(data);
					},
					 });
					});
		</script>
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>


    </body>
</html>

		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script>  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			centreid: {
                validators: {
                        stringLength: {
                        min: 1,
						},
                        notEmpty: {
                        message: 'Please select centre'
						}
                }
              },
			  qty: {
                validators: {
                        notEmpty: {
                        message: 'Please enter quantity'
						}
                }
              },
			  prid1: {
                validators: {
                        notEmpty: {
                        message: 'Please select Product'
						}
                }
              }
			  
            }
        })
		
        
});
</script>
<?php													 
 if(isset($_REQUEST['add']))
 {			$d= date("Y-m-d");
		
		 
			$centreid=$_REQUEST['centreid'];
			$prid=$_REQUEST['prid1'];
			$qty=$_REQUEST['qty'];
			$remarks=$_REQUEST['remarks'];
			
			
		/*$sqlqry="INSERT INTO package_account(Package_Account_Id, Patient_Id, Package_Id, seating, Charge, Remark) VALUES ('','$Patient_Id','$pack','$seating','$charge','$remark')";
			 $resultqry=mysqli_query($connect,$sqlqry);
		
										if($resultqry)
										{*/
			
			
			
			
		
									 $sql="select Total_Stock from inventory where Centre_Id='".$centreid."' and Product_Id='".$prid."'";
									 
									 
									 $result1=mysqli_query($conn,$sql);
									
									$row1=mysqli_fetch_array($result1);
									if(!$row1)
									{
										$procedure="INSERT INTO inventory (Product_Id, Centre_Id, Total_Stock, Stock_As_Dated, Remark) VALUES ('$prid','$centreid','$qty','$d','$remarks' )";
										$result2=mysqli_query($conn,$procedure);

										if($result2)
										{
											echo "<span class=text-success> stock added sucessfully!</span>";
												//header('location:seating.php');
										}else{
											echo "fail!";
										}
										
										
									}else{
											   $getval="select Total_Stock from inventory where Centre_Id='".$centreid."' and Product_Id='".$prid."'";
												$result3=mysqli_query($conn,$getval);
												$oldset=mysqli_fetch_array($result3);
												
												
										 $newstock = $qty + $oldset[0];
										
										$procedure="UPDATE inventory SET Total_Stock='$newstock',Remark='$remarks' WHERE Product_Id='".$prid."' and Centre_Id='".$centreid."'";
										$result2=mysqli_query($conn,$procedure);

										if($result2)
										{
											echo "<span class=text-success>stock updated!</span>";
											//header('location:seating.php');
										}else{
											echo "fail!";
										}
										
										
										
									}	
									
									/*}else{
									
									echo "*fail to add package";
									}*/
 }
 
 
 ?>




