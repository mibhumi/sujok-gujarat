  <?php
														$updateid=$_REQUEST['tid1'];
													    $Package_Name=$_REQUEST['pacname'];
																 $Description=$_POST['desc'];
																 $Charge=$_POST['charge'];
																 $Seating=$_POST['seat'];
																 $Remark=$_POST['remark'];
															
															 $connect=mysqli_connect("localhost","root","","sujok");
															 
																
																
					$str="update package set Package_Name='$Package_Name',Description='$Description',Charge='$Charge',Seating='$Seating',Remark='$Remark' where Package_ID='$updateid'";
																 $result2=mysqli_query($connect,$str);
																 if(!$result2 )
																 {
																	echo "please fill up form correctly";
																 }
																 else
																 {
																	echo "record inserted";
																	header('location:packageedit.php');
																	
																 }
														
														 

?>