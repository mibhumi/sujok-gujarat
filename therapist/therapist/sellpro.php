<?php 
ob_start();
session_start();
include("connection.php");
	
	if(isset($_SESSION['uid']))
	{
		 $cid=$_SESSION['Centre_Id'];
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\su-logo.png">
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
                                        Product
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
                                    <h4 class="m-t-0 header-title">
							   
                                    </h4>
                                    <p class="text-muted font-13 m-b-30">                                       
                                    </p>
									<div class="form-group">
                                                        <label >Centre :<span class="text-danger"></span></label>
                                                        									
											<?php 
											include("connection.php");
											
											 $stringpat1="select * from centre where Centre_Id='$row[5]' ";
											
											$outputpat1=mysqli_query($conn,$stringpat1);
											
											while($recordpat=mysqli_fetch_array($outputpat1))
											{
												
												echo "<big>$recordpat[1]</big>";
											}
										?>
														
                                                    </div>
													<div class="col-md-8">
								  <form id="contact_form" Method="post" enctype="multipart/form-data">
									
									
												<div class="form-group">
												<label >Buyer Name </label >
												<input type="text" name="bname" class="form-control">
												</div>
												<div class="form-group">
												<label >Product </label >
												<select id="proname" name="proname" class="form-control">
												<option></option>
												<?php 
					$strproname="select * from product where Product_Id in(select Product_Id from inventory where Centre_Id='$row[5]') ";
												$otptproname=mysqli_query($conn,$strproname);
												while($recordpro=mysqli_fetch_array($otptproname))
											{
												
												echo "<option value=$recordpro[0]>$recordpro[1]</option>";
											}
												
												?>
												</select>
														</div>
														<div class="form-group">
												<label >Contact </label >
												<input type="number" name="contact" class="form-control">
												</div>
												<div class="form-group">
												<label >Address</label >
												<input type="text" name="address" class="form-control">
												</div>
														<div class="form-group" id="pric">
												<label >Price </label >
												<input type="number" name="pri" id="pri" class="form-control">
												</div>
												<div class="form-group" >
												<label >Qty </label >
												<input type="number" name="qty" id="qty" class="form-control">
												</div>
												<div class="form-group" id="tot">
												<label >Total Price </label >
												<input type="number" name="tot" class="form-control">
												</div>
												<div class="form-group" >
												<label >Paid Amount </label >
												<input type="number" name="paid" class="form-control">
												</div>
												<div class="form-group" >
												<label >Payment type </label >
												<select id="ptype" name="ptype" class="form-control" >
												<option value="0"> Cash </option>
												<option value="1"> Cheque </option>
												</select>
												</div>
												<div id="bankdit" >
												<div class="form-group" id="tot">
												<label >Cheque number </label >
												<input type="number" name="chk" value="00" class="form-control" >
												</div>
												<div class="form-group" id="tot">
												<label >Bank </label >
												<input type="text" name="bank" value="null" class="form-control">
												</div>
												</div>
												<div class="form-group" >
												<button type="submit" id="submit" name="submit" class="btn-success btn "> submit</button>
												<span class="text-danger">
												<?php
												if(isset($_POST['submit']))
												{
													 $centreid=$row[5];
												     $bname=$_REQUEST['bname'];
													 $proid=$_REQUEST['proname'];
													 $contact=$_REQUEST['contact'];
													 $address=$_REQUEST['address'];
													 $pri=$_REQUEST['pri'];
													 $qty=$_REQUEST['qty'];
													 $tot=$_REQUEST['tot'];
													 $paid=$_REQUEST['paid'];
													 $ptype=$_REQUEST['ptype'];
													 $chk=$_REQUEST['chk'];
													 $bank=$_REQUEST['bank'];
													 $d=Date("Y-m-d");
													 $remark= $tot - $paid;
													 
													 $sql4="select  * from product where Product_Id='$proid'";
													 $res4=mysqli_query($conn,$sql4);
													 while($row5=mysqli_fetch_array($res4))
													 {
														 $fd=$row5[1];
													 }
													 echo $_SESSION['$pname']=$fd;
													 $_SESSION['bname']=$bname;
													 echo $_SESSION['$pri']=$pri;
													 $_SESSION['qty']=$qty;
													 $_SESSION['tot']=$tot;
													 $_SESSION['paid']=$paid;
													

			$sqlstk="select  * from inventory where Product_Id='".$proid."' and Centre_Id=$centreid";

										$resstk=mysqli_query($conn,$sqlstk);

										$rowstk=mysqli_fetch_array($resstk);
										if($rowstk)
										{
											$stksid=$rowstk[0];
											$totstk=$rowstk[3];
												 if($rowstk[3]<$qty)
												 {
													 echo "not enough stock";
												 }else{
													 
													 
													  $ipa="INSERT INTO product_account(Centre_Id, Product_Id, Buyer_Name, Buyer_Contact, Buyer_Address, Selling_Date, Quantity, Total_Amount, Paid_Amount, Payment_Type, Cheque_Number, Bank_Name, Remark) VALUES('$cid','$proid','$bname','$contact','$address','$d','$qty','$tot','$paid','$ptype','$chk','$bank','$remark')";
													
													$otptpa=mysqli_query($conn,$ipa);
													if(!$otptpa)
													{
														echo "fail to insert";
													}
													else{
															
																	echo "<span class=' text-success' >sucessfully inserted</span>";
																	$newstk = $totstk - $qty;
																	$updstk="UPDATE inventory SET Total_Stock='$newstk'  WHERE Stock_Id='$stksid'";

																	$resupd=mysqli_query($conn,$updstk);

																	
																	
																	if($resupd)
																	{
																	 echo "<span class=' text-success' >Stock updated.</span>";
																	 //header('location:invoice.php');
																	}
																	 
															
													
														}	
													
														
													 
												 }
										}else
										{
											echo "fail to retrive stock try again ..";
										}
													
													
													
													
													
													
												}
												
												
												?></span>
												</div>
												
														
									
									</form>
									</div>
									<div class="form-group col-md-3">
                                                     <h2>  <label >Stock :</label>
                                                       <big><b><span class="text-success"  id="stk"  > 0 </span></b></big>
													   <br>
													   <span id="nes" class="text-danger"></span>
													   </h2>
                                                    </div>
	
	
	
	
	
                                </div>
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
	<!--	<script src="assets\js\viewtreat_main.js"></script>-->
        <script src="assets\js\detect.js"></script>
	<!--	<script src="assets\js\centreedit_main.js"></script>-->
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

        <!--init -->
        <script src="assets\pages\jquery.datatables.init.js"></script>
		
		<!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>
		<script src="js\centrestock.js"></script>
<script>

$(document).ready(function(){
    
        $("#bankdit").hide();
    });
	$('#ptype').change(function (){
				
						var payid = $('#ptype').val();
						if(payid==1)
						{
							 $("#bankdit").show();
						}else{
							  $("#bankdit").hide();
						}
				
					});
   

			$('#proname').change(function (){
				
						var cenid = $('#proname').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getstk.php",
					method:"POST",
					data:{q:cenid},
					success:function(data)
			        {
					$("#stk").html(data);
					},
					 });
					});
						$('#proname').change(function (){
				
						var cenid = $('#proname').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getprice.php",
					method:"POST",
					data:{q:cenid},
					success:function(data)
			        {
					$("#pric").html(data);
					},
					 });
					});
					
					$('#qty').blur(function (){
				
						var cenid = $('#qty').val();
						var pt = $('#pri').val();	
				//	alert(cenid);
					 $.ajax({
				   url:"gettot.php",
					method:"POST",
					data:{e:cenid,f:pt},
					success:function(data)
			        {
					$("#tot").html(data);
					},
					 });
					});
					$('#qty').blur(function (){
				
						var q = $('#qty').val();
						var cenid = $('#proname').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getnes.php",
					method:"POST",
					data:{e:cenid,f:q},
					success:function(data)
			        {
					$("#nes").html(data);
					},
					 });
					});
		</script>

			<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="bootstrapvalidator.min.js"></script>-->
	</body>	
</html>