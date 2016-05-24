<?php
if(isset($_POST['text'])){
$text = $_POST['text'];
$hash = md5($text);
echo $hash;
}else{
echo 'enter the text to hash';
}
?>

<form action="md5.php" method="POST">
Enter the text to hash :<br><input type="text" name="text"/>
<input type="submit" value="Get"/>
</form>