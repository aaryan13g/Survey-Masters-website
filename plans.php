<?php 
require_once "config.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Plans - SurveyMasters</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Roboto&display=swap" rel="stylesheet">
	<link href="//db.onlinewebfonts.com/c/9d08714b3c41ec105f124a3338f40b8d?family=Aquatico" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/940ace70d6c766e685a20dea33762abf?family=American+Typewriter" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/f0f58b59b775865d2e1e0029d3227832?family=CAMBRIA" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/4a00dd75d873f0f00731e87e4d7b026d?family=Berkshire+Swash" rel="stylesheet" type="text/css"/>
	<link rel="icon" href="images/icon.png">
</head>
<body>
<div class="menubar">
	<ul>
		<li style="float: left;padding-left: 150px;"><span><a href="home.php">SURVEY<span>MASTERS</span></a></span></li>
		<?php 
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
		{
			echo "<li style=\"padding-right: 100px; \"><a href=\"register.php\">Sign Up</a></li>";
			echo "<li><a href=\"login.php\">Login</a></li>";
		}
		else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
			echo "<li style=\"padding-right: 100px; \"><a href=\"logout.php\">logout</a></li>";
			echo "<li><a href=\"\" style=\"color: black; font-size: 20px;\">Hello! ";echo htmlspecialchars($_SESSION["username"]);
			echo "</a></li>";
		}
		?>
		<li><a href="blogs.php">Blogs</a></li>
		<li><a href="plans.php">Plans</a></li>
		<li><a href="survey.php">Surveys</a></li>
	</ul>
</div>
<div style="height: 120px"></div>	
<table class="plansmain" cellpadding="0">
	<tr>
		<td>
			<div class="planscontainer">	
				<table class="plantable">
					<tr><td class="planname"><strong>BASIC</strong></td></tr>
					<tr><td><span class="tick">&#10004;</span><strong>1 week</strong> Validity</td></tr>
					<tr><td><span class="tick">&#10004;</span><strong>24/7</strong> Assistance</td></tr>
					<tr><td><span class="tick">&#10004;</span>Multilingual Surveys</td></tr>
					<tr><td><span class="tick">&#10004;</span>Payments Accepted</td></tr>
					<tr><td><span class="tick">&#10004;</span>Unlimited Surveys for Specified Time Period</td></tr>
					<tr><td><span class="tick">&#10006;</span>Data Exports (CSV, PDF, PPT, XLS)</td></tr>
					<tr><td><span class="tick">&#10006;</span>Randomisation availabe</td></tr>
					<tr><td><span class="tick">&#10006;</span>Advanced analysis features</td></tr>
					<tr><td><span class="tick">&#10006;</span>Remove <strong>SurveyMasters</strong> Footer</td></tr>
					<tr><td class="planprice"><a href=""><strong>FREE</strong></a></td></tr>
				</table>
			</div>
		</td>
		<td>
			<div class="planscontainer">
				<table class="plantable">
					<tr><td class="planname"><strong>PREMIUM</strong></td></tr>
					<tr><td><span class="tick">&#10004;</span><strong>1 week</strong> Validity</td></tr>
					<tr><td><span class="tick">&#10004;</span><strong>24/7</strong> Assistance</td></tr>
					<tr><td><span class="tick">&#10004;</span>Multilingual Surveys</td></tr>
					<tr><td><span class="tick">&#10004;</span>Payments Accepted</td></tr>
					<tr><td><span class="tick">&#10004;</span>Unlimited Surveys for Specified Time Period</td></tr>
					<tr><td><span class="tick">&#10004;</span>Data Exports (CSV, PDF, PPT, XLS)</td></tr>
					<tr><td><span class="tick">&#10004;</span>Randomisation availabe</td></tr>
					<tr><td><span class="tick">&#10006;</span>Advanced analysis features</td></tr>
					<tr><td><span class="tick">&#10006;</span>Remove <strong>SurveyMasters</strong> Footer</td></tr>
					<tr><td class="planprice"><a href=""><strong>₹4999/m</strong></a></td></tr>
				</table>
			</div>
		</td>
		<td>
			<div class="planscontainer">
				<table class="plantable">
					<tr><td class="planname"><strong>ADVANCED</strong></td></tr>
					<tr><td><span class="tick">&#10004;</span><strong>1 week</strong> Validity</td></tr>
					<tr><td><span class="tick">&#10004;</span><strong>24/7</strong> Assistance</td></tr>
					<tr><td><span class="tick">&#10004;</span>Multilingual Surveys</td></tr>
					<tr><td><span class="tick">&#10004;</span>Payments Accepted</td></tr>
					<tr><td><span class="tick">&#10004;</span>Unlimited Surveys for Specified Time Period</td></tr>
					<tr><td><span class="tick">&#10004;</span>Data Exports (CSV, PDF, PPT, XLS)</td></tr>
					<tr><td><span class="tick">&#10004;</span>Randomisation availabe</td></tr>
					<tr><td><span class="tick">&#10004;</span>Advanced analysis features</td></tr>
					<tr><td><span class="tick">&#10004;</span>Remove <strong>SurveyMasters</strong> Footer</td></tr>
					<tr><td class="planprice"><a href=""><strong>₹9999/m</strong></a></td></tr>
				</table>
			</div>
		</td>
	</tr>
</table>
</div>
</body>
</html>