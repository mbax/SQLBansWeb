<?php
session_start();
include('assets/classes/class.core.php');

if($config['debug']){ error_reporting(E_ALL); }

/*
 * Handle Login
 */
if(isset($_GET['do']) && $_GET['do'] == 'login'){

	$username = mysql_real_escape_string($_POST['username']);
	$password = $_POST['password'];
	
	
	/*
	 * If Login is Successful $e is set to 'false', and two sessions are set.
	 */
	$e = true;
	if($sqlbans->auth->doLogin($username, $password) === true){
	
		$sqlbans->auth->setSession();
		$e = false;
	
	}
	
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $config['siteName']; ?> - Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
	<header id="logo">
		<!-- Logo -->
		<img src="assets/images/logo.png" />
	</header>
	<hr>
	<!-- Login fields -->
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