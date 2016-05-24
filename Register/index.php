<!DOCTYPE html>
<html>
  <head>
    <title>Sabarish</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
</head> 
<body onLoad="Loadme()">

<?php
require 'connect.php';

if(isset($_POST['fname']) && 
isset($_POST['lname']) && 
isset($_POST['email']) && 
isset($_POST['ph']) && 
isset($_POST['addr']) &&
isset($_POST['country']) &&
isset($_POST['command']) &&
isset($_POST['usern']) && 
isset($_POST['pass'])){

if(!empty($_POST['fname']) && 
!empty($_POST['lname']) && 
!empty($_POST['email']) && 
!empty($_POST['ph']) && 
!empty($_POST['addr']) &&
!empty($_POST['country']) &&
!empty($_POST['command']) &&
!empty($_POST['usern']) && 
!empty($_POST['pass'])){

$fname = htmlentities($_POST['fname']); 
$lname = htmlentities($_POST['lname']); 
$email = htmlentities($_POST['email']); 
$ph = htmlentities($_POST['ph']); 
$addr = htmlentities($_POST['addr']);
$country = htmlentities($_POST['country']);
$command = htmlentities($_POST['command']);
$usen = htmlentities($_POST['usern']); 
$pass = htmlentities($_POST['pass']);

$pass_h = md5($pass);

$query = "INSERT INTO `reg` VALUES ('','".$fname."','".$lname."','".$email."','".$ph."','".$addr."','".$country."','".$command."','".$usen."','".$pass."')";

if(mysql_query($query)){
echo '<div class="alert alert-success span8 offset6">
<button type="button" class="close" data-dismiss="alert">x</button>
 <strong>Oh Yeah!,</strong>Successfully created !
</div>';
/*for(i=0;i<=100;i++){

}
$_SESSION['name'] = $usen;
header('Location:success.php');*/
}else{
echo '<div class="alert alert-error span8 offset6">
    <button type="button" class="close" data-dismiss="alert" id="close" onclick="$(\'.alert\').hide();">x</button>
    <strong>OH No!,</strong>Could not create registeration !
         </div>';
}
}else{
echo '<div class="alert alert-error span8 offset6">
    <button type="button" class="close" data-dismiss="alert" id="close" onclick="$(\'.alert\').hide();">x</button>
    <strong>Sorry!,</strong>Fill All THe Fields !
         </div>';
}

}
?>
<div class="span12">
<div class="row"></div>
</div>
<div class="span8 offset6 well well-large">
<form action="index.php" method="POST">
  <fieldset>
    <legend><i class="icon-leaf"></i>Register now  <p class="close" id="close" onclick="$('div').hide();">&times;</p></legend>
<div class="row">
<span class="span4"><label for="first">First name  :</label><input type="text" name="fname" id="first" value=""></span>
<span class="span4"><label for="last">Last name  :</label><input type="text" name="lname" id="last" value=""></span>
<span class="span4 help-block"><p class="text-error hide" id="1">Please fill this field .</p></span>
<span class="span4 help-block"><p class="text-error hide" id="2">Please fill this field .</p></span>
</div>
<div class="row">
<span class="span4"><label>Email  :</label><input type="text" name="email" class="span4" id="mail" value=""></span>
<span class="span4"><label>Phone  :</label><input type="text" name="ph" id="ph" value=""></span>
<span class="span4 help-block"><p class="text-error hide" id="3">Please fill this field .</p></span>
<span class="span4 help-block"><p class="text-error hide" id="4">Please fill this field .</p></span>
</div>

<label>Address  :</label><textarea maxlength="250" name="addr" rows="4" id="addr" value=""></textarea>
<span class="help-block"><p class="text-error hide" id="5">Please fill this field .</p></span>
<label>Country  :</label><select name="country" id="country" value="">
<option value="">Select Any one</option>
<option>America</option>
<option>Australia</option>
<option>Britan</option>
<option>Bermuda</option>
<option>Boston</option>
<option>China</option>
<option>Londan</option>
<option>Los vegas</option>
<option>India</option>
<option>Indonasia</option>
</select>
<span class="help-block"><p class="text-error hide" id="6">Please fill this field .</p></span>
<label>Comment  :</label><textarea rows="4" name="command" value=""></textarea>
<label>Username  :</label><input type="text" name="usern" id="user" value="">
<span class="help-block"><p class="text-error hide" id="7">Please fill this field .</p></span>
<label>Password  :</label><input type="password" name="pass" id="pass" value="">
<span class="help-block"><p class="text-error hide" id="8">Please fill this field .</p></span><br><br>
<input type="submit" value="Register!" class="span2 btn btn-primary" id="register">
<input type="Reset" value="Clear all" class="btn btn-danger pull-right"></fieldset>
</form></div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<!--<script type="text/javascript" src="javas.js"></script>-->
<script type="text/javascript" src="js/validation.js"></script>
  </body>
</html>