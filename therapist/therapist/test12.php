  <!-- insert record using php -->
<?php
 if(isset($_REQUEST['add']))
 {
		 $connect=mysqli_connect("localhost","root","","sujok");
	 
		 $Patient_Id=$_REQUEST['pid'];
		 $Treatment_Date=$_REQUEST['Treatment_Date'];
		 $CS=$_REQUEST['CS'];
		 $EFT=$_REQUEST['EFT'];
		 $Triorigin=$_REQUEST['Triorigin'];
		 $KI=$_REQUEST['KI'];
		 $Other=$_REQUEST['Other'];
		 $Centre_Id=$_REQUEST['Centre_Id'];
		 $Remark=$_REQUEST['Remark'];
		 
		 
					$str="insert into Treatment(Patient_Id,Treatment_Date,CS,EFT,6KI,Triorigin,Others,Centre_Id,Remark) values('$Patient_Id','$Treatment_Date','$CS','$EFT','$Triorigin','$KI','$Other','$Centre_Id','$Remark')";
					$result=mysqli_query($connect,$str);
					if(!$result)
					{
						echo "<script type='text/javascript'>alert('Treatment is not inserted')</script>";
					}
					else
					{
						header('location:add_centre.php');
					}
 }
?>
<html>
<body>
<form id="contact_form" method="post" enctype="multipart/form-data">
                                                 <div class="form-group">
                                                        <label >Treatment date<span class="text-danger">*</span></label>
                                                        <input type="date" required  class="form-control" id="Treatment_Date" name="Treatment_Date">
                                                    </div>
													<div class="form-group">
                                                        <label >CS<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="CS" name="CS">
                                                    </div>
													<div class="form-group">
                                                        <label >EFT<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint"   class="form-control" id="EFT" name="EFT">
                                                    </div>
													<div class="form-group">
                                                        <label >6KI<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint" class="form-control" id="KI" name="KI">
                                                    </div>
													<div class="form-group">
                                                        <label >Triorigin<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint"  class="form-control" id="Triorigin" name="Triorigin">
                                                    </div>
													<div class="form-group">
                                                        <label>Other<span class="text-danger">*</span></label>
                                                        <input type="Other_Complaint"  class="form-control" id="Other" name="Other">
                                                    </div>
													<div class="form-group">
                                                        <label >Centre Name<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Id" class="form-control" required>
														
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str="select * from centre";
														$result=mysqli_query($con,$str);
														while($row=mysqli_fetch_array($result))
														{
														?>
														<option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
														<?php }?>
														</select>
														</td>
                                                    </div>
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control"  name="Remark" ></textarea>
                                                    </div> 													
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
												</form>
													
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
			  Treatment_Date: {
                validators: {
                        notEmpty: {
                        message: 'Please select Treatment Date'
						}
                }
              },
			  Centre_Id: {
                validators: {
                        stringLength: {
                        min: 1,
						max:6,
						},
                        notEmpty: {
                        message: 'Please select Centre name'
						}
                }
              }
            }
        })
		
        
});
</script>



    </body>
</html>



 
