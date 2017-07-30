  <?php
include("connection.php");
$patid=$_REQUEST['id'];
$str="select * from patient where Patient_Id='$patid'";
$res=mysqli_query($conn,$str);
$row=mysqli_fetch_array($res);
echo "$row[0]";
echo "$row[1]";
echo "row[2]";

?>

<html>

<head>
	<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		
</head>

<body>
<div class="container">
<form name="frmupd" id="contact_form"  enctype="multipart/form-data" class="well form-horizontal bv-form" method="post" action="patient_upd.php?patid1=<?php echo $patid; ?>"  novalidate="novalidate">

                                                    <div class="form-group">
                                                        <label >Centre Name<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Code" class="form-control" required>
										
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str1="select * from centre";
														$result1=mysqli_query($con,$str1);
														while($row1=mysqli_fetch_array($result1))
														{
															if($row[1]!=$row1[7])
															{
																
														?>
														<option value="<?php echo $row1[7] ?>"><?php echo $row1[1] ?></option>
															<?php }
															else
															{
																echo "<option value='$row1[7]' selected> $row1[1]</option>";
															}
															}?>
														</select>
														</td>
                                                    </div>
													<div class="form-group">
                                                        <label >Patient_Name<span class="text-danger">*</span></label>
                                                        <input type="text"  required  class="form-control" value="<?php echo $row[2]; ?>" id="Patient_Name" name="Patient_Name">
                                                    </div>
													<div class="form-group">
														<label>Patient photo</label>
														<img src='img_pat/<?php echo $row[3]; ?>' height=50 width=50>
														<input type="file"  class="form-control" value="<?php echo $row[3]; ?>" id="Patient_Photo" name="Patient_Photo"  >
												    </div>                                       
													
													 <div class="form-group">
                                                        <label >Registration date<span class="text-danger">*</span></label>
                                                        <input type="date"  required  class="form-control" value="<?php echo $row[4]; ?>" id="Registration_Date" name="Registration_Date">
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text"  required placeholder="Enter Address" class="form-control" value="<?php echo $row[5]; ?>" id="Address" name="Address">
                                                    </div>
                                                        
													<div class="form-group">
														<label >City<span class="text-danger">*</span></label>
                                                        <input type="text"  required placeholder="Enter City" class="form-control" value="<?php echo $row[6]; ?>" id="City" name="City">
    
                                                    </div>
													<div class="form-group">
                                                        <label >State<span class="text-danger">*</span></label>
                                                        <input type="text" required  class="form-control" value="<?php echo $row[7]; ?>" id="State" name="State">
                                                    </div>
													<div class="form-group">
                                                        <label >Pincode<span class="text-danger">*</span></label>
                                                        <input type="number"  required placeholder="Enter Pincode" class="form-control" value="<?php echo $row[8]; ?>" id="Pincode" name="Pincode">
                                                    </div>
													<div class="form-group">
                                                        <label >Mobile number<span class="text-danger">*</span></label>
                                                        <input type="number" required  placeholder="Enter Mobile number" class="form-control" value="<?php echo $row[9]; ?>" id="Mobile" name="Mobile">
                                                    </div>
													<div class="form-group">
                                                        <label >Phone number<span class="text-danger">*</span></label>
                                                        <input type="number"  required placeholder="Enter Phone number" class="form-control" value="<?php echo $row[10]; ?>" id="Phone" name="Phone">
                                                    </div>
													<div class="form-group">
                                                        <label >Email Address<span class="text-danger">*</span></label>
                                                        <input type="email"  required placeholder="Enter Email address" class="form-control" value="<?php echo $row[11]; ?>" id="Email" name="Email">
                                                    </div>
													
													<div class="form-group">
                                                        <label >Date of Birth<span class="text-danger">*</span></label>
                                                        <input type="date" required  class="form-control" value="<?php echo $row[13]; ?>" id="DOB" name="DOB">
                                                    </div>
													<div class="form-group">
                                                        <label >Occupation<span class="text-danger">*</span></label>
                                                        <input type="Occupation"  required  class="form-control" value="<?php echo $row[14]; ?>" id="Occupation" name="Occupation">
                                                    </div>
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark"  class="form-control" value="<?php echo $row[15]; ?>"  name="Remark" ></textarea>
                                                    </div> 													
													<input type="submit" name="s2" id="add" value="UPDATE" class="btn1 btn btn-success ">
												</form></div>

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

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>


</body>
</html>