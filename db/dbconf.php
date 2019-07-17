<?php
	define("HOST_NAME", "");
	define("USERNAME", "");
	define("PASSWORD", "");
	define("DB_NAME", "");

	$db = new mysqli('', '', '', '');

	if ($db->connect_error) {
		echo "Error: Connection)";
	}	
?>