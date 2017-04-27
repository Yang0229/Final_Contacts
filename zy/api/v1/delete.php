<?php
//update.php
//This page handles the updating of an existing contact

require_once('db.inc.php');

$id=$_GET['id'];
if((string)((int)($id))!==$id)
    echo "非法ID";
else
{
    $sql="DELETE FROM mad9023_contacts WHERE contact_id=".$id;
    $res=$pdo->exec($sql);
    echo "<script> alert('delete sucess');parent.location.href='../coreui/index.php'; </script>";
}

?>