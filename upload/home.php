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
    	<table id="Banned">
    		<!-- 
    		Banned table
    		Colums:
    		Name - Moderator - Time - Reason - Approved
    		-->
            <tr>
            	<th>Name</th>
            	<th>Moderator</th>
            	<th>Time</th>
            	<th>Reason</th>
            	<th>Approved</th>
            </tr>
            <tr>
                <td>User1234</td>
                <td>SuperModerator1</td>
                <td>12:32AM</td>
                <td>Being a general idiot</td>
                <td>False</td>
            </tr>
    	</table>
    </div>
    <footer id="credits">
		<!-- Credits -->
		<p>Credits goes here</p>
	</footer>
</body>
</html>