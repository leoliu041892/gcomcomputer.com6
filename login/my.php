<?php
session_start();

//Detect whether logged in, if not then go to the login screen 
if(!isset($_SESSION['userid'])){
	header("Location:index.html");
	exit();
}

include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where uid=$userid limit 1");
$row = mysql_fetch_array($user_query);
echo 'User Info:<br />';
echo 'User ID:',$userid,'<br />';
echo 'User Name:',$username,'<br />';
echo 'E-mail:',$row['email'],'<br />';
echo 'Registration Date:',date("Y-m-d", $row['regdate']),'<br />';
echo '<a href="login.php?action=logout">Sign Out</a> Sign In<br />';
?>