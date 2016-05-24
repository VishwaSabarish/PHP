<?php
session_start();
session_destroy();

echo 'you sre logged out!';
header("Location:index.php");
?>