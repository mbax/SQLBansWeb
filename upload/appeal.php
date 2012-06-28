<?php
session_start();
include('assets/classes/class.core.php');
$pubID = htmlentities(strtolower($_GET['id']));
$query = mysql_query("SELECT * FROM ".$config['mysql']['banstable']." WHERE id='$pubID'");
$result = mysql_fetch_array($query);
if($result==false){
	$error = true;
	$pageName = "Error!";
	$errorMessage = "Could not find a ban by that ID! This could mean that the ban expired, or that an internal error occured. Please try again.";
}

if($config['debug']){ error_reporting(E_ALL); }
if(isset($_POST['appealform'])){
	// Okay, so they've submitted their appeal.
	
}

?>
<html lang="en">
<head>
	<title><?php echo $config['siteName']." - ".$pageName; ?></title>
</head>
<body>
	<header id="logo">
		<!-- Logo -->
		<img src='<?php if(file_exists($config['logoURL'])){ echo $config['logoURL']; }else{ echo "assets/images/defaultLogo.png"; } ?>' \>
	</header>
	<hr>
	<!-- Main content -->
	<div id="main_content">
		<p>Text here</p>
		<footer id="credits">
	</div>
	<!-- Credits -->
	<footer id="credits">
		<p>Credits goes here</p>
	</footer>
</body>

</html>
