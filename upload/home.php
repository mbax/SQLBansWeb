<?php
include('includes/config.php');


?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<header id="logo">
		<!-- Logo -->
		<img src='<?php if(file_exists($config['logoURL'])){ echo $config['logoURL']; }else{ echo "images/defaultLogo.png"; } ?>' \>
    </header>
    <hr>
    <div id="main_content">
    	<!-- Content! -->
    	<p>Stuff and things like that</p>
    </div>
    <footer id="credits">
		<!-- Credits -->
		<p>Credits goes here</p>
	</footer>
</body>
</html>