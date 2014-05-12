<?php
	mysql_connect("mysql513.ixwebhosting.com", "C245771_gcom", "Gc7807576828") or die(mysql_error());
	mysql_select_db("C245771_gcom") or die(mysql_error());
	foreach ($_POST as $key => $value) {
		$_POST[$key] = mysql_real_escape_string($value);
	}

	foreach($_GET as $key => $value){
		$_GET[$key] = mysql_real_escape_string($value);
	}
?>