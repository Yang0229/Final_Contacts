<?php
session_start();
$_SESSION['fb_access_token']='';
unset($_SESSION['fb_access_token']);
header("Location:http://localhost/zy/api/coreui/login.php");
?>