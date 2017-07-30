<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="su-logo.png">
        <!-- App title -->
        <title>Password Recovery</title>

        <!-- App css -->
         <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		 <link href="assets\css\chinnu.css" rel="stylesheet" type="text/css">

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


    <body>

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
                                            <span><img src="assets\images\logo.png" alt="" height="36"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <div class="text-center m-b-20">
                                        <p class="text-muted m-b-0 font-13">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
                                    </div>
                                    <form class="form-horizontal" method="post" action="">
									
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="email" name="email_id" id="email_id" placeholder="Enter email">
												<span id="sp1" class="text-danger"></span>
											</div>
                                        </div>
                                    

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" name="btnsub" type="submit">Send Email
                                                </button>	
                                            </div>
                                        </div>
									</form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <!--<div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have account?<a href="page-login.htm" class="text-primary m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
			
			<div class="modal" id="MyModal1" data-animation="bounceIn">
			<section class="col-md-4"> </section>
			<div class="modal-block col-md-4">
			<section class="panel panel-info panel-color">
			   <header class="panel-heading">
					<h2 class="panel-title"> ALERT </h2>
					<button type="button" class="close" onclick="window.location.href='forgot_password.php'" style="margin-top:-18px;"> &times;</button>
			   </header>
			   <div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<div id="id1" name="id1">Message could not be sent.</div>
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
					<button type="button" class="close" onclick="window.location.href='forgot_password.php'" style="margin-top:-18px;"> &times;</button>
			   </header>
			   <div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<div id="id1" name="id1">Message has been sent!</div>
				        </div>
					</div>
			   </div>
			</section>
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
		
		<script>
			$('#email_id').blur(function(){
				var e=$(this).val();
				$.ajax({
					url:"email_check.php",
					method:"POST",
					data:{emval:e},
					success:function(result)
					{
						$('#sp1').html(result);
					}
				});
			});
	
		</script>

    </body>
</html>
<?php

if(isset($_REQUEST['btnsub']))
{
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$user_mail=$_REQUEST['email_id'];
//$_SESSION['tname']=$thename;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'modihoney124@gmail.com';          // SMTP username
$mail->Password = 'koleduck'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->CharSet = 'UTF-8';

$mail->setFrom('modihoney124@gmail.com', 'Sujok');
//$mail->send('my_sujok/therapist/mails.php');
$mail->addReplyTo('modihoney124@gmail.com', 'Honey Modi');
$mail->addAddress($user_mail);   // Add a recipient

/*, function($m){
	$m->to('modihoney124@gmail.com', 'Honey Modi');
	$m->subject('Email for Resetting Password');
});
<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="emailcss.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/bootstrap.min.js"> </script>
*/

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML
 
 
$bodyContent = '<html><body>';
$bodyContent .= '<table class="body-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;">';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top">';
$bodyContent .= '</td>';
$bodyContent .=	'<td class="container" width="600" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">';
$bodyContent .= '<div class="content" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">';
$bodyContent .=	'<table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff">';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td class="alert alert-warning" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background-color: #36404e; margin: 0; padding: 20px;" align="center" bgcolor="#2f353f" valign="top">';
$bodyContent .=	'<h1> SUJOK </h1>';
$bodyContent .=	'</td>';
$bodyContent .=	'<tr>';
$bodyContent .= '<td>';
$bodyContent .= '<br>';
$bodyContent .= '<center>';
$bodyContent .= '<img src="http://pulseacuclinic.com/wp-content/uploads/2015/08/ISA-logo.png" height="200" width="200">';
$bodyContent .= '</center>';
$bodyContent .= '<br>';
$bodyContent .= '<hr height="2">';
$bodyContent .= '</td>';
$bodyContent .= '</tr>';
$bodyContent .=	'</tr>';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td class="content-wrap" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">';
$bodyContent .=	'<table width="100%" cellpadding="0" cellspacing="0" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">';
$bodyContent .=	'<strong style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= 'Dear Therapist,';
$bodyContent .= '</strong>';
									
$bodyContent .=	'</td>';
$bodyContent .= '</tr>';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">';
$bodyContent .=	'You requested to reset your Password.';
$bodyContent .= '<br>';		
$bodyContent .= 'Click on the Button below if you wish to continue..';
$bodyContent .=	'</td>';
$bodyContent .=	'</tr>';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">';

$bodyContent .= '';
$bodyContent .= '<a href="http://localhost/sujok/Sujok1.6/therapist/change_pass.php?uemail='.md5($user_mail).'" class="btn w-md btn-bordered btn-danger waves-effect waves-light">';
$bodyContent .= '<div  style="min-height: 15%;
    width: 21%;
    background: #80fbff;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid;">';
$bodyContent .= 'Change Password';
$bodyContent .= '</div>';
$bodyContent .= '</a>';
$bodyContent .= '';
$bodyContent .=	'</td>';
$bodyContent .=	'</tr>';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">';
$bodyContent .=	'<br>';
$bodyContent .= 'Thank You.';
$bodyContent .=	'<br>';
$bodyContent .= '<strong>';
$bodyContent .= 'By Sujok';
$bodyContent .= '</strong>'; 
$bodyContent .=	'</td>';
$bodyContent .= '</tr>';
$bodyContent .= '</table>';
$bodyContent .= '</td>';
$bodyContent .=	'</tr>';
$bodyContent .= '</table>';
$bodyContent .= '<div class="footer" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;">';
$bodyContent .=	'<table width="100%" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">';
$bodyContent .= '<td class="aligncenter content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">';
$bodyContent .= '<a href="#" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;">';
$bodyContent .= 'Unsubscribe';
$bodyContent .= '</a>';
$bodyContent .= 'from these alerts.';
$bodyContent .= '</td>';
$bodyContent .=	'</tr>';
$bodyContent .= '</table>';
$bodyContent .= '</div>';
$bodyContent .= '</div>';
$bodyContent .= '</td>';
$bodyContent .=	'<td style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top">';
$bodyContent .= '</td>';
$bodyContent .=	'</tr>';
$bodyContent .= '</table>';
$bodyContent .= '</body></html>';/*file_get_contents("mails.php");*/

$mail->Subject = 'Email for Resetting Password';
$mail->Body    = $bodyContent;

//$mail->AddEmbeddedImage(dirname(__FILE__) . '/su-logo.png', 'Logo');

if(!$mail->send()) {
    echo "<script>
			$(window).load(function(){
			$('#MyModal1').modal('show');
			});
		  </script>";//echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>
			$(window).load(function(){
			$('#MyModal2').modal('show');
			});
		  </script>";//echo 'Message has been sent';
}
}
?>

