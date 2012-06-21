<?php
include('config.php');
// Make sure that what we're searching for is safe to use in a query string. VERY important, don't remove.
$pubID = strtolower(htmlspecialchars($_GET['id']));
$databaseHandle = mysql_connect($config['mysql']['host'].":".$config['mysql']['port'], $config['mysql']['user'], $config['mysql']['host']) or die(mysql_error());
mysql_select_db($config['mysql']['database'], $databaseHandle) or die(mysql_error());
$query = mysql_query("SELECT * FROM ".$config['mysql']['appealstable']." WHERE pubid='$pubID'", $databaseHandle) or die(mysql_error());
$output = mysql_fetch_array($query);
$pageName = $output['username']."'s Ban Appeal";
if($output==false){
	$error = true;
	$pageName = "Error!";
	$errorMessage = "Unknown Ban ID. The ban must have expired or an internal error occured. Please try again.";
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $config['siteName']." - ".$pageName; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<header id="logo">
		<!-- Logo -->
		<img src='<?php if(file_exists($config['logoURL'])){ echo $config['logoURL']; }else{ echo "images/defaultLogo.png"; } ?>' \>
	</header>
	<hr>
	<div id="main_content">
		
	</div>
	<footer id="credits">
		<!-- Credits -->
		<p>Credits goes here</p>
	</footer>
</body>
</html>