<?php
ob_start();
session_start();
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
                                        <div  class="">
										
                                            <span><img src="logo.png"  alt="" height="180"></span>
                                        </div>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" name="contact_form" id="contact_form" method="post" >
										<span><h4>Admin Login</h4></span>	
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="email" required="" placeholder="Username" name="uname">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" required="" placeholder="Password" name="pass">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                                                                   </div>

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12" hidden>
                                                <a href="page-recoverpw.htm" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                 <input type="submit" name="add" id="add" value="login" class="btn1 btn btn-success ">
																<center>
												</div>
                                        </div>

                                    <span class="text-danger">
<?php
 
													  include('connection.php');
													 
													 if(isset($_REQUEST['add']))
													 {  
														 $uname=$_REQUEST['uname'];
														 $pass=$_REQUEST['pass'];
														 $procedure="SELECT * FROM super_admin where Username='$uname' and Password='$pass'";
																
															$result=mysqli_query($conn,$procedure) ;
															
															 if($row=mysqli_fetch_array($result))
															 {  
															
																echo $_SESSION["uname"] = $uname;
																$_SESSION["pas"] = $pass;
																echo $_SESSION["supername"]= $row[1];
																if($row[2]=="")
																{
																	$_SESSION["spic"]="user.jpg";
																}else{
																echo $_SESSION["spic"]= $row[2];
																}
																echo $_SESSION["supid"]= $row[0];
																
															 header('location:index.php');
																	
															  }else
															  {
																 
																 echo "wrong id or password";
																 
															  }
													 }
																 
																 ?>
												
		
</span>
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
		
		
		
	</script>	
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
