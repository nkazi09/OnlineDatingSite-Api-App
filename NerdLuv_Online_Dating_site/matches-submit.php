<?php 
include("top.html");
$username = $_GET["name"];
?>

<!--
Nadia Kazi, CSE 190M,
April 28, 2012, Section: MJ
The purpose of this file is to find and print all the matches 
found for the given name. This file produces a page with any matches
found for the given username with qualities that matches with the given user. 
-->
 
<div>
	<h1>Matches for <?= $username ?></h1>
		
	<?php
	foreach(file("singles.txt") as $text) {
		# unpacks the file information into a list 
		list($name, $gender, $age, $type, $OS, $min, $max) = explode(",", $text);
		
		# checks if the username that is passed matches the name in the file
		# if the file name matches then the persons information related to the
		# name gets stored in an array 	
		if($username == $name) {
			$match_found = array($name, $gender, $age, $type, $OS, $min, $max);
		}
	} 
		
	# It checks and try's to find a match for given user with the other uses in the file
	# if the given qualities matches between the given user and any other users in the file
	# then it prints the uses qualities that matched.	
	foreach(file("singles.txt") as $line) {
		list($name, $gender, $age, $type, $OS, $min, $max) = explode(",", $line);
		$given_user = array($name, $gender, $age, $type, $OS, $min, $max);
		
		if($match_found[1] != $given_user[1] and $match_found[2] >= $given_user[5] and
		$match_found[2] <= $given_user[6] and $given_user[2] >= $match_found[5] and
		$given_user[2] <= $match_found[6] and $match_found[4] == $given_user[4] and
		common_type($match_found[3], $given_user[3]) >= 1) {
	?>	
		<div class="match">
			<p>	
				<img 
					src="http://www.cs.washington.edu/education/courses/cse190m/12sp/homework/4/user.jpg"
					alt="photo" 
				/>
				<?= $name ?>
			</p>
			
			<ul>
				<li><strong>gender:</strong><?= $given_user[1] ?></li>
				<li><strong>age:</strong><?= $given_user[2] ?></li>
				<li><strong>type:</strong><?= $given_user[3] ?></li>
				<li><strong>OS:</strong><?= $given_user[4] ?></li>
			</ul>				
		</div>
		
		<?php } ?>						
	<?php } ?>
</div>	
	
<?php
# It takes a and b as parameters and returns the number of characters
# that maches between the two user types
	function common_type($match_found, $given_user) { 
		$count = 0;
		for($i = 0; $i < strlen($match_found); $i++) {
			for($j = 0; $j < strlen($given_user); $j++) {
				if($match_found[$i] == $given_user[$j]) {
					$count++;
				}
			}
		}	
		return $count;
	}					
?>
	
<?php include("bottom.html")?>