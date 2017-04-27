<?php
$contact_id=$_POST['id'];
$contact_first=$_POST['contact_first'];
$contact_last=$_POST['contact_last'];
$contact_email=$_POST['contact_email'];
require_once('../v1/db.inc.php');
$sql="update mad9023_contacts set contact_first='".$contact_first."',contact_last='".$contact_last."',contact_email='".$contact_email."' where contact_id=".$contact_id;
$result=$pdo->query ($sql);
echo "<script> alert('edit sucess');parent.location.href='../coreui/index.php'; </script>";

?>