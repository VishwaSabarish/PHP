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
background-image:url('image/home-bg.jpg');
}

#big{
color:white;
background-image:url('image/home-bg.jpg');
background-position:-19px -101px;
border:1px solid red;
border-radius:5px;
margin-top:100px;
margin-bottom:20px;
margin-left:10px;
margin-right:20px;
height:500px;
}

#head{
height:120px;
border-bottom:1px solid red;
}

#wlogo{
float:left;
border-radius:60px;
margin-top:10px;
margin-left:10px;
height:100px;
width:200px;
}

h1{
margin-left:100px;
float:left;
font-size:42px;
color:yellow;
}

marquee{
position:absolute;
margin-top:80px;
color:pink;
width:500px;
margin-left:-468px;
}

#tlogo{
border-radius:10px;
float:right;
margin-top:10px;
margin-right:10px;
height:100px;
width:200px;
}

#lbody{
float:left;
height:224px;
width:600px;
border:1px solid red;
font-size:28px;
}

#rbody{
float:right;
height:224px;
width:600px;
border:1px solid red;
font-size:28px;
}

#bimage{
float:left;
border:1px solid red;
height:224px;
width:329px;
}

#bimg{
margin-top:10px;
margin-left:10px;
height:202px;
width:310px;
}

#button{
cursor:pointer;
height:50px;
width:200px;
font-size:20px;
margin-left:180px;
}

#foot{
margin-top:325px;
border-top:1px solid red;
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

<?php echo '<p>Welcome  \''.$user.'\' ,</p>';
?>
<?php echo '<a href="logout.php">Logout</a>'?>

<div id="big">
	<div id="head">
		<img src="image/wlogo.jpg" id="wlogo"/>
		<h1>Welcome to the site Boss !</h1>
		<marquee behavior="scroll">This is index (or) home page for Data 
		examples HAVE A NICE DAY BOSS ! </marquee>
		<img src="image/tlogo.jpg" id="tlogo"/>
	</div>
	
	<div id="lbody">
		This Section is explain the Insert the data to database here you can update your searcher here !
		click the below button to go to the page <br><br>	
		<a href="upset.php"><input type="submit" value="Insert Data !" id="button" /></a>
	</div>
	
	<div id="bimage">
	<img src="image/blogo.jpg" id="bimg"/>
	</div>

	<div id="rbody">
		This Section is explain the check the data to database here you can check your searcher here !
		click the below button to go to the page <br><br>
		<a href="check.php"><input type="submit" value="Check Data !" id="button" /></a>
	</div>
	
	<footer id="foot">
		This site is not duplicated from other sites <br>
			copyrights recived by -BOSS
	</footer>

</div>