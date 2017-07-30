<?php
include("connection.php");

$pat_id=$_REQUEST['patid1'];
$cent_code=$_REQUEST['Centre_Code'];
$pat_name=$_REQUEST['Patient_Name'];
$var1=$_REQUEST['Registration_Date'];
$reg_date= date("Y-m-d", strtotime($var1) );
$pat_add=$_REQUEST['Address'];
$pat_city=$_REQUEST['City'];
$pat_state=$_REQUEST['State'];
$pat_pin=$_REQUEST['Pincode'];
$pat_mob=$_REQUEST['Mobile'];
$pat_phone=$_REQUEST['Phone'];
$pat_mail=$_REQUEST['Email'];
$var2=$_REQUEST['DOB'];
$pat_dob= date("Y-m-d", strtotime($var2) );
$pat_occ=$_REQUEST['Occupation'];
$pat_rem=$_REQUEST['Remark'];
$str="update patient set Centre_Code='$cent_code',Patient_Name='$pat_name',Registration_Date='$reg_date',Address='$pat_add',City='$pat_city',State='$pat_state',Pincode='$pat_pin',Mobile='$pat_mob',Phone='$pat_phone',Email='$pat_mail',DOB='$pat_dob',Occupation='$pat_occ',Remark='$pat_rem' where Patient_Id='$pat_id'";
move_uploaded_file($tmp,$path);	
$res=mysqli_query($conn,$str);
if(!$res)
{
	header('location:paterr.htm');
}
else
{
	header('location:patientdisp.php');
}
?>