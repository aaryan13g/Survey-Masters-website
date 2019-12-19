<?php 
require_once "config.php";
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Blogs - SurveyMasters</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya|Roboto&display=swap" rel="stylesheet">
  <link href="//db.onlinewebfonts.com/c/9d08714b3c41ec105f124a3338f40b8d?family=Aquatico" rel="stylesheet" type="text/css"/>
  <link href="//db.onlinewebfonts.com/c/940ace70d6c766e685a20dea33762abf?family=American+Typewriter" rel="stylesheet" type="text/css"/>
  <link href="//db.onlinewebfonts.com/c/f0f58b59b775865d2e1e0029d3227832?family=CAMBRIA" rel="stylesheet" type="text/css"/>
  <link href="//db.onlinewebfonts.com/c/4a00dd75d873f0f00731e87e4d7b026d?family=Berkshire+Swash" rel="stylesheet" type="text/css"/>
  <link rel="icon" href="images/icon.png">
  <style type="text/css">
    .hidmess{
      opacity: 1;
      transition: opacity 1s;
    }
    .hidmess:hover{
      opacity: 0;
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
<div style="height: 80px;"></div>
<div class="banner" style="background-image: url(images/blogbg.jpg!d);background-size: cover; background-repeat: no-repeat; background-position: center;">
  <div class="mess">SurveyMasters BLOG
    <div class="submess" style="color: #414141">Your ultimate resource for online survey creation and ideation.</div>
  </div><br><br><br><br><br>
</div><br><br><br>

  <div style="display: inline-block; position: absolute; width: 100%; background-color: rgb(155,25,71);" align="center"><img src="images/blogmes.PNG" width="500" height="400"></div>
  <div class="hidmess" style="display: inline-block; position: absolute; width: 100%; background-color: rgb(112,25,52);" align="center"><img src="images/blgcvr.PNG" width="500" height="400"></div>
  <div style="display: inline-block; height: 400px;"></div>
  <br><br><br>

    <table border="0" style="font-family: Calibri; background-color: #E1F8EB;">
      <tr>
        <td style="padding-left: 3%;">
      <h1>What Makes a Bad Survey Question?</h1>
      <h5>13 February, 2019 | 5 min read</h5>
        </td>
      <td style="border: 2px solid; width: 60%;"><image src="images/a.jpeg" height="450" width="100%"></td>
      </tr>
      <tr>
      <td colspan="2" style="padding-right: 12%"><p>You might think that any survey question is a good one because it’s helping you to gain valuable insight from your respondents. But it’s important to ask the right questions. When respondents take a survey filled with good questions, they are more likely to have an enjoyable experience and finish the survey. When a respondent comes across one or several bad survey questions, it might rub them the wrong way and even cause them to click away from your survey. Below are examples of bad survey questions you should avoid using. Leading QuestionsLeading questions are questions that use bias language to influence the participant’s answer selection.</p></td>
      </tr>
      <tr>
      <td colspan="2"><a href="#"><strong>Read more </strong>&#8594;</a></td>
      </tr>
    </table>
<br><br>
    <table border="0" style="font-family: Calibri;background-color: #E1F8EB;">
      <tr>
        <td style="padding-left: 3%;">
      <h1>What’s the Best Time of Day to Send a Survey Email?</h1>
      <h5>April 25, 2019 | 4 min read</h5>
        </td>
      <td style="border: 2px solid; width: 60%;"><image src="images/b.jpeg" height="450" width="100%"></td>
      </tr>
      <tr>
      <td colspan="2" style="padding-right: 12%"><p>Congrats — you just finished creating a survey! Now you need to email potential participants about the survey so they can take it. But when should you send the email? By getting the timing just right, you can increase the number of survey respondents, which in turn increases the number of results. Discover the best time of day to send a survey email below. What’s a Survey Email?A survey email contains a link to the survey you want your email list to respond to. It’s best practice to not only include a link, but also a survey description, how long it will take to complete and why the respondent should care enough to take it.</p></td>
      </tr>
      <tr>
      <td colspan="2"><a href="#"><strong>Read more </strong>&#8594;</a></td>
      </tr>
    </table>
<br><br>
    <table border="0" style="font-family: Calibri;background-color: #E1F8EB;">
      <tr>
        <td style="padding-left: 3%;">
      <h1>5 Survey Analysis Tips to Glean Better Insights</h1>
      <h5>August 10, 2019 | 3 min read</h5>
        </td>
      <td style="border: 2px solid; width: 60%; "><image src="images/c.png" height="450" width="100%"></td>
      </tr>
      <tr>
      <td colspan="2" style="padding-right: 12%"><p>Congratulations on finishing your survey with SurveyPlanet. Now that you’ve gathered the responses, it’s time to analyze them. Whether it’s been a few weeks or a few months since you last revisited the survey, it’s always a good idea to refresh your memory of your survey’s goals and purpose. Look for the most valuable result you are trying to find the answer to and keep this in the back of your mind as you analyze. If you come across relevant data, you will recognize it much sooner. To start analyzing your survey, click on the export results button to export your survey results into your favorite format like Excel.</p></td>
      </tr>
      <tr>
      <td colspan="2"><a href="#"><strong>Read more </strong>&#8594;</a></td>
      </tr>
    </table>
    <br><br>
    <p align="center"><a href="home.php" style="font-size: 20px;">HOME</a></p>

</body>
</html>