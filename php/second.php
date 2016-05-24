<?php
include 'index.php';
@$sabari = $_SESSION['name'];
echo 'session called !<br>';
$age = $_SESSION['age'];
echo $sabari.'<br>';
echo $age;

?>

