    <?php
							        	
										$connect=mysqli_connect("localhost","root","","sujok");
										echo    $trid=$_REQUEST['tid1'];
													echo		$name=$_REQUEST['centre_name'];
													echo			$add=$_REQUEST['address'];
													echo			$city=$_REQUEST['city'];
													echo			$st=$_REQUEST['state'];
													echo			$pinc=$_REQUEST['pincode'];
													echo			$cont=$_REQUEST['contact_no'];
													echo			$remarks=$_REQUEST['remark'];
																$str="update centre set Centre_Name='$name',Address='$add',City='$city',State='$st',Pincode='$pinc',Contact='$cont',Remark='$remarks' where Centre_Id='$trid'";
																$res=mysqli_query($connect,$str);
																if(!$res)
																{
																	echo "Could not insert";
																}
																else
																{
																	echo "Successfully Inserted";
																	header('location:centreedit.php');
																	
																
																}
													
													?>
                                                 