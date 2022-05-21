<?php
// get database Connection and check if there is a valid link
$link=null;
require_once('MySQLi.class.php');
$db = new MySQL_Wrapper("sql210.epizy.com", "epiz_29161641", "WM3kpvvNdvYxY", "epiz_29161641_boda");
$data  = $db->getOneRow("SELECT * FROM boda LIMIT 1");
$link=$data["link"];

//Redirect to the valid link or to the waiting page
if(isset($link)){
    header("Location: $link");
}
else{
    header("Location: link_espera.html");
}


?>