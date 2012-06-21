<?php

/*
 * Core Database Class
 */

class database {

	public function __construct($user, $pass, $host, $port, $database){
	
		$link = mysql_connect($host.':'.$port, $user, $pass);
		
		if (!$link) {
		    die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($database);
		
	}

}

?>