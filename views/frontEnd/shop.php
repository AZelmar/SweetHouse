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
  width: 300px;
  margin-top: 30px;
  background-color: #f76262;
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

#tabs {
  overflow: hidden;
  border: 2px solid black;
  background-color: #216583;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;

}

#tabs a:hover {

    background: #cffdf8;
    transition-duration: 0.4s;
  }
/* Style the buttons inside the tab */


/* Change background color of buttons on hover */
#tabs li {
  float: left;
  margin: 1px;
}

/* Create an active/current tablink class */
#tabs a {
    position: relative;
    background-image: linear-gradient(to bottom, #65c0ba, #cffdf8); 
    padding:7px 15px;
    float: left;
    color: #444;
}

#content {
    width: 100%;
    position: relative;
    z-index: 2; 


  }
/* Style the tab content */
</style>
</head>

<body>
  
<?php
  include 'backEnd/header.php';
  ?>

<ul id="tabs">
    <li><a href="#" name="tab1">Salon</a></li>
    <li><a href="#" name="tab2">Chambre</a></li>
    <li><a href="#" name="tab3">Cuisine</a></li>
    <li><a href="#" name="tab4">Salle de bain</a></li>
</ul>	
	
		<div id="content">
			<div id="tab1">
        <div class="gallery">
  				<a target="_blank">
    			<img src="./public/images/capteurLumiere.png" alt="capteurLumiere" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
              <h3>Capteur de lumière</h3>
              <br>
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
  				<a target="_blank">
    			<img src="./public/images/capteurTemperature.png" alt="capteurTemperature" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
              <h3>Capteur de température</h3>
              <br>
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
  				<a target="_blank">
    			<img src="./public/images/capteurMouvement.png" alt="capteurMouvement" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
              <h3>Capteur de mouvement</h3>
              <br>
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
  				<a target="_blank">
    			<img src="./public/images/capteurCO2.png" alt="capteurCO2" width="800" height="800">
  				</a>
  				<div class="desc">
  					<label>
              <h3>Capteur de fumée</h3>
              <br>
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



		<div id="tab2">

       <div class="gallery">
          <a target="_blank">
          <img src="./public/images/capteurLumiere.png" alt="capteurLumiere" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de lumière</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurTemperature.png" alt="capteurTemperature" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de température</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurCO2.png" alt="capteurCO2" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de fumée</h3>
              <br>
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


		<div id="tab3">


       <div class="gallery">
          <a target="_blank">
          <img src="./public/images/capteurLumiere.png" alt="capteurLumiere" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de lumière</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurTemperature.png" alt="capteurTemperature" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de température</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurHumidité.png" alt="capteurHumidité" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur d'humidité</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurDebitEau.png" alt="capteurDebitEau" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de débit</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurCO2.png" alt="capteurCO2" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de fumée</h3>
              <br>
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


		<div id="tab4">

      <div class="gallery">
          <a target="_blank">
          <img src="./public/images/capteurLumiere.png" alt="capteurLumiere" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de lumière</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurTemperature.png" alt="capteurTemperature" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de température</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurDebitEau.png" alt="capteurDebitEau" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de débit</h3>
              <br>
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
          <a target="_blank">
          <img src="./public/images/capteurCO2.png" alt="capteurCO2" width="800" height="800">
          </a>
          <div class="desc">
            <label>
              <h3>Capteur de fumée</h3>
              <br>
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


</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#content").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id","current");
    $("#content #tab1").fadeIn(); // Show first tab's content
    
    $('#tabs a').click(function(e) {
      e.preventDefault();
      if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
       return;       
      }
      else{            
        $("#content").find("[id^='tab']").hide(); // Hide all content
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
      }
    });
  });

</script>
</body>
</html>
