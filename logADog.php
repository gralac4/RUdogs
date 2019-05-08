<div class="upperContentWrapper">
	<div class="upperContentFormWrapper">
		<form action="#" id='dogForm' method='POST'>
			
			<h1>Log a Dog!</h1>
			<font size="5">Where'd you see the doggo?</font>
			<br> 	
			<select name="location" id="location">
				<option value="Bozorth">Bozroth</option>
				<option value="Bunce">Bunce</option>
				<option value="Business">Business</option>
				<option value="Engineering">Engineering</option>
				<option value="Hawthorne">Hawthorne</option>
				<option value="James">James</option>
				<option value="Library">Library</option>
				<option value="Rec Center">Rec Center</option>
				<option value="Robinson">Robinson</option>
				<option value="Savitz">Savitz</option>
				<option value="Science Building">Science Building</option>
				<option value="Student Center">Student Center</option>
				<option value="Wellness Center">Wellness Center</option>
				<option value="Westby">Westby</option>
				<option value="Wilson">Wilson</option>
			</select><br>
			<br>
			<font size="5">Was the doggo on duty?</font>
			<br>
			<font size="2">**Please respect service dogs. Petting a service animal might be dangerous for the human they work with**</font>
			<br>
			<input type="radio" name="serviceDog" value=1>Yes
			<input type="radio" name="serviceDog" value=0>No<br>
			<br>
			<font size="5">Was the owner okay with pets?</font>
			<br>
			<input type="radio" name="permissionToPet" value=1>Yes
			<input type="radio" name="permissionToPet" value=0>No
			<input type="radio" name="permissionToPet" value=2>Unsure<br>
			<br>
			<font size="5">Was it a good dog?</font>
			<br>
			<input type="checkbox" name="rating" value =0 >10/10 an AMAZING DOGGO
			<br>
			<br>
			<input type="submit" id="submitButton" value="Submit" onclick="pr()" >
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

			$location = $_POST['location'];
			$dogOnDuty = $_POST['serviceDog'];
			$permissionToPet = $_POST['permissionToPet'];
			#$dateTime = date_create()->format('Y-m-d H:i:s');
			$dateTime = date('Y-m-d H:i:s');
			$rating = $_POST['rating'];
			$insertSQL = "INSERT INTO campus_dogs (location, dateTime, dogOnDuty, permissionToPet, rating) VALUES('$location','$dateTime','$dogOnDuty','$permissionToPet','$rating')";

		if($connection->query($insertSQL)===TRUE){
				echo "Thank you for logging a doggo at " . $location ;
			} else {
				echo "FAILED";
			}
		$connection->close();
		
		}
		
?>
