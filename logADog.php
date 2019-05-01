<div class="upperContentWrapper">
	<div class="upperContentFormWrapper">
		<form action="#" id='dogForm' method='POST'>
			
			<h1>Log a Dog!</h1>
			<font size="5">Where'd you see the doggo?</font>
			<br> 	
			<select name="location" id="location">
				<option value="Robinson">Robinson</option>
				<option value="Library">Library</option>
				<option value="Student Center">Student Center</option>
				<option value="Wellness Center">Wellness Center</option>
				<option value="Savitz">Savitz</option>
				<option value="Science Building">Science Building</option>
				<option value="Westby">Westby</option>
				<option value="Bozorth">Bozroth</option>
				<option value="Hawthorne">Hawthorne</option>
				<option value="Business">Business</option>
				<option value="Engineering">Engineering</option>
			</select><br>
			<br>
			<font size="5">Was the doggo on duty?</font>
			<br>
			<font size="2">**Please respect service dogs. Petting a service animal might be dangerous for the human they work with**</font>
			<br>
			<input type="radio" name="serviceDog" value="0">Yes
			<input type="radio" name="serviceDog" value="1">No<br>
			<br>
			<font size="5">Was the owner okay with pets?</font>
			<br>
			<input type="radio" name="permissionToPet" value="0">Yes
			<input type="radio" name="permissionToPet" value="1">No
			<input type="radio" name="permissionToPet" value="2">Unsure<br>
			<br>
			<input type="submit" id="submitButton" value="Submit">
			<br> 

		</form>	
	</div>
	<br><br><br><br><br><br><br><br>			
</div>
<?php

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$server = "localhost";
			$username = "kutneya1";
			$password = "dolphinbus";

			$connection = new mysqli($server, $username, $password, $username);

			if ($connection->connect_error){
				die("CONNECTION FAILED");
			}

			$insertSQL = "INSERT INTO dog (location) VALUES('doug the dog')";

			#$location = $_POST['location'];
			#$dogOnDuty = $_POST['serviceDog'];
			#$permissionToPet = $_POST['permissionToPet'];
			#$dateTime = date_create()->format('Y-m-d H:i:s');

			#$insertSQL = "INSERT INTO campus_dogs (location, dogOnDuty, permissionToPet) VALUES('$location','$dogOnDuty','$permissionToPet)";

			$connection->close();
		}

?>


