<?php
$host ='localhost';
$user ='root';
$pass ='';

$data ='register';
$error ='<font style="color:red;">Database could not be connect check settings !</font>';
if(!mysql_connect($host,$user,$pass) || !mysql_select_db($data)){

die($error);
}


?>