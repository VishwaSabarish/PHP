<?php
session_start();
require 'connect.php';

if(!empty($_SESSION['name'])){
$fname = $_SESSION['name'];
}elseif(isset($_GET['txtb'])){
$fname = $_GET['txtb'];
}
?>
<style>
#txt{
	border-bottom:1px solid #CCC;
	height:40px;	
}
font{
	font-size:28px;
	float:left;
}
form{
	margin-left:200px;
	
}
#txtb{
	width:45%;
	height:30px;	
}
#but{
	height:30px;
	width:100px;
}
#tn{
	text-decoration:underline;
	margin-left:5%;
}
#td{
	float:left;
	margin-left:5%;
}
#ta{
	margin-left:10%;
}
</style>
<a href="index.php">
<div id="txt">
<font color="#0066FF">D</font>
<font color="#CC0033">o</font>
<font color="#FFFF00">o</font>
<font color="#0066FF">b</font>
<font color="#00CC00">l</font>
<font color="#0066FF">e</font>

<form action="Process.php" method="get">
<input type="text" name="txtb" id="txtb"/>
<input type="submit" value="Search Now" id="but"/>
</form>

</div>
</a>
<div>
<br>
<?php
	
if(!empty($fname)){

	$skey = $fname;
	$query = "SELECT `name` FROM `adata` WHERE `name` LIKE '%".$skey."%'";
	$query_run = mysql_query($query);
	
	if(mysql_num_rows($query_run)>=1){
	
		echo '<font style="color:orange;">Result Found : </font><br><br><br>' ;
		
		while ($query_res = mysql_fetch_assoc($query_run)){
		
			echo '<font id="tn" style="color:Blue">'.$query_res['name'].'</font><br><br>';
			$qry = "SELECT `discrpts` FROM `adata` WHERE `name` = '".$query_res['name']."'";
			$qry_r = mysql_query($qry);
			
			if (mysql_num_rows($qry_r)>=1) {
			
				echo '<font id="td">Description : </font><br><br>';
				
				while($q_res = mysql_fetch_assoc($qry_r)){
				
					echo '<font id="ta" style="color:brown;">'.$q_res['discrpts'].'</font><br><br><br>';
					
				}
				
			}else{
			
				echo '<font style="color:orange;">There is NO description About this ?</font>';
			
			}
		}
		if(!empty($_SESSION['name'])){
				session_destroy();
				}
	 
	}else{
	
		echo '<font style="color:orange;">Result Not Found !</font><br>';
	}
}else{
	echo '<font style="color:orange;">Enter the text to search !</font><br>';
}

?>
</div>
