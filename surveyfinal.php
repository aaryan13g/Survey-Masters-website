<?php
	require_once "config.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey - SurveyMasters</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Roboto&display=swap" rel="stylesheet">
	<link href="//db.onlinewebfonts.com/c/9d08714b3c41ec105f124a3338f40b8d?family=Aquatico" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/940ace70d6c766e685a20dea33762abf?family=American+Typewriter" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/f0f58b59b775865d2e1e0029d3227832?family=CAMBRIA" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/4a00dd75d873f0f00731e87e4d7b026d?family=Berkshire+Swash" rel="stylesheet" type="text/css"/>
	<link rel="icon" href="images/icon.png">
	<style type="text/css">
		p:hover{
			background-color: #414141;
		}
	</style>
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
	<div style="height: 100px;"></div>
	<?php 
 	echo "<h1 align= \"center\" style=\"text-transform: uppercase; font-family: Aquatico\">";
 	echo $_POST['abcd'];
 	echo "</h1>";
 	?>
 	<div style="width: 70%;height: 950px; background-image: url(images/catbg.jfif);background-size: cover; background-repeat: no-repeat; background-position: center; margin-left: 14%; font-size: 20px; font-family: Calibri; padding: 2%;">
 		<br>
 		<?php
 		require "config.php";
 		$val=$_POST['abcd'];
		$sql= "SELECT * FROM questions WHERE title LIKE '$val';";
		$result = mysqli_query($link,$sql);

				$num_results = mysqli_num_rows($result);
                    for ($i=0;$i<$num_results;$i++) 
            		{
	                    $row = mysqli_fetch_array($result);
		                $q = $row['question'];
		                echo "<p>".$q."</p>";
		                echo "<input type= \"radio\" name=\"".$i."\" checked>".$row['opt1']."</input>";echo "<br>";
                        echo "<input type= \"radio\" name=\"".$i."\">".$row['opt2']."</input>";echo "<br>";
                        echo "<input type= \"radio\" name=\"".$i."\">".$row['opt3']."</input>";echo "<br>";
                        echo "<input type= \"radio\" name=\"".$i."\">".$row['opt4']."</input>";echo "<br>";
                    }
			        mysqli_close($link);
		?>
		<br><br>
		<div style="display: inline-block; margin-left: 40%;">
			<a href= "surveyend.php" style="text-decoration: none;">
			<button class="button" style=" color: #414141;">
   			Submit
   			<div class="button__horizontal"></div>
   			<div class="button__vertical"></div>
			</button>
			</a>
			</div>
 		</div>
</body>
</html>