  <?php
include("connection.php");
$patid=$_REQUEST['id'];
$str="select * from patient where Patient_Id='$patid'";
$res=mysqli_query($conn,$str);
$row=mysqli_fetch_array($res);

?>

<html>

<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\su-logo.png">
			<!-- App title -->
        <title>Sujok Admin Dashboard</title>

        <!-- App css -->
        		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css"> 
				
				<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		
		
		
		
		

        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		<link rel="stylesheet" href="assets\css\chinnu.css">
        

        <script src="assets\js\modernizr.min.js"></script>
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
													                                   
													<?php
														$timestamp = strtotime($row[4]);
														$dat=date('d-M-Y', $timestamp);
													?>
															
													<div class="form-group">
                                                        <label >Registration date<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="<?php echo $dat; ?>" id="datepicker-autoclose1" name="Registration_Date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
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
													<?php
														$timestamp = strtotime($row[13]);
														$dat1=date('d-M-Y', $timestamp);
													?>
													<div class="form-group">
                                                        <label >Date of Birth<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="<?php echo $dat1; ?>" id="datepicker-autoclose" name="DOB">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
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

												
												<script src="../plugins/moment/moment.js"></script>
												
												
     								
												
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

	
	
	
	<script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	
					
	
	
	
		 <script src="assets\pages\jquery.form-pickers.init.js"></script>
		 
		 
		 
		 	
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script>  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			Centre_Code: {
                validators: {
                        stringLength: {
                        min: 1,
						},
                        notEmpty: {
                        message: 'Please enter Centre code'
						}
                }
              },
            Patient_Name: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Patient Name'
						}
                }
              },
			  Patient_Photo: {
                validators: {
						file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/JPEG,image/png,image/JPG,image/jpg',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
						},
                        notEmpty: {
                        message: 'Please select image'
						}
                }
              },
			  Address: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Address'
						}
                }
              },
			  Mobile: {
                validators: {
                        stringLength: {
                        min: 10,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              },
			  Phone: {
                validators: {
                        stringLength: {
                        min: 6,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter phone number'
						}
                }
              },
			  Email: {
                validators: {
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              },
			  Gender: {
                validators: {
                        notEmpty: {
                        message: 'Please select gender'
						}
                }
              },
			  Occupation: {
                validators: {
                        stringLength: {
                        min: 2,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter Occupation'
						}
                }
              },
			  Pincode: {
                validators: {
                        stringLength: {
                        min: 6,
						max:6,
						},
                        notEmpty: {
                        message: 'Please enter pincode'
						}
                }
              },
			  State: {
                validators: {
                        stringLength: {
                        min: 3,
						max:15,
						},
                        notEmpty: {
                        message: 'Please enter state'
						}
                }
              },
			  City: {
                validators: {
                        stringLength: {
                        min: 2,
						max:15,
						},
                        notEmpty: {
                        message: 'Please select city'
						}
                }
              }
            }
        })
		
        
});
</script>




</body>
</html>