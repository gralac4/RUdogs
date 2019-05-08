<div class="upperContentWrapper">
	<p>
		<img src="dogSquad.gif" align="right" hspace="10%" height=45% width=45% alt="Animated gif of dog squad running together">
		<div class="foundTheFloofDataWrapper">
			<h1>Floof Information:</h1>
			<font size="5" id="dogLocation">Found outside:<br></font>
			<font size="5" id="dogOnDuty">It was not a service dog<br> </font>
			<font size="5" id="dogRating">10/10 would pet again! </font>
		</div>
	</p>
</div>
<div class="findFloofContentWrapper">
	<div class="container">
		<img src="baseline-location_on-24px.svg" id="bunce" class="bunce" alt="Location pin on Bunce">
		<img src="baseline-location_on-24px.svg" id="bozorth" class="bozorth" alt="location pin on Bozorth">
		<img src="baseline-location_on-24px.svg" id="business" class="business" alt="location pin on Business">
		<img src="baseline-location_on-24px.svg" id="engineering" class="engineering" alt="location pin on the Engineering Building">
		<img src="baseline-location_on-24px.svg" id="hawthorne" class="hawthorne" alt="location pin on Hawthorne">
		<img src="baseline-location_on-24px.svg" id="james" class="james" alt="location pin on James">
		<img src="baseline-location_on-24px.svg" id="library" class="library" alt="location pin on the Library">
		<img src="baseline-location_on-24px.svg" id="recCenter" class="recCenter" alt="location pin on the Rec Center">
		<img src="baseline-location_on-24px.svg" id="robinson" class="robinson" alt="location pin on Robinson">
		<img src="baseline-location_on-24px.svg" id="savitz" class="savitz" alt="location pin on Savitz">
		<img src="baseline-location_on-24px.svg" id="science" class="science" alt="location pin on the Science Building">
		<img src="baseline-location_on-24px.svg" id="studentCenter" class="studentCenter" alt="location pin on the Student Center">
		<img src="baseline-location_on-24px.svg" id="wellnessCenter" class="wellnessCenter" alt="location pin on the Wellness Center">
		<img src="baseline-location_on-24px.svg" id="westby" class="westby" alt="location pin on Westby">
		<img src="baseline-location_on-24px.svg" id="wilson" class="wilson" alt="location pin on Wilson">
		<img src="mapOfRowan.png" class="border" height=90% width=90% alt="Map of Rowan university">
		<br>
	</div>
	<br>
</div>

<script type="text/javascript">
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
		break;
		case "bozorth":
		document.getElementById("dogLocation").innerHTML = "Found outside: Bozorth<br>";
		break;
		case "business":
		document.getElementById("dogLocation").innerHTML = "Found outside: Business<br>";
		break;
		case "engineering":
		document.getElementById("dogLocation").innerHTML = "Found outside: Engineering<br>";
		break;
		case "hawthorne":
		document.getElementById("dogLocation").innerHTML = "Found outside: Hawthorne<br>";
		break;
		case "james":
		document.getElementById("dogLocation").innerHTML = "Found outside: James<br>";
		break;
		case "library":
		document.getElementById("dogLocation").innerHTML = "Found outside: Library<br>";
		break;
		case "recCenter":
		document.getElementById("dogLocation").innerHTML = "Found outside: Rec Center<br>";
		break;
		case "robinson":
		document.getElementById("dogLocation").innerHTML = "Found outside: Robinson<br>";
		break;
		case "savitz":
		document.getElementById("dogLocation").innerHTML = "Found outside: Savitz<br>";
		break;
		case "science":
		document.getElementById("dogLocation").innerHTML = "Found outside: Science<br>";
		break;
		case "studentCenter":
		document.getElementById("dogLocation").innerHTML = "Found outside: Student Center<br>";
		break;
		case "wellnessCenter":
		document.getElementById("dogLocation").innerHTML = "Found outside: Wellness Center<br>";
		break;
		case "westby":
		document.getElementById("dogLocation").innerHTML = "Found outside: Westby<br>";
		break;
		case "wilson":
		document.getElementById("dogLocation").innerHTML = "Found outside: Wilson<br>";
		break;
		default:
		document.getElementById("dogLocation").innerHTML = "Found outside: <br>";
		break;
	}

}

</script>

