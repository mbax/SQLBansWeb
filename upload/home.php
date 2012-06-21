<?php
include('config.php');

if($config['debug']){ $appeals = array( 1=>array( 'id' => 'fj4d7m2', 'name' => 'AgentKid', 'mod' => 'tips48', 'time' => 1340276385, 'duration' => 500000, 'reason' => 'You are too smart for our server.', 'approved' => false)); }

function getTimeFromSeconds($init){
	$years = floor($init / 31536000);
	$init = $init-($years*31536000);
	$months = floor($init / 2628000);
	$init = $init-($months*2628000);
	$weeks = floor($init / 604800);
	$init = $init-($weeks*604800);
	$days = floor($init / 86400);
	$init = $init-($days*86400);
	$hours = floor($init / 3600);
	$init = $init-($hours*3600);
	$minutes = floor($init / 60);
	$init = $init-($minutes*60);
	$seconds = $init;
	if($years>1){ $out = $years." years, ";}
	if($years==1){ $out = $years." year, ";}
	if($months>1){ $out = $out.$months." months, ";}
	if($months==1){ $out = $out.$months." month, ";}
	if($weeks>1){ $out = $out.$weeks." weeks, ";}
	if($weeks==1){ $out = $out.$weeks." week, ";}
	if($days>1){ $out = $out.$days." days, ";}
	if($days==1){ $out = $out.$days." day, ";}
	if($hours>1){ $out = $out.$hours." hours, ";}
	if($hours==1){ $out = $out.$hours." hour, ";}
	if($minutes>1){ $out = $out.$minutes." minutes, ";}
	if($minutes==1){ $out = $out.$minutes." minute, ";}
	if($seconds>1){ $out = $out.$seconds." seconds ";}
	if($seconds==1){ $out = $out.$seconds." second ";}
	return $out;
}

$appealDatabaseHandle = mysql_connect($config['mysql']['host'].":".$config['mysql']['port'], $config['mysql']['user'], $config['mysql']['host']) or die(mysql_error());
mysql_select_db($config['mysql']['database'], $appealDatabaseHandle) or die(mysql_error());
$query = mysql_query("SELECT * FROM ".$config['mysql']['appealstable'], $appealDatabaseHandle) or die(mysql_error());
$appeals = array();
while($row = mysql_fetch_array($query)){
	$pubID = $row['pubid'];
	$push = array('id' => $row['pubid'], 'name' => $row['username'], 'mod' => $row['admin'], 'time' => $row['time'], 'duration' => $row['duration'], 'reason' => $row['reason'], 'status' => $row['status']);
	array_push($appeals, $push);
}
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
		<table id="Banned" width='90%' border='1' cellpadding='5' cellspacing='5'>
			<!-- 
			Banned table
			Colums:
			Name - Moderator - Time Banned - Ban Duration - Reason - Approved
			-->
			<tr>
				<th colspan='6'><p style='font-size:24px;'>Ban Appeals</p></th>
			</tr>
			<tr>
				<th>Name</th>
				<th>Moderator</th>
				<th>Time Banned</th>
				<th>Ban Duration</th>
				<th>Reason</th>
				<th>Approved</th>
			</tr>
			<?php foreach($appeals as $appeal){ echo "<tr><td><a href='".$config['rootdomain']."/review.php?id=".$appeal['id']."'>".$appeal['name']."</a></td><td>".$appeal['mod']."</td><td>".date("F j, Y, g:i a", $appeal['time'])."</td><td>".getTimeFromSeconds($appeal['duration'])."</td><td>".$appeal['reason']."</td><td>";
			if($appeal['status']=='approved'){ echo "<div style='font-color:green;'>Approved</div>"; }elseif($appeal['status']=='unapproved'){ echo "<div style='font-color:grey;'>Not approved</div>";}elseif($appeal['status']=='denied'){ echo "<div style='font-color:red;'>Denied</div>";}
			echo "</td></tr>"; } ?>
		</table>
	</div>
	<footer id="credits">
		<!-- Credits -->
		<p>Credits goes here</p>
	</footer>
</body>
</html>