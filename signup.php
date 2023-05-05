<?php include("top.html"); ?>

<!--
Nadia Kazi, CSE 190M, 
April 28, 2012, Section: MJ
The purpose of this file is to create a signup page
that will allow the users to signup into the online dating 
site for desperate signle geeks called, NerdLuv. This page
asks the new users to enter their personal information, 
for instance their name, gender, age and so forth.	
-->

<form action="signup-submit.php" method ="post" >
	<fieldset>
		<legend>New User Signup:</legend>
		
		<div>
			<strong>Name:</strong>
			<input type="text" name="name" size="16" />
		</div>
		
		<div>
			<strong>Gender:</strong>
			<label><input type="radio" name="gender" value="M" /> Male</label>
			<label><input type="radio" name="gender" value="F" checked="checked" /> Female</label>
		</div>
		
		<div>
			<strong>Age:</strong>
			<input type="text" name="age" size="6" maxlength="2" />
		</div>	

		<div>
			<strong>Personality type:</strong>
			<input type="text" size="6" maxlength="4" name="personality_type" />
			(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
		</div>	
		
		<div>
			<strong>Favorite OS:</strong>
			
			<select name="favorite_operating_system" >
				<option selected="selected">Windows</option>
				<option>Mac OS X</option>
				<option>Linux</option>
			</select>
		</div>
		
		<div>
			<strong>Seeking age:</strong>
			
			<input type="text" name="seeking_age_from" size="6" maxlength="2" placeholder="min" />
			to <input type="text" name="seeking_age_to" size="6" maxlength="2" placeholder="max" />				
		</div>
		
		<div>	
			<input type="submit" value="Sign Up" />
		</div>	
	
	</fieldset>
</form>	
	
<?php include("bottom.html"); ?>