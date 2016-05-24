<?php
require 'connect.php';

session_start();

if(!empty($_SESSION['user'])){
$user = $_SESSION['user'];

}else{
die('Doesn\'t get the user details ? <a href="index.php">login </a>now');
}

if(isset($_POST['aname']) && isset($_POST['adescrip']) && !empty($_POST['aname']) && !empty($_POST['adescrip'])){
	$aname = $_POST['aname'];
	$adescrip = $_POST['adescrip'];
	
	$check = "SELECT `name` FROM `adata` WHERE `name`='.$aname.'";
	$qry_r = mysql_query($check);
	$count = strlen($_POST['aname']);
	$dcount = strlen($_POST['adescrip']);
	if(!mysql_num_rows($qry_r)>=1 && $count>=5 && $dcount>=10){

		$query = "INSERT INTO `adata` VALUES ('','".$aname."','".$adescrip."')";
		$query_run = mysql_query($query);
		echo '<font id="mage">Datas are successfully Updated !</font>';
		echo '<hr>';
		
	}else{
		echo '<font  id="masge">Already in the database !</font><br>';
		echo '<font  id="masge">Or name length is small </font><br>
		<font  id="masge">name length minimum 5 </font><br>
		<font  id="masge">and description lentgh minimum 10</font>';
		echo '<hr>';
	}
}else {
	echo '<font  id="masge">Empty value not updated !</font>';
	echo '<hr>';
}
?>

<style>
body{
background-image:url('image/data-bg.jpg');
}

form{
margin-top:50px;
margin-left:500px;
color:orange;
border:1px solid white;
border-radius:10px;
width:500px;
height:550px;
}

#txt1{
margin-left:52px;
width:200px;
height:30px;
border-radius:5px;
}

#masge{
font-size:25px;
margin-left:530px;
color:red;
}

#mage{
font-size:25px;
margin-left:530px;
color:blue;
}

#txt2{
height:100px;
margin-left:96px;
width:200px;
border-radius:5px;
}

#tp{
position:absolute;
}

#but{
width:200px;
height:30px;
float:right;
border-radius:5px;
}

p{
position:relative;
margin-top:0px;
display:block;
color:white;
}

a{
color:white;
}

</style>

<?php echo '<p>Welcome  \''.$user.'\' ,</p>';?>
<?php echo '<a href="logout.php">Logout</a>'?>

<form action="upset.php" method="POST">
<br><br>
<font style="text-decoration:underline;">Enter the corsponded data to add it to the data base.. </font><br><br>
<strong>i)</strong> Enter the <strong>Name </strong> of the Information to the name text box.<br><br>
<strong>ii)</strong> Enter the <strong>Description details </strong>of Information to the description text box..<br><br>
<strong>iii)</strong> Click the <strong>Insert Data</strong> button to Insert the data to data base..<br>
<br><br><br>
Name  :<input type="text" name="aname" id="txt1" maxlength="12"/><br><br>
<font id="tp">Description :</font><textarea name="adescrip" id="txt2"></textarea><br><br>
<input type="submit" value="Insert Data !" id="but"/><br><br>
<input type="reset" value="Clear All !" id="but"/><br><br>
<a href="check.php"><input type="button" value="Check Data !" id="but" /></a>
</form>