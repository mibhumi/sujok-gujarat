<!-- insert record using php -->
<?php
session_start();
include("connection.php");

require 'email/PHPMailer/PHPMailerAutoload.php';
	
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
 $cid=$_SESSION['Centre_Id'];
 
 if(isset($_REQUEST['add']))
 {
		 $connect=mysqli_connect("localhost","root","","sujok");
		 $sql="select * from centre where Centre_Id=$cid";
		 $result1=mysqli_query($connect,$sql);
		 if($row1=mysqli_fetch_array($result1))
		 {  												
			$_SESSION['Centre_Code']= $row1[7];																												
	     }
		
		 $Centre_Code=$_SESSION['Centre_Code'];
		 $Person_Name=$_REQUEST['Person_Name'];
		 //$Patient_Photo=$_FILES['Patient_Photo']['name'];
		 //$tmp=$_FILES['Patient_Photo']['tmp_name'];
		 //$path="img_pat/$Patient_Photo";
		 $var1 = $_REQUEST['Enquiry_Date'];
		 $Enquiry_Date= date("Y-m-d", strtotime($var1) );
		 
		 $Address=$_REQUEST['Address'];
		 $City=$_REQUEST['City'];
		 $State=$_REQUEST['State'];
		 $Pincode=$_REQUEST['Pincode'];
		 $Mobile=$_REQUEST['Mobile'];
		 $Phone=$_REQUEST['Phone'];
		 $Email=$_REQUEST['Email'];
		 $Gender=$_REQUEST['radioInline'];
		  $var2 =$_REQUEST['DOB'];
		 $DOB= date("Y-m-d", strtotime($var2) );
		$Occupation=$_REQUEST['Occupation'];
		 $Remark=$_REQUEST['Remark'];
		 
					$str="insert into enquiry(Centre_Code,Person_Name,Enquiry_Date,Address,City,State,Pincode,Mobile,Phone,Email,Gender,DOB,Occupation,Remark) values('$Centre_Code','$Person_Name','$Enquiry_Date','$Address','$City','$State','$Pincode','$Mobile','$Phone','$Email','$Gender','$DOB','$Occupation','$Remark')";
					//move_uploaded_file($tmp,$path);
					$result=mysqli_query($connect,$str);
					header('location:enqdisp.php');
				

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'bhumipatel1196@gmail.com';          // SMTP username
$mail->Password = 'rajbhumi9924'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('bhumipatel1196@gmail.com', 'Bhumi Patel');
$mail->addReplyTo('bhumipatel1196@gmail.com', 'Bhumi Patel');
$mail->addAddress($Email);   // Add a recipient

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Your enquiry is successfully registered</h1>';
$bodyContent .= '<p>Thank you by sujok </p>';

$mail->Subject = 'Email from Localhost by bhumi';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

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
                                    <h4 class="page-title">Enquiry</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Sujok</a>
                                        </li>
										<li class="active">
                                       Enquiry
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
  <form id="contact_form" method="post">
                                  
													<div class="form-group">
                                                        <label >Person Name<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Person's Name" class="form-control" id="Person_Name" name="Person_Name">
                                                    </div>
													
													 <div class="form-group">
                                                        <label >Enquiry date<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control datepicker-autoclose" id="datepicker-autoclose" name="Enquiry_Date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Address" class="form-control" id="Address" name="Address">
                                                    </div>
													<div class="form-group">
                                                        <label >City<span class="text-danger">*</span></label>
                                                    	<input type="text" required value="Surat" class="form-control" id="City" name="City">
                                                    </div>
													<div class="form-group">
                                                        <label >State<span class="text-danger">*</span></label>
                                                        <input type="text" required value="gujarat" class="form-control" id="State" name="State">
                                                    </div>
													<div class="form-group">
                                                        <label >Pincode<span class="text-danger">*</span></label>
                                                        <input type="number" required placeholder="Enter Pincode" class="form-control" id="Pincode" name="Pincode">
                                                    </div>
													<div class="form-group">
                                                        <label >Mobile number<span class="text-danger">*</span></label>
                                                        <input type="number" required placeholder="Enter Mobile number" class="form-control" id="Mobile" name="Mobile">
                                                    </div>
													<div class="form-group">
                                                        <label >Phone number<span class="text-danger">*</span></label>
                                                        <input type="number" required placeholder="Enter Phone number" class="form-control" id="Phone" name="Phone">
                                                    </div>
													<div class="form-group">
                                                        <label >Email Address<span class="text-danger">*</span></label>
                                                        <input type="email" required placeholder="Enter Email address" class="form-control" id="Email" name="Email">
                                                    </div>
													<div class="form-group">
                                                        <label >Gender<span class="text-danger">*</span></label>
														<br>
                                                        
													<div class="radio radio-info radio-inline">
														<input type="radio" id="inlineRadio1" value="1" name="radioInline" checked>
														<label for="inlineRadio1"> Female </label>
													</div>
													<div class="radio radio-info radio-inline">
														<input type="radio" id="inlineRadio2" value="0" name="radioInline">
														<label for="inlineRadio2"> Male </label>
													</div>
													
													</div>
													<div class="form-group">
                                                        <label >Date of Birth<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="datepicker-autoclose1" name="DOB">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >Occupation<span class="text-danger">*</span></label>
                                                        <input type="Occupation" required  class="form-control" id="Occupation" name="Occupation">
                                                    </div>
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control"  name="Remark" ></textarea>
                                                    </div><br><br> 													
													<input type="submit" name="add" id="add" value="Submit" class="btn1 btn btn-success ">
                                                        <button type="button" class="btn btn-default waves-effect m-l-5" onclick="window.location.href='enqdisp.php'">
                                                            Cancel
                                                        </button>
												</form>
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
			Centre_Code: {
                validators: {
                        stringLength: {
                        min: 1,
						},
                        notEmpty: {
                        message: 'Please enter centre code'
						}
                }
              },
            Patient_Name: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter patient name'
						}
                }
              },
			  Patient_Photo: {
                validators: {
						file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/JPEG,image/png,image/JPG,image/jpg',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
						},
                        notEmpty: {
                        message: 'Please select image'
						}
                }
              },
			  Address: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter address'
						}
                }
              },
			  Mobile: {
                validators: {
                        stringLength: {
                        min: 10,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              },
			  Phone: {
                validators: {
                        stringLength: {
                        min: 6,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter phone number'
						}
                }
              },
			
			  Email: {
                validators: {
                        notEmpty: {
                        message: 'Please enter email'
						}
                }
              },
			  Gender: {
                validators: {
                        notEmpty: {
                        message: 'Please select gender'
						}
                }
              },
			  Occupation: {
                validators: {
                        stringLength: {
                        min: 2,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter occupation'
						}
                }
              },
			  Pincode: {
                validators: {
                        stringLength: {
                        min: 6,
						max:6,
						},
                        notEmpty: {
                        message: 'Please enter pincode'
						}
                }
              },
			  State: {
                validators: {
                        stringLength: {
                        min: 3,
						max:15,
						},
                        notEmpty: {
                        message: 'Please enter state'
						}
                }
              },
			  City: {
                validators: {
                        stringLength: {
                        min: 2,
						max:15,
						},
                        notEmpty: {
                        message: 'Please select city'
						}
                }
              },
			  DOB: {
                validators: {
                        notEmpty: {
                        message: 'Please select date'
						}
                }
              }
            }
        })
		
        
});
</script>

			<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="bootstrapvalidator.min.js"></script>-->
	</body>	
</html>