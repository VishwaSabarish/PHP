<?php
session_start();

$_SESSION['name'] ='selva';
$_SESSION['age'] = 21;

echo 'session created !<br>';
session_destroy();
?>