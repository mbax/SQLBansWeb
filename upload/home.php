<?php
session_start();
include('assets/classes/class.core.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $config['siteName']; ?> - Home</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
	<header id="logo">
		<!-- Logo -->
		<img src="assets/images/logo.png" />
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
			<?php 
			
				/*
				 * Select all Appeals
				 */
				$query = mysql_query("SELECT * FROM ".$config['mysql']['appealstable'])or die(mysql_error());
			
					while($appeal = mysql_fetch_assoc($query)){

						switch($appeal['status']){
							case 'approved':
								$isApproved = "<div style='font-color:green;'>Approved</div>";
								break;
							case 'unapproved':
								$isApproved = "<div style='font-color:grey;'>Not approved</div>";
								break;
							case 'denied':
								$isApproved = "<div style='font-color:red;'>Denied</div>";
								break;
						}

						echo "<tr>
								<td>
									<a href='".$config['rootdomain']."/review.php?id=".$appeal['pubid']."'>".$appeal['username']."</a>
								</td>
								<td>
									".$appeal['admin']."
								</td>
								<td>
									".date("F j, Y, g:i a", $appeal['time'])."
								</td>
								<td>
									".$sqlbans->time->secToTime($appeal['duration'])."
								</td>
								<td>
									".$appeal['reason']."
								</td>
								<td>
									".$isApproved."
								</td>
							</tr>"
					}
			?>
		</table>
	</div>
	<footer id="credits">
		<!-- Credits -->
		<p>Credits goes here</p>
	</footer>
</body>
</html>