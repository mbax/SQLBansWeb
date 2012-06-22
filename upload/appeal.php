<?php
session_start();
include('assets/classes/class.core.php');

if($config['debug']){ error_reporting(E_ALL); }

?>
<html>
<head>
	<title><?php echo $config['siteName']." - ".$pageName; ?></title>
</head>
<body>
