<?php
	include("connection.php");
	session_start();
	$id=$_SESSION['uid'];
	$str="select * from therapist where Therapist_Id=$id";
	$res=mysqli_query($conn,$str);
	$row=mysqli_fetch_array($res);
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
        <title>Therapist Profile</title>

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<style>
			#upic{
				//border-radius: 30px;
				display:none;
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
	
		<br><br><br><br><br>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
			<form id="frm1" method="post"  enctype="multipart/form-data">
            <div class="content-page">
                <!-- Start content -->
                   	<!--kaam ka-->
										<div class="col-lg-1">
										</div>
										<div class="col-md-2">
										</div> 
											
                                        <div class="col-lg-4 col-md-4">
                                            <div class="text-center card-box bhumi">
                                                <div class="member-card">
                                                    <div class="thumb-xl member-thumb m-b-10 center-block">
                                                        <img id="profile" src="upload/<?php echo $row[2]; ?>" class="img-circle img-thumbnail" style="height:119px; width:119px;" alt="profile pic">
														
                                                        
														<i class="mdi mdi-star-circle member-star text-	success" title="verified user"></i>
														
                                                    </div>
													<input type="file" id="imgupload" name="fileup" style="display:none"/> 
                                                    <div class="">
                                                        <h4 class="m-b-5"><?php echo $row[1]; ?></h4>
														<input type="submit" value="sub" name="upic" id="upic" class="btn brn-success">
                                                    </div>
													</form>
													<!--<div> <button type="button" id="upic" class="btn btn-success btn-md btn-round" onclick='window.location.href="pic_upd.php?tid=4"'> <i class="glyphicon glyphicon-open"></i></button></div>-->
													<form><div id="message"> </div>
                                                    <hr>

                                                    <div class="text-left">
														<form role="form">
														<div class="form-group">
															<label>Username<span class="text-danger">*</span></label> 
															<input type="text" required placeholder="Change Username" class="form-control" id="username" value="<?php echo $row[3]; ?>" name="username">
														</div>
														<div class="form-group">
															<label>Password<span class="text-danger">*</span></label>
															<input type="password" required placeholder="Change Password" class="form-control" id="password" value="<?php echo $row[4]; ?>" name="password" /><small><small><u><a class="" id="eyepswd" > Show Password</a></u></small></small>
														</div>
														<div class="form-group">
															<label>Address<span class="text-danger">*</span></label>
															<input type="text" required placeholder="Change Address" class="form-control" id="Address" value="<?php echo $row[6]; ?>"  name="Address">
														</div>
														<div class="form-group">
															<label>Contact<span class="text-danger">*</span></label>
															<input type="text" required placeholder="Change Contact" class="form-control" id="Contact" value="<?php echo $row[7]; ?>"  name="Contact">
														</div>
														<button type="button" id="edit" style="margin-left:72px;" class="btn btn-purple waves-effect waves-light">Edit Profile</button>
														<button type="submit" id="save" name="save" class="btn btn-info waves-effect waves-light">Save Changes</button>
														
																									
														</form>
                                                    </div>
                                                </div> <!-- end member-card -->
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                   
                        <!-- kaam ka End row -->
                </div> <!-- content -->
				</form>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
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

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

		<script>		
			$(document).ready(function(){
				 $('#username').prop('disabled',true);
				 $("#username").css("background-color", "#EFF1F2");
				 
				 $('#password').prop('disabled',true);
				 $("#password").css("background-color", "#EFF1F2");
				 
				 $('#Address').prop('disabled',true);
				 $("#Address").css("background-color", "#EFF1F2");
				 
				 $('#Contact').prop('disabled',true);
				 $("#Contact").css("background-color", "#EFF1F2");
			});	
			
			$(document).on('click','#edit',function(){
				$('#username').prop('disabled',false);
				 $("#username").css("background-color", "");
				 
				 $('#password').prop('disabled',false);
				 $("#password").css("background-color", "");
				 
				 $('#Address').prop('disabled',false);
				 $("#Address").css("background-color", "");
				 
				 $('#Contact').prop('disabled',false);
				 $("#Contact").css("background-color", "");
			});
			$(document).on('click','#save',function(){
				$('#username').prop('disabled',false);
				 $("#username").css("background-color", "");
				 
				 $('#password').prop('disabled',false);
				 $("#password").css("background-color", "");
				 
				 $('#Address').prop('disabled',false);
				 $("#Address").css("background-color", "");
				 
				 $('#Contact').prop('disabled',false);
				 $("#Contact").css("background-color", "");
			});
			
			$('#eyepswd').hover(function(){
				$(this).css('cursor','pointer');
			});
			
			$('#eyepswd').click(function(){
				$('#password').attr('type','text');
			});
			
			$('#eyepswd').mouseout(function(){
				$('#password').attr('type','password');
			});			
			
			$('#profile').mouseover(function(){
				$(this).css('cursor','pointer');
				$(this).css('background-color',"#0BA293");
			});
			
			$('#profile').mouseout(function(){
				$(this).css('background-color',"");
			});
		
			
			$('#profile').click(function(){ 
			
				$('#imgupload').trigger('click'); 
				$('#upic').css('display','inline'); //to be commented
			});
			
			
			$(function() {
					$("#imgupload").change(function() {
						$("#message").empty(); // To remove the previous error message
						var file = this.files[0];
						var imagefile = file.type;
						var match= ["image/jpeg","image/png","image/jpg"];
						if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
						{
							$('#profile').attr('src','userbg.jpg');
							$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
							return false;
						}
						else
						{
							var reader = new FileReader();
							reader.onload = imageIsLoaded;
							reader.readAsDataURL(this.files[0]);
						}
					});
				});
				function imageIsLoaded(e) {
					$("#imgupload").css("color","green");
					//$('#image_preview').css("display", "block");
					$('#profile').attr('src', e.target.result);
					$('#profile').attr('width', '250px');
					$('#profile').attr('height', '230px');
				};
		</script> 
		<?php
													include("connection.php");
													if(isset($_REQUEST['upic']))
													{
														
														
													
														$therapist_pic=$_FILES['fileup']['name'];
														
														$tmp=$_FILES['fileup']['tmp_name'];
														$path="upload/$therapist_pic";
														
														$sql="update therapist set Photo='$therapist_pic' where Therapist_Id='$id'";
														move_uploaded_file($tmp,$path);
														$result=mysqli_query($conn,$sql);
														if(!$result)
														{
															echo mysqli_error("Could not Update");
														}	
														else
														{
															header('location:therapist_profile.php');
														}
													}
													?>	
		<?php
													include("connection.php");
													if(isset($_REQUEST['save']))
													{
														
														$uname=$_REQUEST['username'];
														$pass=$_REQUEST['password'];
														$add=$_REQUEST['Address'];
														$contact=$_REQUEST['Contact'];
														
														
														$sql="update therapist set Username='$uname',Password='$pass',Address='$add',Contact='$contact' where Therapist_Id='$id'";
														
														$result=mysqli_query($conn,$sql);
														if(!$result)
														{
															echo "Could not Update";
														}	
														else
														{
															header('location:therapist_profile.php');
														}
													}
													?>	
    </body>
</html>