 
<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?>


 <?php
include("connection.php");
$theid=$_REQUEST['uid'];
$str="select * from therapist where Therapist_Id='$theid'";
$res=mysqli_query($conn,$str) or die("fail");
$row=mysqli_fetch_array($res);

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
        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


								<form name="frmupd" id="contact_form"  enctype="multipart/form-data"  method="post"   novalidate="novalidate">
													<div class="form-group">
                                                        <label >Therapist Id<span class="text-danger">*</span></label>
                                                        <input type="text" value="<?php echo $row[0]; ?>" required placeholder="Enter Therapist Name" class="form-control" id="Therapist_Name" name="Therapist_Name">
                                                    </div>
													<div class="form-group">
                                                        <label >Therapist Name<span class="text-danger">*</span></label>
                                                        <input type="text" value="<?php echo $row[1]; ?>" required placeholder="Enter Therapist Name" class="form-control" id="Therapist_Name" name="Therapist_Name">
                                                    </div>
													<div class="form-group">
														<label>Therapist photo</label>
														<img src='img_thep/<?php echo $row[2]; ?>' height=50 width=50>
														<input type="file"  class="form-control" value="<?php echo $row[2]; ?>" id="Therapist_Photo" name="Therapist_Photo"  >
												    </div>                                       
													
													 <div class="form-group">
                                                        <label >Username<span class="text-danger">*</span></label>
                                                        <input type="text" value="<?php echo $row[3]; ?>" required placeholder="Enter Username Name" class="form-control" id="Username" name="Username">
                                                    </div>
													<div class="form-group">
                                                        <label >Password<span class="text-danger">*</span></label>
                                                        <input type="password" value="<?php echo $row[4]; ?>" required placeholder="Enter Password" class="form-control" id="Password" name="Password">
                                                    </div>
													<div class="form-group">
                                                        <label >Centre Name<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Id" class="form-control" required>
										
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str1="select * from centre";
														$result1=mysqli_query($con,$str1);
														while($row1=mysqli_fetch_array($result1))
														{
															if($row[5]!=$row1[0])
															{
																
														?>
														<option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
															<?php }
															else
															{
																echo "<option value='$row1[0]' selected> $row1[1]</option>";
															}
															}?>
														</select>
														</td>
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text" value="<?php echo $row[6]; ?>" required placeholder="Enter Address" class="form-control" id="Address" name="Address">
                                                    </div>
													<div class="form-group">
                                                        <label >Contact no<span class="text-danger">*</span></label>
                                                        <input type="text" value="<?php echo $row[7]; ?>" required placeholder="Enter Contact" class="form-control" id="Contact" name="Contact">
                                                    </div>
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control" value="<?php echo $row[8]; ?>" name="Remark" ></textarea>
                                                    </div> 													
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
												</form>


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
	<script src="bootstrapvalidator.min.js"></script>


</body>
</html>