<?php include("top.html"); ?>
<!--
Nadia Kazi, CSE 190M, 
April 28, 2012, Section: MJ
This file crates a page for returning users that wants to see their
match. The purpose of this page is ask the user for the name and direct them
to a page that containes their match information.  
-->

<form action="matches-submit.php" >
	<fieldset>
		<legend>Returning User:</legend>
		
		<div>	
			<strong>Name:</strong>
			<input type="text" name="name" size="16"/>
		</div>
		
		<div>	
			<input type="submit" value="View My Matches" />
		</div>	
		
	</fieldset>
</form>

<?php include("bottom.html"); ?>
