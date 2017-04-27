v <?php
//select.php
//This page handles the retrieval and sorting of lists of contacts

require_once('db.inc.php');


//use one of these based on the parameters
header("Content-Type: application/json");
header("Content-Type: text/xml");
?>