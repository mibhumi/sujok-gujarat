  <?php
include("connection.php");
$treatid=$_REQUEST['id'];
$str="select * from package where Package_Id='$treatid'";
$res=mysqli_query($conn,$str);
$row=mysqli_fetch_array($res);

?>

<html>

<head>

		<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
<form name="frmupd" id="contact_form"  enctype="multipart/form-data" class="well form-horizontal bv-form" method="post" action="updpackage.php?tid1=<?php echo $treatid; ?>"  novalidate="novalidate">
												

                                                    <!--<div class="form-group">
                                                        <label >Patient Id<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Code" class="form-control" required>
										
														<php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str1="select * from centre";
														$result1=mysqli_query($con,$str1);
														while($row1=mysqli_fetch_array($result1))
														{
															if($row[1]!=$row1[7])
															{
																
														?>
														<option value="<php echo $row1[7] ?>"><php echo $row1[1] ?></option>
															<php }
															else
															{
																echo "<option value='$row1[7]' selected> $row1[1]</option>";
															}
															}?>
														</select>
														</td>
                                                    </div>-->
													
											<div class="">
											

											
                                                <!--<form id="contact_form" method="post" enctype="multipart/form-data">-->
												
													<div class="form-group">
                                                        <label >Package Name<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $row[1]; ?>" id="Therapist_Name" name="pacname">
                                                    </div>
													
													
													
													<div class="form-group">
                                                        <label >Charge<span class="text-danger">*</span></label>
                                                        <input type="number"   class="form-control" value="<?php echo $row[3]; ?>" id="EFT" name="charge">
                                                    </div>
													
													<div class="form-group">
                                                        <label >Seating<span class="text-danger">*</span></label>
                                                        <input type="number"  class="form-control" value="<?php echo $row[4]; ?>" id="Triorigin" name="seat">
                                                    </div>
													<div class="form-group">
                                                        <label >Description<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="<?php echo $row[2]; ?>" id="CS" name="desc">
                                                    </div>
													
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
														<input type="text"  class="form-control" value="<?php echo $row[5]; ?>" id="remark" name="remark">
                                                    </div> 											
											<input type="submit" name="s2" id="add" value="UPDATE" class="btn1 btn btn-success ">
                                            </div>
										</form></div>

<!-- jQuery  -->
     


</body>
</html>