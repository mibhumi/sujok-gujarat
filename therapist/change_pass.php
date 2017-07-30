<?php
include("connection.php");
$name=	$_REQUEST['uemail'];
$strb="select * from therapist ";
$result=mysqli_query($conn,$strb);

while($row=mysqli_fetch_array($result))
{	if($name==md5($row[3]))
	{
		$ema=$row[3];
	$xyz=$row[1];
	}
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
        <link rel="shortcut icon" href="assets\images\su-logo.png">
        <!-- App title -->
        <title>Change Your Password Here</title>

        <!-- date range picker -->
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- App css -->
        <!--<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">-->
				<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
			.right-inner-addon {
    position: relative;
}
.right-inner-addon input {
    padding-right: 30px;    
}
.right-inner-addon i {
    position: absolute;
    right: 0px;
    padding: 10px 12px;
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


            </div>
            <!-- Top Bar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
							<div class="row card-box">		
							<div class="col-md-4"> 
							</div>
								<div class="col-md-1 ">
								</div>
														<div class="col-md-6">
													<form id="frm1" method="post">
													<div > <header><h2><?php echo $xyz; ?></h2></header></div>
                                                    <hr>
                                                    <div class="text-left">
														
														<div class="form-group">
															<label>New Password<span class="text-danger">*</span></label>
															<div class="right-inner-addon">
															<i class="fa fa-eye" id="eyenpswd"></i><input type="password" required placeholder="New Password" class="form-control" id="npassword" name="npassword" />
															</div>
														</div>
														<div class="form-group">
															<label>Confirm Password<span class="text-danger">*</span></label>
															<div class="right-inner-addon">
															<i class="fa fa-eye" id="eyecpswd"></i><input type="password" required placeholder="Confirm Password" class="form-control" id="cpassword" name="cpassword" />
															</div>
														</div>
														<button type="submit" id="save" style="margin-top: 28px; margin-left: 8px;" name="save" class="btn btn-info waves-effect waves-light">Save Changes</button>
                                                    </div>
                                                </div> <!-- end member-card -->
                                            <!-- end card-box -->
                                         <!-- end col -->
                                   
                        <!-- kaam ka End row -->
				</form>
				
				
					
					
					<?php
						if(isset($_REQUEST['save']))
						{
							$conf_pass=$_REQUEST['cpassword'];
							$pass=md5($conf_pass);
							$strings="update therapist set Password='$pass' where Username='$ema'";
							$outcomes=mysqli_query($conn,$strings);
							if($outcomes)
							{
								echo "<script>
									 $(window).load(function(){
										 $('#MyModal1').modal('show');
									 });
									</script>";
							}
							else
							{
								echo "<script>
									 $(window).load(function(){
										 $('#MyModal2').modal('show');
									 });
									</script>";
							}
						}
					?>

<div class="modal" id="MyModal1" data-animation="bounceIn">
			<section class="col-md-4"> </section>
			<div class="modal-block col-md-4">
			<section class="panel panel-info panel-color">
			   <header class="panel-heading">
					<h2 class="panel-title"> ALERT </h2>
					<button type="button" class="close" onclick="window.location.href='index.php'" style="margin-top:-18px;"> &times;</button>
			   </header>
			   <div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<div id="id1" name="id1">Password Successfully Changed!</div>
				        </div>
					</div>
			   </div>
			</section>
			</div>
		</div>
		
		<div class="modal" id="MyModal2" data-animation="bounceIn">
			<section class="col-md-4"> </section>
			<div class="modal-block col-md-4">
			<section class="panel panel-info panel-color">
			   <header class="panel-heading">
					<h2 class="panel-title"> ALERT </h2>
					<button type="button" class="close" onclick="window.location.href='index.php'" style="margin-top:-18px;"> &times;</button>
			   </header>
			   <div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<div id="id1" name="id1">Sorry! Try again later...</div>
				        </div>
					</div>
			   </div>
			</section>
			</div>
		</div>

					
				</div>
				</div> 
        </div> <!-- content -->
		</div>
		 <footer class="footer text-right">
                    Sujok © 2017
                </footer>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <!--<script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>-->
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

		
		<script>		
						
			

			$('#eyenpswd').hover(function(){
				$(this).css('cursor','pointer');
			});
			$('#eyenpswd').click(function(){
				$('#npassword').attr('type','text');
			});
			$('#eyenpswd').mouseout(function(){
				$('#npassword').attr('type','password');
			});

			$('#eyecpswd').hover(function(){
				$(this).css('cursor','pointer');
			});
			$('#eyecpswd').click(function(){
				$('#cpassword').attr('type','text');
			});
			$('#eyecpswd').mouseout(function(){
				$('#cpassword').attr('type','password');
			});	
	</script> 
	
	<script>
	</script>
	
	
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script>  $(document).ready(function() {
    $('#frm1').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        fields: {
			npassword: {
				validators: {
					stringLength: {
                    min: 8,
                    },
					notEmpty: {
					message: 'Mandatory Field'
					},
				}
			},
			cpassword: {
				validators: {
					notEmpty: {
					message: 'Mandatory Field'
					},
					identical: {
					field: 'npassword',
					message: 'The password and its confirm are not the same'
					},
				}
			}
			
		}
        })
});
</script>

    </body>
</html>