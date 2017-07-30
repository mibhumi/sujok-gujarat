											<?php
													include("connection.php");
													if(isset($_REQUEST['save']))
													{
														$id=$_REQUEST['tid'];
														$uname=$_REQUEST['username'];
														$pass=$_REQUEST['password'];
														$add=$_REQUEST['Address'];
														$contact=$_REQUEST['Contact'];
														$therapist_pic=$_FILES['fileup']['name'];
														$tmp=$_FILES['fileup']['tmp_name'];
														$path="upload/$therapist_pic";
														$sql="update therapist set Photo='$therapist_pic',Username='$uname',Password='$pass',Address='$add',Contact='$contact' where Therapist_Id='$id'";
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