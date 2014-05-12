<?php
/*****************************
*sql connect
*****************************/
$conn = @mysql_connect("mysql513.ixwebhosting.com", "C245771_gcom", "Gc7807576828");
if (!$conn){
	die("connection error!" . mysql_error());
}
mysql_select_db("C245771_gcom", $conn);

foreach ($_POST as $key => $value) {
		$_POST[$key] = mysql_real_escape_string($value);
	}

	foreach($_GET as $key => $value){
		$_GET[$key] = mysql_real_escape_string($value);
	}
?>