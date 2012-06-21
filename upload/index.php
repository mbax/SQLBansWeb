<?php
include('config.php');
if(!$config['inconspicuousValue']){ die('You didn\'t read the instructions. Shame.'); }
if(isset($_POST['username']) && isset($_POST['password'])){
	if($config['useSimpleAuth']){
		if($loginInfo[$_POST['username']]==$_POST['password']){
			// User and password check out. Assign the client a cookie and give them the admin home page.
			setcookie('username', $_POST['username'], time()+3600);
			$pageToOutput = 'home';
		}
	}
}
if($config['debug']){ $pageToOutput = $_GET['page']; }

switch($pageToOutput){
	case "home":
		echo 'htmlstuffgoeshere';
		break;
	case "banappeal":
		echo 'morehtmlstuffgoeshere';
		break;
	case "review":
		echo 'reviewing html stuff here';
		break;
	default:
		echo 'some MORE html stuff goes here!';
		break;
}
?>