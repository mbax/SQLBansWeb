<?php
/*
 * Core PHP Functions File
 */

require_once('../../config.php');
require_once('class.database.php');
require_once('class.timemanagement.php');
require_once('class.auth.php');

$sqlbans->database = new database($config['mysql']['user'], $config['mysql']['password'], $config['mysql']['host'], $config['mysql']['port'], $config['mysql']['database']);
$sqlbans->time = new time();
$sqlbans->auth = new auth($config['useSimpleAuth'], $loginInfo);

?>
