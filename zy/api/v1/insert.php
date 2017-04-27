<?php
//insert.php
//This page handles the inserting into the database of the new contact

require_once('db.inc.php');

//use one of these based on the parameters
header("Content-Type: application/json");
header("Content-Type: text/xml");
?>