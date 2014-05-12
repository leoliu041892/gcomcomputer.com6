<?php
	//Connect to database server
	mysql_connect("mysql513.ixwebhosting.com", "C245771_gcom", "Gc7807576828") or die(mysql_error());
	mysql_select_db("C245771_gcom") or die(mysql_error());

	// Necessary security against MySQL injections
	
	//Stop SQL injections in POST vars
	
?>