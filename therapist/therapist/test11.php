<!-- insert record using php -->
<?php
 if(isset($_REQUEST['add']))
 {
		 $connect=mysqli_connect("localhost","root","","sujok");
	 
		 $Centre_Code=$_REQUEST['Centre_Code'];
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
		 $Gender=$_REQUEST['Gender'];
		 $DOB=$_REQUEST['DOB'];
		 $Occupation=$_REQUEST['Occupation'];
		 $Remark=$_REQUEST['Remark'];
		 
		 echo $Centre_Code;
		 echo $Patient_Name;
		 echo $Patient_Photo;
		 echo $Registration_Date;
		 echo $Address;
		 echo $City;
		 echo $State;
		 echo $Pincode;
		 echo $Mobile;
		 echo $Phone;
		 echo $Email;
		 echo $Gender;
		 echo $DOB;
		 echo $Occupation;
		 
		 
					$str="insert into patient(Centre_Code,Patient_Name,Patient_Photo,Registration_Date,Address,City,State,Pincode,Mobile,Phone,Email,Gender,DOB,Occupation,Remark) values('$Centre_Code','$Patient_Name','$Patient_Photo','$Registration_Date','$Address','$City','$State','$Pincode','$Mobile','$Phone','$Email','$Gender','$DOB','$Occupation','$Remark')";
					move_uploaded_file($tmp,$path);
					$result=mysqli_query($connect,$str);
					//header('location:add_centre.php');
					if(!$result)
					{
						echo "record is not inserted";
					}
					else
					{
						echo "record inserted";
					}
 }
?>

<html>
<body>
<form id="contact_form" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label >Centre Name<span class="text-danger">*</span></label>
                                                        <td><select name="Centre_Code" class="form-control" required>
														<option>select</option>
														<?php
														
														$con=mysqli_connect("localhost","root","","sujok");
														$str="select * from centre";
														$result=mysqli_query($con,$str);
														while($row=mysqli_fetch_array($result))
														{
														?>
														<option value="<?php echo $row[7] ?>"><?php echo $row[1] ?></option>
														<?php }?>
														</select>
														</td>
                                                    </div>
													<div class="form-group">
                                                        <label >Patient_Name<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Patient_Name Name" class="form-control" id="Patient_Name" name="Patient_Name">
                                                    </div>
													<div class="form-group">
														<label>Patient photo</label>
														<input type="file"  class="form-control" id="Patient_Photo" name="Patient_Photo"  >
												    </div>                                       
													
													 <div class="form-group">
                                                        <label >Registration date<span class="text-danger">*</span></label>
                                                        <input type="date" required placeholder="Enter Patient_Name Name" class="form-control" id="Registration_Date" name="Registration_Date">
                                                    </div>
													<div class="form-group">
                                                        <label >Address<span class="text-danger">*</span></label>
                                                        <input type="text" required placeholder="Enter Address" class="form-control" id="Address" name="Address">
                                                    </div>
													<div class="form-group">
                                                        <label >City<span class="text-danger">*</span></label>
                                                    	<select name="City" id="City" class="form-control selectpicker"  required>
														  <option value="">Select your City</option>
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
                                                        <input type="radio"  value="female" id="Gender" name="Gender"><label>female</label>
														<input type="radio"  value="male" id="Gender" name="Gender"><label>male</label>
                                                    </div>
													<div class="form-group">
                                                        <label >Date of Birth<span class="text-danger">*</span></label>
                                                        <input type="date" required  class="form-control" id="DOB" name="DOB">
                                                    </div>
													<div class="form-group">
                                                        <label >Occupation<span class="text-danger">*</span></label>
                                                        <input type="Occupation" required  class="form-control" id="Occupation" name="Occupation">
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
												
												
												
				</body>
				</html>