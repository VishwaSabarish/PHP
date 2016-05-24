<?php
require 'connect.php';
$page = 'register.php';
session_start();

if(isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['pass'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$password_h = md5($password);
	
	$query = "SELECT `username` FROM `login` WHERE `username` = '".$username."' AND `password` = '".$password_h."'";
	$query_run = mysql_query($query);
	
	if(mysql_num_rows($query_run)==1){
	$name_user = mysql_fetch_assoc($query_run);
	$_SESSION['user'] = $name_user['username'];
	header('Location:home.php');
	
	}else{
	
	echo '<font id="red">Invaild Username and password .</font>';
	
	}

}else{

	echo '<font id="red">Sorry enter the Username & password !</font>';
}

		

?>

<style>
body{
background-image:url('image/login-bg.jpg');
color:white;
}

#red{
color:red;
font-size:25px;
margin-left:300px;
}

#green{
color:green;
font-size:25px;
margin-left:300px;
}

form{
margin-top:200px;
margin-left:300px;
width:300px;
border:1px solid aqua;
border-radius:5px;
}

#but{
width:100px;
height:25px;
}

#butt{
float:right;
margin-top:5px;
width:100px;
height:25px;
color:yellow;
}
</style>

<form action="index.php" method="POST"><br>
	Username : <br><input type="text" name="user"/><br>
	Password : <br><input type="password" name="pass"/><br><br>
	<input type="submit" value="Login !" id="but"/>
	<a href="<?php echo $page;?>" id="butt">Register now</a><br><br>
</form>
