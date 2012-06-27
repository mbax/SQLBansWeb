<?php

/*
 * Core Database Class
 */

class database {

	public $table;
	
	public function __construct($user, $pass, $host, $port, $database, $table){
	
		$link = mysql_connect($host.':'.$port, $user, $pass);
		
		$this->table = $table;
		
		if (!$link) {
		    die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($database);
		
	}
	
	public function getBan($id){
		
		$banID = htmlentities(strtolower($id));
		
		$query = mysql_query("SELECT * FROM ".$this->table." WHERE id='$banID'");
		
		return mysql_fetch_array($query);
		
	}

}

?>