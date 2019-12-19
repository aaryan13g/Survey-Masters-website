<?php 
require_once "config.php";
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>SurveyMasters</title>
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
<div style="height: 80px;"></div>
<div class="banner" style="background-image: url(images/bg.jpg);background-size: cover; background-repeat: no-repeat; background-position: center;">
	<div class="mess">Get all answers you need!
		<div class="submess">We get answers for 20 million questions daily. Get the feedback you need with a global leader in survey software.</div>
	</div><br><br><br><br><br>
	<div class="arrow"><a href="#test" class="arrow" style="color: #414141;">EXPLORE<br>&#8595;</a></div> 
</div>
<a name="test"></a>	
<br><br><br><br><br>
<div class="test">
	<div class="cust">
		<table style="width: 100%;height: 20%;"><tr><td class="testcust">What our customers have to say !?</td></tr></table>
		<table style="width: 100%;height: 80%; border-collapse: collapse;box-shadow: 0px 0px 20px #E5E5E5;">
			<tr style="height: 50%;">
				<td style="width: 35%;padding:0% 10%;background-color: #E1F8EB">We've always been a customer-focused company, but SurveyMasters helps us be even more centered on that.</td>
				<td style="width: 15%;background-color: #AFA2FF;"><img class="apple" src="images/apple.png" height="75px"></td>
				<td style="width: 15%;background-color: #1B5299;"><img class="google" src="images/google.svg" height="40px"></td>
				<td style="width: 35%;padding:0% 10%;">Google is committed to delighting the community. Surveys are the way we track whether we are meeting this commitment.</td>
			</tr>
			<tr style="height: 50%;">
				<td style="width: 35%;padding:0% 10%;">SurveyMasters is one of our foundational tools.</td>
				<td style="width: 15%;background-color: #702963;"><img class="un" src="images/un.png" height="85px"></td>
				<td style="width: 15%;background-color: #C490D1;"><img class="tm" src="images/tm.png" height="100px"></td>
				<td style="width: 35%;padding:0% 10%;background-color: #E1F8EB">SurveyMasters has really been helpful for us to understand where our trends are going and really helps us predict things.</td>
			</tr>
		</table>
	</div>
</div>
<br><br><br>
<div style="position: absolute; left:0px;">
	<table style="width:100%;"><tr><td style="background-color: #E1F8EB;"><img src="images/brands.png" width="100%"/></td></tr></table>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="pricing">
	<table style="height: 100%;width: 100%;border-collapse: collapse;">
		<tr><td class="testcust" colspan="2" align="center" style="height: 20%;font-weight: bold;">What do we offer?</td></tr>
		<tr>
			<td class="individual" align="center">
				<img src="images/indi.png" height="120px"/><br>
				<h1 style="font-family: Aquatico";>INDIVIDUAL</h1>
				<p style="padding:0% 30%;">Get a platform that can grow and change along with your survey needs over time. Browse our plans to learn more about specific features.</p>
			</td>
			<td class="enterprize" align="center">
				<img src="images/enter.png" height="120px"/><br>
				<h1 style="font-family: Aquatico";>ENTERPRISE</h1>
				<p style="padding:0% 30%;">Manage your company’s data with advanced security and control, so you can enable your teams to share and collaborate safely.</p>
			</td>
		</tr>
	</table>
	<table class = "test" style="width: 100%;height: 20%;">
		<tr class="cust"><td class="testcust"><br>So what are you waiting for ?</td></tr>
		<tr>
			<td align=center><br>
				<a href="plans.php" style="text-decoration: none;">
				<button class="button">
    			See All Plans
    			<div class="button__horizontal"></div>
    			<div class="button__vertical"></div>
				</button>
				</a><br><br><br><br>
			</td>
		</tr>
	</table>
</div>
<div class="indabout">
	<br><br><br>
	<table style="width: 90%;" align="center" cellspacing="15px">
		<tr>
			<td class="abttitle">About Us</td>
			<td class="abttitle" style="padding-left: 30px;">Contact Us</td>
			<td class="abttitle">Follow Us</td>
			<td class="abttitle">Feedback</td>
		</tr>
		<tr>
			<td style="width: 25%;" class="abtcontent">One of the top three survey platforms in India. Easily create and manage surveys for personal or enterprize purposes. Get a platform that can grow and change along with your survey needs over time. Manage your company’s data with advanced security and control, so you can enable your teams to share and collaborate safely.</span>
			</td>
			<td style="width: 25%; padding-left: 30px;" class="abtcontent">
				Aaryan Gupta<br>17bce001@nirmauni.ac.in<br>Hamza Abubakar<br>17bce028@nirmauni.ac.in<br>Mohil Patel<br>17bce062@nirmauni.ac.in
			</td>
			<td style="width: 25%;" class="abtcontent">
				<a href="#"><img src="images/insta.png" height="40px"></a>
				<a href="#"><img src="images/fb.png" height="40px"></a>
			</td>
			<td style="width: 25%;" class="abtcontent">
				<form>
					<input class="abtinput" type="text" placeholder="Name"><br><br>
					<input class="abtinput" type="text" placeholder="E-mail"><br><br>
					<textarea class="abtinput" placeholder="Message" style="resize: none;"></textarea><br><br>
					<reset class="abtsubmit">Submit</reset>
				</form>
			</td>
		</tr>
	</table>
</div>
</body>
</html>