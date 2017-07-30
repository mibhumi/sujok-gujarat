<?php
@ob_start();
session_start();
												  
													$connect=mysqli_connect("localhost","root","","sujok");
													 if(isset($_REQUEST['add']))
													 {  
														 $uname=$_POST['uname'];
														 $_SESSION["uname"] = $uname;
														 $pass=md5($_POST['pass']);
														 $procedure="SELECT * FROM therapist where Username='$uname' and Password='$pass'";
					
															$result=mysqli_query($connect,$procedure) ;
														
															 if($row=mysqli_fetch_array($result))
															 { 
																$_SESSION["uid"] = $row[0];
																$_SESSION["uname"] = $uname;
																$_SESSION["pas"] = $pass;
																$_SESSION["thename"]= $row[1];
																$_SESSION["thepic"]= $row[2];
																$_SESSION["Centre_Id"]= $row[5];																
															 header('location:index.php');
																	
															  }
															 
													 }				 
													 ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\su-logo.png">
        <!-- App title -->
        <title>Welcome Sujok : login</title>

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		 <link href="assets\css\chinnu.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets\js\modernizr.min.js"></script>


    </head>


    <body >

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
        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.htm" class="text-success">
										
                                            <span><img src="logo.png" alt="" height="180"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    
									
									<form id="contact_form" class="form-horizontal" method="post">
										<span><h4>Therapist Login</h4></span>	
										
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="email"  placeholder="Username" id="uname" name="uname">
												<span  id="errr" class="text-danger"> </span>
											
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password"  placeholder="Password" name="pass" id="pass">
												<span  id="errr1" class="text-danger"> </span>
                                            </div>
                                        </div>

                               

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="page-recoverpw.htm" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                               <input type="submit" name="add" id="add" value="login" class="btn1 btn btn-success ">
											
																<center>
																
												</div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                   
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

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

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>
		
		<!--<script src="assets\js\checkun.js"></script>
		<script src="assets\js\checkpass.js"></script>-->
		
	

    </body>
</html>

		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script> $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        
        fields: {
			uname: {
                validators: {
                        stringLength: {
                        min: 1,
						},
                        notEmpty: {
                        message: 'Please enter username'
						}
                }
              },
            pass: {
                validators: {
                        stringLength: {
                        min: 4,
						},
                        notEmpty: {
                        message: 'Please enter password'
						}
                }
              }
			  
            }
        })
		
        
});
</script>