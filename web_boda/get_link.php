<?php
// get database Connection and check if there is a valid link
$link=null;
require_once('MySQLi.class.php');
$db = new MySQL_Wrapper("boda.epizy.com", "link", "pass", "db_name");
$link  = $db->getOneRow("SELECT * FROM link LIMIT 1");

//Redirect to the valid link or to the waiting page
if(isset($link)){
    header("Location: $link");
}
else{
    header("Location: link_espera.html");
}


?>