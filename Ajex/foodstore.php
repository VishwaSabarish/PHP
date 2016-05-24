<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

echo '<response>';
	$food = $_GET['food'];
	$foodArray = array('idle','dhosai','paniyaram','pongal','chappati','poori');
	if(in_array($food,$foodArray))
		echo 'We do have '.$food.'!';
	elseif($food=='')
		echo 'Enter a food you idiot';
	elseif($food=='karthi')
		echo 'Comedy pisu.. Ha!! Ha!!';
	elseif($food=='sabari')
		echo 'So Brilient Man and Awesome Hero!! of All !!!';
	else
		echo 'Sorry punk we dont sell no '.$food.'!';
echo '</response>';
?>