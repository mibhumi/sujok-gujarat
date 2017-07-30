  <?php
include("connection.php");
$treatid=$_REQUEST['id'];
$str="select * from centre where Centre_Id='$treatid'";
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

                                                <form name="frmupd" id="contact_form"  enctype="multipart/form-data" class="well form-horizontal bv-form" method="post" action="updcen.php?tid1=<?php echo $treatid; ?>"  novalidate="novalidate">
												
                                                    <div class="form-group">
													
                                                        <label for="userName">Centre Name<span class="text-danger">*</span></label>
                                                        <input type="text" value="<?php echo $row[1];?>"required placeholder="Enter Centre Name" class="form-control" id="centre_name" name="centre_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Centre Address<span class="text-danger">*</span></label>
                                                        <div>
                                                            <input type="text" class="form-control" value="<?php echo $row[2];?>" required   id="address" name="address">
                                                        </div>
                                                    </div>
                                                   
													 <div class="form-group">
                                                        <label >City<span class="text-danger">*</span></label>
                                                         <input id="state" class="form-control" name="city" required value="<?php echo $row[3];?>" >
                                                    </div>
													 <div class="form-group">
                                                        <label >State<span class="text-danger">*</span></label>
														
                                                        <input id="state" class="form-control" name="state" required value="<?php echo $row[4];?> ">
														
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Pincode<span class="text-danger">*</span></label>
                                               <input id="state" class="form-control" name="pincode" required value="<?php echo $row[5];?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact<span class="text-danger">*</span></label>
                                                        <input type="number" value="<?php echo $row[6];?>"  placeholder="Enter contact number" class="form-control" id="contact_no" name="contact_no"  required >
                                                    </div>
													
                                                    
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="remark" class="form-control"  <?php echo $row[8];?> name="remark"><?php echo $row[8];?></textarea>
                                                    </div>  
													<input type="submit" name="add" value="submit" class="btn btn-success waves-effect m-l-5">
                                                          
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                               
                                                  													
                                                </form>
                                         

                         
        <!-- END wrapper -->



       <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
    
        <script src="assets\js\jquery.blockUI.js"></script>
       <!-- <script src="assets\js\waves.js"></script> -->
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>


        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init 
        <script src="assets\pages\jquery.dashboard_2.js"></script> -->

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        
 
        


	<script src="bootstrapvalidator.min.js"></script>
	<script>  
		$(document).ready(function() {
		$('#centre_reg').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            centre_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter the Centre Name'
                    }
                }
            },
             address: {
                validators: {
                     stringLength: {
                        min: 9,
                    },
                    notEmpty: {
                        message: 'Please enter Centre Address'
                    }
                }
            },
			 city: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter the City'
                    }
                }
            },
			 state: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter the State'
                    }
                }
            },
			pincode: {
                validators: {
                     stringLength: {
                        min: 6,
						max: 6,
                    },
                    notEmpty: {
                        message: 'Please enter the Pincode'
                    }
                }
            },
            contact_no: {
                validators: {
                  stringLength: {
                        min: 7, 
                        max: 10,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
                },
				centre_code: {
                validators: {
                     stringLength: {
                        min:1,
                    },
                    notEmpty: {
                        message: 'Please enter the Centre Code'
                    }
                }
            },
			
            }
        })
            // Use Ajax to submit form data

			
});
</script>

<script>

		$(document).ready(function(){
    $("#centre_code").blur(function(){
        var dip=$("#centre_code").val();
		
			$.ajax({url:"chkcen.php",
			method:"POST",
			data:{cenid:dip},
			success:function(data){
				
				$('#errr').html(data);
			}
		});
	});
});
</script>
    </body>
</html>