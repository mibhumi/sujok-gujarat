
<?php 
session_start();

 $_SESSION['updateid']=$_REQUEST['updateid'];
 header('location:updatepro.php');
 ?>