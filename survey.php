<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "config.php";
session_start();

$category = $title = "";
$title_err = "";
$sql;
if (isset($_POST['begin'])) {
	if(empty($_POST['abcd'])){
        $title_err = "Please choose a title.";
    }
    else{
        $title = $_POST['abcd'];
        $_SESSION['title']=$title;
        
    }
    if (empty($title_err))
    {
    		header("location : surveyfinal.php");
    }
}
    mysqli_close($link);

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
		option:hover{
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

	<?php
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
		echo "<div style=\"height: 80px;\"></div>";
		echo "<div class=\"banner\" style=\"background-image: url(images/bg.jpg);background-size: cover; background-repeat: no-repeat; background-position: center;\">";
			echo "<div class=\"mess\">Please login or signup to get the surveys.";
			echo "<div class=\"submess\">Get exclusive excess to over a thousand surveys in a few simple clicks!</div>";
			echo "</div>";

			echo "<table style=\"width: 100%; height: 20%;\">";
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td align=center><br>";
				echo "<a href=\"login.php\" style=\"text-decoration: none;\">";
				echo "<button class=\"button\" style=\"color: #414141;\">";
    			echo "Login";
    			echo "<div class=\"button__horizontal\"></div>";
    			echo "<div class=\"button__vertical\"></div>";
				echo "</button>";
				echo "</a><br><br><br><br>";
				echo "</td>";
				echo "<td align=center><br>";
				echo "<a href=\"register.php\" style=\"text-decoration: none;\">";
				echo "<button class=\"button\" style=\"color: #414141;\">";
    			echo "Sign Up";
    			echo "<div class=\"button__horizontal\"></div>";
    			echo "<div class=\"button__vertical\"></div>";
				echo "</button>";
				echo "</a><br><br><br><br>";
				echo "</td>";
				echo "</tr>";
			echo "</table>";

		echo "</div>";
		return;
	}
	?>

	<div style="height: 80px;"></div>
	<div class="banner" style="background-image: url(images/survey.jfif);background-size: cover; background-repeat: no-repeat; background-position: center;">
  		<div class="mess">Generate/ Create Your Own Survey!
    	<div class="submess" style="color: #414141">Get the best with SurveyMasters with our exclusive platform, in a few simple clicks!</div>
  		</div><br><br><br><br>
  		<div class="arrow"><a href="#test1" class="arrow1" style="color: #414141;">GET STARTED<br>&#8595;</a></div>
  		<div style="height: 50px;"></div>
	</div><br><br><br><br><br>
	<a name="test1"></a>
	<br><br>

	<div class= "container" style="background-image: url(images/catbg.jfif);background-size: cover; background-repeat: no-repeat; background-position: center; position: absolute; margin-left: 14%;">
		<br>
		<h2 align="center" style="color: #414141; font-family: Roboto">Choose your Survey Title from the pool below</h2>
				<div class="container1">
					<form action="surveyfinal.php" method="post">
						<select name= "abcd" style="width: 40%; font-size: 15px; padding: 20px; border:none;" size="10">
							<?php 
								require "config.php";
								$sql= "SELECT distinct(category) FROM titles;";
								$result = mysqli_query($link,$sql);

                    		$num_results = mysqli_num_rows($result);
                    		for ($i=0;$i<$num_results;$i++) {
		                        $row = mysqli_fetch_array($result);
		                        $q = $row['category'];
		                        $category = $q;
		                        echo '<optgroup label="' .$q. '">';
		                        $sql1="SELECT title FROM titles WHERE category like \"".$category."\";";
		                        $res = mysqli_query($link,$sql1);
		                        $num=mysqli_num_rows($res);
		                        for($j=0;$j<$num;$j++){
		                        	$row1 = mysqli_fetch_array($res);
			                        $q1 = $row1['title'];
			                        $title = $q1;
			                        echo '<option value="' .$q1. '" name="optval">' .$q1. '</option>';
		                        }
		                        echo '</optgroup>';
		                    }
		                    mysqli_close($link);
							?>
						</select>
						<div><?php echo $title_err; ?></div><br><br>
						<div style="display: inline-block;">
						<a href= "surveyfinal.php" style="text-decoration: none;">
						<button type="submit" value="submit" name = "begin" class="button" style=" color: #414141;">
		    			Begin Survey
		    			<div class="button__horizontal"></div>
		    			<div class="button__vertical"></div>
						</button>
						</a>
						</div>
					</form>
				</div>
				
				<br><br><br>
	</div>
	<p><a href="home.php" style="font-size: 20px;position: absolute; top: 1400px; margin-left: 47%">HOME</a></p>
	
</body>
</html>