<?php
	mysql_connect("localhost", "gcom", "hjNANBL7fwtMxqmE") or die(mysql_error());
	mysql_select_db("gcom") or die(mysql_error());
	foreach ($_POST as $key => $value) {
		$_POST[$key] = mysql_real_escape_string($value);
	}

	foreach($_GET as $key => $value){
		$_GET[$key] = mysql_real_escape_string($value);
	}
?>