<?php
include('config.php');
if(!$config['inconspicuousValue']){ die('You didn\'t read the instructions. Shame.'); }
if(isset($_POST['username']) && isset($_POST['password'])){
	if($config['useSimpleAuth']){
		if($loginInfo[$_POST['username']]==$_POST['password']){
			// User and password check out. Assign the client a cookie and route them to the home page.
			setcookie('username', $_POST['username'], time()+3600);
			header('Location: '.$config['rootdomain'].'home.php') ;
		}else{
			$error = true;
			$errorMessage = "Username or password incorrect! Please try again.";
		}
	}else{
		$userDatabaseHandle = mysql_connect($config['SQLUserDB']['host'].":".$config['SQLUserDB']['port'], $config['SQLUserDB']['user'], $config['SQLUserDB']['host']);
		mysql_select_db($config['SQLUserDB']['host'], $userDatabaseHandle);
	}
}
if($config['debug']){ error_reporting(E_ALL); }
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Website title</title>
</head>
<body>
<?php if($error){ echo "The error code's html brackets ".$error." the closing brackets."; }?>
	<header id="logo">
		<!-- Logo -->
		<p>The logo goes.....HERE!</p>
	</header>
	<hr>
	<!-- Login fields here, stuff like that. -->
	<form name="login" action="#" method="post">
		Username: <input type="text" name="username"/><br>
		Password: <input type="password" name="password"/><br>
		<input type="submit" vaule="Login">
	</form>
	<div id="main_content">
		<p>Welcome! No clue why your here, but let's get to know each other!</p>
		<br>
		<p>My name is tips48. You might wonder why i'm talking. Well, let me tell you a secret</p>
		<p>Can you hear me?</p>
		<br>
		<br>
		<br>
		<p>It's because I will use this to check the styling and the font!</p>
		<p>Also, my favorite number is 123456789</p>
		<br>
		<p>In case you were wondering</p>
	</div>
	<footer id="credits">
		<!-- Credits -->
		<p>Credits goes here</p>
	</footer>
</body>
</html>