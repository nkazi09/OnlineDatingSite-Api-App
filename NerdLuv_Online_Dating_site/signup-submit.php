<?php include("top.html"); ?>

<!--
Nadia Kazi, CSE 190M, 
April 28, 2012, Section: MJ
The purpose of this file is to take new users signup information and saves it.
The page also greets the new user for submiting their information and welcomes the
user to this dating site.  
-->
 
<?php
# stores the given paramets to different variables
$name = $_POST["name"];     
$gender = $_POST["gender"];
$age = $_POST["age"];
$personality_type = $_POST["personality_type"];
$OS = $_POST["favorite_operating_system"];
$min = $_POST["seeking_age_from"];
$max = $_POST["seeking_age_to"];
?>

<h1>Thank you!</h1>
<p>Welcome to NerdLuv, <?= $name ?>!</p>
<p>Now <a href="matches.php">log in to see your matches!</a></p>	
	
<?php	
# stores the variables in a string seperated by a coma
$line = "$name,$gender,$age,$personality_type,$OS,$min,$max\n";

# adds a line to the end of the file
file_put_contents("singles.txt", $line, FILE_APPEND);	

include("bottom.html"); 
?>

