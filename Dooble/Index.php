<?php
session_start();
if(isset($_GET['txtb']) && !empty($_GET['txtb'])){
$fname = $_GET['txtb'];
$_SESSION['name'] = $fname;

header('Location:Process.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dooble</title>
<link rel="stylesheet" href="Css/Style.css"/>
</head>

<body>
<div id="main">
<div id="cntr">
<div id="txt">
<font color="#0066FF">D</font>
<font color="#CC0033">o</font>
<font color="#FFFF00">o</font>
<font color="#0066FF">b</font>
<font color="#00CC00">l</font>
<font color="#0066FF">e</font>
</div>
<form action="Index.php" method="GET">
<input type="text" id="txtb" name="txtb" /><br /><br />
<input type="submit" id="but" value="Search Now"/>
</form>
</div>
</div>
</body>
</html>