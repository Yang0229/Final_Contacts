<?php
$contact_first=$_POST['contact_first'];
$contact_last=$_POST['contact_last'];
$contact_email=$_POST['contact_email'];
require_once('../v1/db.inc.php');
$sql="INSERT INTO mad9023_contacts(contact_first,contact_last,contact_email) VALUES ('".$contact_first."','".$contact_last."','".$contact_email."')";
$result=$pdo->query ($sql);
echo "<script> alert('add sucess');parent.location.href='../coreui/index.php'; </script>";

?>