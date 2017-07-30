<?php
include("connection.php");
$centreid=$_REQUEST['id'];
$str="select * from centre where Centre_Id='$centreid'";
$res=mysqli_query($conn,$str);
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
<div class="container">
<form name="frmupd" class="well form-horizontal bv-form" method="post" action="upd.php?centreid1=<?php echo $centreid; ?>" id="centre_form" novalidate="novalidate">

<!-- Text input-->
<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Centre Name:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="centre_name" placeholder="Centre's Name" class="form-control" value="<?php echo $row['Centre_Name']; ?>" type="text" data-bv-field="centre_name"><i class="form-control-feedback" data-bv-icon-for="centre_name" style="display: none;"></i>
    </div>
</div>
</div>

<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Address:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="address" class="form-control" value="<?php echo $row['Address']; ?>" data-bv-field="address">
  <i class="form-control-feedback" data-bv-icon-for="address" style="display: none;"></i>
	</div>
  </div>
</div>

<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">City:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="city" placeholder="Enter City" class="form-control" value="<?php echo $row['City']; ?>" type="text" data-bv-field="city"><i class="form-control-feedback" data-bv-icon-for="city" style="display: none;"></i>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">State:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="state" placeholder="Enter State" class="form-control" value="<?php echo $row['State']; ?>" type="text" data-bv-field="state"><i class="form-control-feedback" data-bv-icon-for="state" style="display: none;"></i>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Pincode:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="pincode" placeholder="Enter Pincode" value="<?php echo $row['Pincode']; ?>" class="form-control" type="number" data-bv-field="pincode"><i class="form-control-feedback" data-bv-icon-for="pincode" style="display: none;"></i>
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(+91)" class="form-control" value="<?php echo $row['Contact']; ?>" type="number" data-bv-field="contact_no"><i class="form-control-feedback" data-bv-icon-for="contact_no" style="display: none;"></i>
    </div>
  <small data-bv-validator="stringLength" data-bv-validator-for="contact_no" class="help-block" style="display: none;"></small></div>
</div>

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Centre Code:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="centre_code" placeholder="Centre Code" class="form-control" value="<?php echo $row['Centre_Code']; ?>" type="text" data-bv-field="centre_code"><i class="form-control-feedback" data-bv-icon-for="centre_code" style="display: none;"></i>
    </div>
  </div>
</div>

<div class="form-group has-feedback">
  <label class="col-md-4 control-label">Remarks:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="remark" class="form-control" value="<?php echo $row['Remark']; ?>" data-bv-field="remark"><i class="form-control-feedback" data-bv-icon-for="remark" style="display: none;"></i>
    </div>
  </div>
</div>


<!-- Select Basic -->

<!-- Success message 
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" id="add" class="btn btn-warning" value="UPDATE" name="s1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
</div>
</form>
</div>

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