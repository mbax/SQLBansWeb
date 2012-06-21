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
		// Use the MySQL database.
	}
}
if($config['debug']){
	$pageToOutput = $_GET['page'];
	error_reporting(E_ALL);
}
?>
<html>
<head>
<!-- More stuff here. Whatevs -->
</head>
<body>
<?php if($error){ echo "The error code's html brackets ".$error." the closing brackets."; ?>

<!-- Login fields here, stuff like that. -->
</body>
</html>