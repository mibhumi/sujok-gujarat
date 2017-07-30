<?php

$updateadm=$_GET['uid'];

session_start();

$_SESSION["updateadm"]=$updateadm;
echo $updateadm;
header('location:adminupdate.php');

?>