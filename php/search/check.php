<?php

require 'connect.php';

session_start();

if(!empty($_SESSION['user'])){
$user = $_SESSION['user'];

}else{
die('Doesn\'t get the user details ? <a href="index.php">login </a>now');
}

?>
<style>

body{
background-image:url('image/check-bg.jpg');
}

form{
border-radius:5px;
height:100px;
width:300px;
border:1px solid red;
background-image:url('image/check-bg.jpg');
background-position:1000px 900px;
margin-top:20px;
float:right;
}

#txt{
border-radius:5px;
margin-left:20px;
height:30px;
}

#txt1{
margin-left:20px;
width:80px;
height:30px;
}

font{
display:block;
margin-top:15px;
margin-left:20px;
color:white;
}

#rbox{
width:600px;
border-radius:5px;
background-image:url('image/check-bg.jpg');
background-position:1312px 1084px;
border:1px solid red;
}
#but{
width:100px;
height:30px;
float:right;
margin-top:-25px;
margin-right:10px;
}
#tname{
color:yellow;
text-style:bold;
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

<form action="check.php" method="POST" >
<font><strong>Search Here !</strong></font>
<a href="upset.php"><input type="button" value="Insert Data !" id="but" />
</a><br>
<input type="text" name="search_key" id="txt" />
<input type="submit" value="Search !" id="txt1"/>
</form>

<div id="rbox">

<?php

if(isset($_POST['search_key']) && !empty($_POST['search_key'])){

	$skey = $_POST['search_key'];
	$query = "SELECT `name` FROM `adata` WHERE `name` LIKE '%".$skey."%'";
	$query_run =mysql_query($query);
	
	if(mysql_num_rows($query_run)>=1){
	
		echo '<font style="color:orange;">Result Found : </font><br><br>' ;
		
		while ($query_res = mysql_fetch_assoc($query_run)){
		
			echo '<font id="tname">'.$query_res['name'].'</font>';
			$qry = "SELECT `discrpts` FROM `adata` WHERE `name` = '".$query_res['name']."'";
			$qry_r = mysql_query($qry);
			
			if (mysql_num_rows($qry_r)>=1) {
			
				echo '<font style="color:white;">Description : </font>';
				
				while($q_res = mysql_fetch_assoc($qry_r)){
				
					echo '<font style="color:aqua;">'.$q_res['discrpts'].'</font><br><br>';
				}
				
			}else{
			
				echo '<font style="color:orange;">There is NO description About this ?</font>';
			
			}
		}
	 
	}else{
	
		echo '<font style="color:orange;">Result Not Found !</font><br>';
	}
}else{
	echo '<font style="color:orange;">Enter the text to search !</font><br>';
}
?>

</div>