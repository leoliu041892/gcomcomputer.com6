<?php
session_start();

//Log Out
if($_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo 'Log out successfully! Click Here <a href="index.html">Sign in</a>';
	exit;
}

//Sign in
if(!isset($_POST['submit'])){
	exit('Unauthorized Access!');
}
$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//mysql 
include('conn.php');
//username and password check
$check_query = mysql_query("select uid from user where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
	//sign in successfully
	$_SESSION['username'] = $username;
	$_SESSION['userid'] = $result['uid'];
	echo $username,' Welcome to <a href="my.php">User Center</a><br />';
    echo $username,'Weclcome to <a href="/invoice/">Items Center</a><br />';
	echo 'Please Click here to <a href="login.php?action=logout">Sign Out</a> Sign In!<br />';
	exit;
} else {
	exit('Login Fail! Click here <a href="javascript:history.back(-1);">Back</a> Try again');
}
?>