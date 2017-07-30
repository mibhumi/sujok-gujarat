 <?php
include("connection.php");


$pat_id=$_REQUEST['patid1'];
$Centre_Code=$_REQUEST['Centre_Code'];
$Patient_Name=$_REQUEST['Patient_Name'];
$Patient_Photo=$_FILES['Patient_Photo']['name'];
$tmp=$_FILES['Patient_Photo']['tmp_name'];
$path="img_pat/$Patient_Photo";
$var1=$_REQUEST['Registration_Date'];
$Registration_Date=date("Y-m-d", strtotime($var1 ));

$Address=$_REQUEST['Address'];
$City=$_REQUEST['City'];
$State=$_REQUEST['State'];
$Pincode=$_REQUEST['Pincode'];
$Mobile=$_REQUEST['Mobile'];
$Phone=$_REQUEST['Phone'];
$Email=$_REQUEST['Email'];
$Gender=$_REQUEST['Gender'];
$var2 =$_REQUEST['DOB'];
$DOB= date("Y-m-d", strtotime($var2) );
$Occupation=$_REQUEST['Occupation'];
$Remark=$_REQUEST['Remark'];
$str="insert into patient(Centre_Code,Patient_Name,Patient_Photo,Registration_Date,Address,City,State,Pincode,Mobile,Phone,Email,Gender,DOB,Occupation,Remark) values('$Centre_Code','$Patient_Name','$Patient_Photo','$Registration_Date','$Address','$City','$State','$Pincode','$Mobile','$Phone','$Email','$Gender','$DOB','$Occupation','$Remark')";
move_uploaded_file($tmp,$path);
$res=mysqli_query($conn,$str);
if(!$res)
{
	echo "Could not update";
}
else
{
	header('location:patientdisp.php');
}
?>