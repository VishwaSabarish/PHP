<?php
require 'connect.php';
session_start();

if(!empty($_SESSION['name'])){
$user=$_SESSION['name'];

$query='SELECT `id` FROM `reg` WHERE `username`='".$user."'';
$query_run=mysql_query($query);
if(mysql_num_rows($query_run)==1){
$id = mysql_result($query_run,0,'id');


}

}else{
die('404 Error!.');
}
?>