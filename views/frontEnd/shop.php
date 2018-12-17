<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./public/css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
	<title> SweetHouse | Magasin </title>  

<style>

div.gallery {
  margin: 7px;
  border: 1px solid gray;
  float: left;
  width: 200px;
}

div.gallery:hover {
  border: 3px solid black;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 20px;
  text-align: center;
}

.tab {
  overflow: hidden;
  border: 2px solid black;
  background-color: #216583;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 15px 15px;
  transition: 0.5s;
  font-size: 20px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #65c0ba;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #cffdf8;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 3px solid black;
  border-top: none;
  background-image: "https://www.sfcollege.edu/Assets/sf/about/images/sf-icon.png" ;

</style>
</head>

<body>
  
<?php
  include 'backEnd/header.php';
  ?>

<div class="tab">
		<button class="tabButton" onclick="openTab(event, 'Salon')">Salon</button>
		<button class="tabButton" onclick="openTab(event, 'Chambre')">Chambre</button>
		<button class="tabButton" onclick="openTab(event, 'Cuisine')">Cuisine</button>
		<button class="tabButton" onclick="openTab(event, 'Salle de bain')">Salle de bain</button>
</div>	
	
		<div id="Salon" class="tabcontent">
			<p>iuhiuhiu</p>
			<div class="gallery">
  				<a target="_blank" href="capteurLumiere.png">
    			<img src="capteurLumiere.png" alt="capteurLumiere" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
    					Nombre de capteurs :
    					<input
        				type="number"
        				name="number1_0"
        				min="0"
        				max="20"
        				step="1"
   						>
					</label>
  				</div>
			</div>

			<div class="gallery">
  				<a target="_blank" href="capteurTemperature.png">
    			<img src="capteurTemperature.png" alt="capteurTemperature" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
    					Nombre de capteurs :
    					<input
        				type="number"
        				name="number1_1"
        				min="0"
        				max="20"
        				step="1"
   						>
					</label>
  				</div>
			</div>

			<div class="gallery">
  				<a target="_blank" href="capteurMouvement.png">
    			<img src="capteurMouvement.png" alt="capteurMouvement" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
    					Nombre de capteurs :
    					<input
        				type="number"
        				name="number1_2"
        				min="0"
        				max="20"
        				step="1"
   						>
					</label>
  				</div>
			</div>

			<div class="gallery">
  				<a target="_blank" href="capteurCO2.png">
    			<img src="capteurCO2.png" alt="capteurCO2" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
    					Nombre de capteurs :
    					<input
        				type="number"
        				name="number1_3"
        				min="0"
        				max="20"
        				step="1"
   						>
					</label>
  				</div>
			</div>

		</div>

		<div id="tab2" class="tabcontent">></div>
		<div id="tab3" class="tabcontent">></div>
		<div id="tab4" class="tabcontent">></div>



<style>



<script>

function openTab(evt, tabName) {
  var i, tabcontent, tabButton;
  gallery = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tabButton = document.getElementsByClassName("tabButton");
  for (i = 0; i < tabButton.length; i++) {
    tabButton[i].className = tabButton[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>
</body>
</html>
