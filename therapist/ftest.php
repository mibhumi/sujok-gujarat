<!-- insert record using php -->
<?php
  session_start();
 $cid=$_SESSION['Centre_Id'];
 if(isset($_REQUEST['add']))
 {
		 $connect=mysqli_connect("localhost","root","","sujok");
		
		 $sql="select * from centre where Centre_Id=$cid";
		 $result1=mysqli_query($connect,$sql);
		 if($row1=mysqli_fetch_array($result1))
		 {  												
			$_SESSION['Centre_Code']= $row1[7];																												
	     }
	 
		 $Centre_Code=$_SESSION['Centre_Code'];
		 $Patient_Name=$_REQUEST['Patient_Name'];
		 $Patient_Photo=$_FILES['Patient_Photo']['name'];
		 $tmp=$_FILES['Patient_Photo']['tmp_name'];
		 $path="img_pat/$Patient_Photo";
		 $Registration_Date=$_REQUEST['Registration_Date'];
		 $Address=$_REQUEST['Address'];
		 $City=$_REQUEST['City'];
		 $State=$_REQUEST['State'];
		 $Pincode=$_REQUEST['Pincode'];
		 $Mobile=$_REQUEST['Mobile'];
		 $Phone=$_REQUEST['Phone'];
		 $Email=$_REQUEST['Email'];
		 $Gender=$_REQUEST['radioInline'];
		 $DOB=$_REQUEST['DOB'];
		 $Occupation=$_REQUEST['Occupation'];
		 $Remark=$_REQUEST['Remark'];
		 
					$str="insert into patient(Centre_Code,Patient_Name,Patient_Photo,Registration_Date,Address,City,State,Pincode,Mobile,Phone,Email,Gender,DOB,Occupation,Remark) values('$Centre_Code','$Patient_Name','$Patient_Photo','$Registration_Date','$Address','$City','$State','$Pincode','$Mobile','$Phone','$Email','$Gender','$DOB','$Occupation','$Remark')";
					move_uploaded_file($tmp,$path);
					$result=mysqli_query($connect,$str);
					if(!$result)
					{
						echo "not inserted";
					}
					else
					{
					header('location:patientdisp.php');
					}
 }
?>


 
<html>
<body>
<form id="contact_form" method="post" enctype="multipart/form-data">
                                  
													<div class="form-group">
                                                        <label >Person Name<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Person's Name" class="form-control" id="Patient_Name" name="Patient_Name">
                                                    </div>
													
													<div class="form-group m-b-0">
                                                                <label class="control-label">Patient Photo</label>
                                                                <input type="file" class="filestyle" data-buttonname="btn-primary" id="Patient_Photo" name="Patient_Photo">
                                                            </div>	
													
													 <div class="form-group">
                                                        <label >Registration Date<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control datepicker-autoclose" id="datepicker-autoclose" name="Registration_Date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Address" class="form-control" id="Address" name="Address">
                                                    </div>
													<div class="form-group">
                                                        <label >City<span class="text-danger">*</span></label>
                                                    	<select name="City" id="City" class="form-control selectpicker"  required>
														  <option value="Surat">Surat</option>
														  <option value="Baroda">Baroda</option>
														  <option value="Bhuj">Bhuj</option>
														</select>
                                                    </div>
													<div class="form-group">
                                                        <label >State<span class="text-danger">*</span></label>
                                                        <input type="text" required value="gujarat" class="form-control" id="State" name="State">
                                                    </div>
													<div class="form-group">
                                                        <label >Pincode<span class="text-danger">*</span></label>
                                                        <input type="number" required placeholder="Enter Pincode" class="form-control" id="Pincode" name="Pincode">
                                                    </div>
													<div class="form-group">
                                                        <label >Mobile number<span class="text-danger">*</span></label>
                                                        <input type="number" required placeholder="Enter Mobile number" class="form-control" id="Mobile" name="Mobile">
                                                    </div>
													<div class="form-group">
                                                        <label >Phone number<span class="text-danger">*</span></label>
                                                        <input type="number" required placeholder="Enter Phone number" class="form-control" id="Phone" name="Phone">
                                                    </div>
													<div class="form-group">
                                                        <label >Email Address<span class="text-danger">*</span></label>
                                                        <input type="email" required placeholder="Enter Email address" class="form-control" id="Email" name="Email">
                                                    </div>
													<div class="form-group">
                                                        <label >Gender<span class="text-danger">*</span></label>
														<br>
                                                        
													<div class="radio radio-info radio-inline">
														<input type="radio" id="inlineRadio1" value="1" name="radioInline" checked>
														<label for="inlineRadio1"> Female </label>
													</div>
													<div class="radio radio-info radio-inline">
														<input type="radio" id="inlineRadio2" value="0" name="radioInline">
														<label for="inlineRadio2"> Male </label>
													</div>
													
													</div>
													<div class="form-group">
                                                        <label >Date of Birth<span class="text-danger">*</span></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="datepicker-autoclose1" name="DOB">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label >Occupation<span class="text-danger">*</span></label>
                                                        <input type="Occupation" required  class="form-control" id="Occupation" name="Occupation">
                                                    </div>
													<div class="form-group">
                                                        <label>Remark<span class="text-danger"></span></label>
                                                        <textarea id="Remark" class="form-control"  name="Remark" ></textarea>
                                                    </div><br><br> 													
													<input type="submit" name="add" id="add" value="submit" class="btn1 btn btn-success ">
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
												</form>
  </body>
  </html>