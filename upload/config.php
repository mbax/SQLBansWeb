<?php
// This file is the configuration file for the web portion of SQLBans. This file's contents aren't visible to anyone in the public if your web server is set up correctly, so it's safe to store the passwords here.
// Below are the config values used throughout the entire SQLBans web installation.


// -------------- MySQL --------------

// The MySQL host to connect to. If this page is on the same server as the database server, it'll be localhost. Otherwise it'll be the IP address of the database server.
$config['mysql']['host'] = 'localhost';
// The MySQL port to connect to. Usually doesn't change unless specified by your host.
$config['mysql']['port'] = 3306;
// The MySQL user to connect with. PLEASE don't give it root. It'll work fine, but if someone somehow gets your root password, you're screwed.
$config['mysql']['user'] = 'minecraft';
// The MySQL user's password. Make sure it's nice and strong.
$config['mysql']['password'] = 'MyNewPassword123';
// The database where the SQLBans table is located.
$config['mysql']['database'] = 'MyDatabaseName';
// The name of the table in the above database for storing bans.
$config['mysql']['banstable'] = 'sqlb_bans';
// The name of the table in the above database for storing appeals.
$config['mysql']['appealtable'] = 'sqlb_appeals';



// -------------- General Config Flags --------------

// Should debug mode be on? This should always be off unless you have a specific reason for it to be on.
$config['debug'] = true;
// Have you read the instructions?
$config['inconspicuousValue'] = false;
// Warn the moderators about global bans using the FishBans global ban aggregator? http://fishbans.com for info on FishBans.
$config['useFishBans'] = true;
// Logo to use for all rendered pages.
$config['logoURL'] = 'http://araeosia.com/bans/logo.png';
// Use an array in this file (see Users and passwords) for storing users, or use a MySQL database? If set to false, the SQLUserDB settings must be set
$config['useSimpleAuth'] = true;
// These values only apply if useSQLUsers is set to true above. Explanations for each of these values can be found in the MySQL section.
$config['SQLUserDB']['host'] = '123.45.67.89';
$config['SQLUserDB']['port'] = 3306;
$config['SQLUserDB']['user'] = 'user';
$config['SQLUserDB']['password'] = 'MyNewPassword123';
$config['SQLUserDB']['database'] = 'MyDatabaseName';
$config['SQLUserDB']['table'] = 'userstable';



// -------------- Users and passwords --------------

// This only is used if useSimpleAuth is set to true.
$loginInfo = array(
	"AgentK" => "ASecretPassword",
	"mbaxter" => "tHiSiSsEcUr3!",
	"admin" => "password"
);
if($_GET['d']==1){ var_dump($config); }
?>