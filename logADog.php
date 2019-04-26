<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Log a Dog</title>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
		<div class="upperWrapper">
			<div class="upperContentWrapper">
				<form action="#" id='dogForm' method='POST'>
				 
					<font size="5">Location:</font> 	
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
  						</select>
	                        <br><br>
				<font size="5">Picture:</font>
				
				<input type="file" name="fileupload" value="fileupload" id="fileupload">
		                <label for="fileupload"> Select a file to upload</label> 

        	                <br><br>
                	        <input type="submit" id="submitButton" value="Submit" onclick="pr()" disabled>
	                        <br><br>


				</form>			
			</div>
		</div>

	</body>
</html>

