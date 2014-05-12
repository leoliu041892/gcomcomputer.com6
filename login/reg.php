<?php
if(!isset($_POST['submit'])){
	exit('Unauthorized Access!');
}
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//check reg info
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	exit('Error: Username does not meet the requirements.<a href="javascript:history.back(-1);">Back</a>');
}
if(strlen($password) < 6){
	exit('Error: The password does not meet the requirements.<a href="javascript:history.back(-1);">Back</a>');
}
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('Error: E-mail format error.<a href="javascript:history.back(-1);">Back</a>');
}
//include mysql connection
include('conn.php');
//Detecting whether the user name already exists
$check_query = mysql_query("select uid from user where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
	echo 'Error: Username ',$username,' is already exists¡£<a href="javascript:history.back(-1);">Back</a>';
	exit;
}
//wirte data
$password = MD5($password);
$regdate = time();
$sql = "INSERT INTO user(username,password,email,regdate)VALUES('$username','$password','$email',$regdate)";
if(mysql_query($sql,$conn)){
	exit('User registration is successful! Click here <a href="index.html">Sign in</a>');
} else {
	echo 'Sorry! Adding data failed:',mysql_error(),'<br />';
	echo 'Click here <a href="javascript:history.back(-1);">Back</a> Try again';
}
?>
