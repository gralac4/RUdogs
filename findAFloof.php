<?php

                $server = "localhost";
                $username = "kutneya1";
                $password = "dolphinbus";

                $connection = new mysqli($server, $username, $password, $username);
                if($connection->connect_error){
                        die("CONNECTION FAILED");
                }

                $SQLStatement = "SELECT * FROM campus_dogs WHERE dateTime >= DATE_SUB(NOW(), INTERVAL 1 DAY)";

                $result = $connection->query($SQLStatement);
                #$myJSON = json_encode($result);
                #echo $result;

                #if($connection->query($SQLStatement))
                #{
                #       echo "success";
                #}
                #else
                #{
                #       echo "fail";
                #}
                #echo $myJSON;
                $rowData = array();

                if($result){
                        while($row = $result->fetch_assoc()){
                                $rowData[] = $row;
                        }
                        $result->free();
                }

        $connection->close();

?>


<div class="upperContentWrapper">
	<div class= container>
		<img src="dogSquad.gif" class="dogSquad" alt="Animated gif of dog squad running together">
		<div class="foundTheFloofDataWrapper">
			<h1>Floof Information:</h1>
			<span id="dogLocation" class="infoText">Found outside:<br></span>
			<span id="dogTotal" class="infoText">Number of dogs in last 24 hours:<br></span>
			<span id="dogOnDuty" class="infoText">Number of service dogs:<br> </span>
			<span id="permissionToPet" class="infoText">How many you can pet:<br></span>
			<span id="dogRating" class="infoText">How many are 10/10 amazing doggos!: </span>
		</div>
	</div>
</div>
<div class="findFloofContentWrapper">
	<div class="container">
		<img src="pawprint.svg" id="bunce" class="bunce svg-18px" alt="Paw print on Bunce">
		<img src="pawprint.svg" id="bozorth" class="bozorth svg-18px" alt="Paw print on Bozorth">
		<img src="pawprint.svg" id="business" class="business svg-18px" alt="Paw print on Business">
		<img src="pawprint.svg" id="engineering" class="engineering svg-18px" alt="Paw print on the Engineering Building">
		<img src="pawprint.svg" id="hawthorne" class="hawthorne svg-18px" alt="Paw print on Hawthorne">
		<img src="pawprint.svg" id="james" class="james svg-18px" alt="Paw print on James">
		<img src="pawprint.svg" id="library" class="library svg-18px" alt="Paw print on the Library">
		<img src="pawprint.svg" id="recCenter" class="recCenter svg-18px" alt="Paw print on the Rec Center">
		<img src="pawprint.svg" id="robinson" class="robinson svg-18px" alt="Paw print on Robinson">
		<img src="pawprint.svg" id="savitz" class="savitz svg-18px" alt="Paw print on Savitz">
		<img src="pawprint.svg" id="science" class="science svg-18px" alt="Paw print on the Science Building">
		<img src="pawprint.svg" id="studentCenter" class="studentCenter svg-18px" alt="Paw print on the Student Center">
		<img src="pawprint.svg" id="wellnessCenter" class="wellnessCenter svg-18px" alt="Paw print on the Wellness Center">
		<img src="pawprint.svg" id="westby" class="westby svg-18px" alt="Paw print on Westby">
		<img src="pawprint.svg" id="wilson" class="wilson svg-18px" alt="Paw print on Wilson">
		<img src="mapOfRowan.png" class="border map" alt="Map of Rowan university">
		<br>
	</div>
	<br>
	<br>
        <br>
</div>

<script>
		//Add all the event listeners for each location pin
		document.getElementById("bunce").addEventListener("mouseover",function(){changeText("bunce")});
		document.getElementById("bozorth").addEventListener("mouseover",function(){changeText("bozorth")});
		document.getElementById("business").addEventListener("mouseover",function(){changeText("business")});
		document.getElementById("engineering").addEventListener("mouseover",function(){changeText("engineering")});
		document.getElementById("hawthorne").addEventListener("mouseover",function(){changeText("hawthorne")});
		document.getElementById("james").addEventListener("mouseover",function(){changeText("james")});
		document.getElementById("library").addEventListener("mouseover",function(){changeText("library")});
		document.getElementById("recCenter").addEventListener("mouseover",function(){changeText("recCenter")});
		document.getElementById("robinson").addEventListener("mouseover",function(){changeText("robinson")});
		document.getElementById("savitz").addEventListener("mouseover",function(){changeText("savitz")});
		document.getElementById("science").addEventListener("mouseover",function(){changeText("science")});
		document.getElementById("studentCenter").addEventListener("mouseover",function(){changeText("studentCenter")});
		document.getElementById("wellnessCenter").addEventListener("mouseover",function(){changeText("wellnessCenter")});
		document.getElementById("westby").addEventListener("mouseover",function(){changeText("westby" )});
		document.getElementById("wilson").addEventListener("mouseover",function(){changeText("wilson")});

//this method changes the information in the textbox based on the id location given
function changeText(id){
	switch(id){
		case "bunce":
		document.getElementById("dogLocation").innerHTML = "Found outside: Bunce<br>";
		dogLocation('Bunce');
		break;
		case "bozorth":
		document.getElementById("dogLocation").innerHTML = "Found outside: Bozorth<br>";
		dogLocation('Bozorth');
		break;
		case "business":
		document.getElementById("dogLocation").innerHTML = "Found outside: Business<br>";
		dogLocation('Business');
		break;
		case "engineering":
		document.getElementById("dogLocation").innerHTML = "Found outside: Engineering<br>";
		dogLocation('Engineering');
		break;
		case "hawthorne":
		document.getElementById("dogLocation").innerHTML = "Found outside: Hawthorne<br>";
		dogLocation('Hawthorne');
		break;
		case "james":
		document.getElementById("dogLocation").innerHTML = "Found outside: James<br>";
		dogLocation('James');
		break;
		case "library":
		document.getElementById("dogLocation").innerHTML = "Found outside: Library<br>";
		dogLocation('Library');
		break;
		case "recCenter":
		document.getElementById("dogLocation").innerHTML = "Found outside: Rec Center<br>";
		dogLocation('Rec Center');
		break;
		case "robinson":
		document.getElementById("dogLocation").innerHTML = "Found outside: Robinson<br>";
		dogLocation('Robinson');
		break;
		case "savitz":
		document.getElementById("dogLocation").innerHTML = "Found outside: Savitz<br>";
		dogLocation('Savitz');
		break;
		case "science":
		document.getElementById("dogLocation").innerHTML = "Found outside: Science<br>";
		dogLocation('Science Building');
		break;
		case "studentCenter":
		document.getElementById("dogLocation").innerHTML = "Found outside: Student Center<br>";
		dogLocation('Student Center');
		break;
		case "wellnessCenter":
		document.getElementById("dogLocation").innerHTML = "Found outside: Wellness Center<br>";
		dogLocation('Wellness Center');
		break;
		case "westby":
		document.getElementById("dogLocation").innerHTML = "Found outside: Westby<br>";
		dogLocation('Westby');
		break;
		case "wilson":
		document.getElementById("dogLocation").innerHTML = "Found outside: Wilson<br>";
		dogLocation('Wilson');
		break;
		default:
		document.getElementById("dogLocation").innerHTML = "Found outside: <br>";
                document.getElementById("dogTotal").innerHTML = "Number of dogs in last 24 hours: <br>";
              	document.getElementById("dogOnDuty").innerHTML = "Number of service dogs:<br>";
                document.getElementById("permissionToPet").innerHTML = "How many you can pet:<br>";
                document.getElementById("dogRating").innerHTML = "How many are 10/10 amazing doggos!:<br>";
		break;
	}

}

        function dogLocation(location){
                var obj = <?php echo json_encode($rowData) ?>;
		console.log(obj);
                
		
		var counterTotal = 0;
                var counterServiceDog = 0;
                var counterPets = 0;
                var counterRating = 0;
		
		for(i in obj){
                        if(obj[i].location == location)
                        {
                                console.log("found one!");
				counterTotal ++;
				console.log(counterTotal);
				if(obj[i].dogOnDuty == 1){
					counterServiceDog ++;
					console.log(counterServiceDog);
				}
				if(obj[i].permissionToPet == 1){
                                        counterPets ++;
					console.log(counterPets);
                                }
				if(obj[i].rating == 0){
					counterRating ++;
					console.log(counterRating);
				}
                        }
		}
			document.getElementById("dogLocation").innerHTML = "Found outside: "+location +"<br>";
			document.getElementById("dogTotal").innerHTML = "Number of dogs in last 24 hours: " + counterTotal+ "<br>";
			document.getElementById("dogOnDuty").innerHTML = "Number of service dogs: " + counterServiceDog + "<br>";
			document.getElementById("permissionToPet").innerHTML = "How many you can pet: " +counterPets + " <br>";
			document.getElementById("dogRating").innerHTML = "How many are 10/10 amazing doggos!: " +counterRating+ "<br>";

        }


</script>
