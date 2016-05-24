<?php
require 'connect.php';
session_start();
$no = rand(10000,99999);
if(!empty($_SESSION['secure'])){                             //capcha random number
	
	$_SESSION['secure'] = rand(1000,9999);
	
	

if(isset($_POST['sno']) && 
isset($_POST['user']) && 
isset($_POST['fname']) && 
isset($_POST['lname']) && 
isset($_POST['pass']) && 
isset($_POST['apass']) && 
isset($_POST['email'])&&
isset($_POST['secure']) && 
!empty($_POST['user']) && 
!empty($_POST['pass']) &&
!empty($_POST['user']) && 
!empty($_POST['fname']) && 
!empty($_POST['lname']) && 
!empty($_POST['pass']) && 
!empty($_POST['apass']) && 
!empty($_POST['email']) &&
!empty($_POST['secure'])){								//all the checkings here

	$sno  = $no;
	$user = $_POST['user'];
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$pass = $_POST['pass'];
	$apass= $_POST['apass'];
	$email= $_POST['email'];
	$capcha=$_POST['secure'];
	
	if($pass==$apass){								// password matching checker
	$pass_h = md5($pass);
	$real_c = $_SESSION['secure'];
	
	if($real_c == $capcha){		//capcha text checker
	
	$query = "INSERT INTO `login` VALUES ('','".$sno."','".$user."','".$fname."','".$lname."','".$pass_h."','".$email."')";
	$query_run = mysql_query($query);
	echo '<font style="color:blue;">Your sucessfully registered</font><br>';
	session_destroy();
	}
	}else{
	echo '<font style="color:red;">Password dosn\'t match.</font><br>';
	}
}else {
echo '<font style="color:red;">Fill all the fields..</font><br>';
}
}else{
	
	echo '<font style="color:red;">incorrect capcha text</font><br>';
	$_SESSION['secure'] = rand(1000,9999);
	}
?>

<style>
body{
background-image:url('image/register-bg.jpg');
}

form{
border:1px solid red;
width:500px;
margin-top:100px;
margin-left:100px;
color:white;
}

#but{
width:100px;
height:25px;
}


</style>

<form action="register.php" method="POST"><br>
	Enter secret no  : <br><input type="text" name="sno" value="<?php echo $no?>"/><br>
	Enter username   : <br><input type="text" name="user"/><br>
	Enter Firstname  : <br><input type="text" name="fname"/><br>
	Enter Lastname   : <br><input type="text" name="lname"/><br>
	Enter password   : <br><input type="password" name="pass"/><br>
	Again password   : <br><input type="password" name="apass"/><br>
	Enter Email      : <br><input type="text" name="email"/><br><br>
	<img src="generate.php"/><br>
	Enter text see here : <input type="text" name="secure" size="6" /><br>
	<input type="submit" value="Register now!" id="but"/><br><br>
</form>

Already have a accound <a href="index.php">login</a> here