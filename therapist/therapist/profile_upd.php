											
											<?php
													include("connection.php");
													session_start();
													$theid=$_SESSION['uid'];
													if(isset($_REQUEST['save']))
													{
														//$su=$_SESSION['uname'];
														$unames=$_REQUEST['username'];
														$pass=$_REQUEST['password'];
														$add=$_REQUEST['Address'];
														$contact=$_REQUEST['Contact'];
														$sql="update therapist set Username='$unames',Password='$pass',Address='$add',Contact='$contact' where Therapist_Id='$theid'";
														$result=mysqli_query($conn,$sql);
														if(!$result)
														{
															echo "Could not Update";
														}	
														else
														{
															//$_SESSION['uname']=
															header('location:therapist_profile.php');
														}
													}
													?>	
													