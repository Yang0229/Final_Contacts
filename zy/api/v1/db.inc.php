<?php
//db.inc.php

$dbname = "yang0229";
$dbuser = "yang0229";
$dbpass = "40861816";
$dbhost = "localhost";

try{
    $pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpass);
}catch(PDOException $err){
    header('HTTP/1.1: 500');
    echo "Database connection problem" . $err->getMessage();
    exit();
}
?>
