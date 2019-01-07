<?php include('../public/locale/'.$locale.'.php'); ?>
<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./public/css/style.css" />
<?php include '../views/backEnd/header.php';?> 

</head>


<body>



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



<div id="tabs" class="tabs">
    <li><a href="#" name="tab1">Chambres</a></li>
    <li><a href="#" name="tab2">Cuisine</a></li>
    <li><a href="#" name="tab3">Salle de bain</a></li>
    <li><a href="#" name="tab4">Salon</a></li>
</div>

 
  <div class="main" >
  
  <h2>Capteurs</h2>
 
<div id="content">

      <div id="tab1">
        <h4>Chambres</h4>
        <div class="gallery">
          <img src="./public/images/smoke.png" id="smoke" > 
          <div class="desc"></div>
        </div>
          
        

  <div class="gallery">
          <img src="./public/images/lumen.png" id="lumen" >
          <div class="desc"></div>
      </div>
 


<div class="gallery">
          <img src="./public/images/temperature.png" id="temperature" >
          <div class="desc"></div>
      </div>

    
  

<label class="switch1">
  <input type="checkbox" checked value= "<?php echo($resultat['smoke']) ?>">
  <span class="slider round"></span>
</label>

<label class="switch2">
  <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>">
  <span class="slider round"></span>
</label>

<label class="switch3">
  <input type="checkbox" checked value= "<?php echo($resultat['temperature']) ?>" >
  <span class="slider round"></span>
</label>

</div>


<div id="tab2">
  <h4>Cuisine</h4>
  <div class="gallery">
          <img src="./public/images/smoke.png" id="smoke" > 
          <div class="desc"></div>
        </div>
          
        

  <div class="gallery">
          <img src="./public/images/lumen.png" id="lumen" >
          <div class="desc"></div>
      </div>
 


<div class="gallery">
          <img src="./public/images/temperature.png" id="temperature" >
          <div class="desc"></div>
      </div>


<div class="gallery">
          <img src="./public/images/humidity.jpg" id="humidity" >
          <div class="desc"></div>
      </div>


<label class="switch1">
  <input type="checkbox" checked value= "<?php echo($resultat['smoke']) ?>" >
  <span class="slider round"></span>
</label>


<label class="switch2">
  <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>" >
  <span class="slider round"></span>
</label>

<label class="switch3">
  <input type="checkbox" checked value= "<?php echo($resultat['temperature']) ?>" >
  <span class="slider round"></span>
</label>


<label class="switch4">
  <input type="checkbox" checked value= "<?php echo($resultat['humidity']) ?>" >
  <span class="slider round"></span>
</label>

  </div>


<div id="tab3">
  <h4>Salle de bain</h4>
      <div class="gallery">
          <img src="./public/images/lumen.png" id="lumen"  >
          <div class="desc"></div>
      </div>
 


<div class="gallery">
          <img src="./public/images/temperature.png" id="temperature" >
          <div class="desc"></div>
      </div>


<div class="gallery">
          <img src="./public/images/humidity.jpg" id="humidity" >
          <div class="desc"></div>
      </div>

<label class="switch1">
  <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>" >
  <span class="slider round"></span>
</label>

<label class="switch2">
  <input type="checkbox" checked value= "<?php echo ($resultat['temperature']) ?>">
  <span class="slider round"></span>
</label>


<label class="switch3">
  <input type="checkbox" checked value= "<?php echo ($resultat['humidity']) ?>">
  <span class="slider round"></span>
</label>

</div>






<div id="tab4">
  <h4>Salon</h4>
        <div class="gallery">
          <img src="./public/images/smoke.png" id="smoke" > 
          <div class="desc"></div>
        </div>



<div class="gallery">
          <img src="./public/images/lumen.png" id="lumen"  >
          <div class="desc"></div>
      </div>
 


<div class="gallery">
          <img src="./public/images/temperature.png" id="temperature" >
          <div class="desc"></div>
      </div>


<div class="gallery">
          <img src="./public/images/humidity.jpg" id="humidity" >
          <div class="desc"></div>
      </div>

<div class="gallery">
          <img src="./public/images/security.png" id="security">
          <div class="desc"></div>
      </div>


<label class="switch1">
  <input type="checkbox" checked value= "<?php echo($resultat['smoke']) ?>" >
  <span class="slider round"></span>
</label>

<label class="switch2">
  <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>" >
  <span class="slider round"></span>
</label>

<label class="switch3">
  <input type="checkbox" checked value= "<?php echo($resultat['temperature']) ?>" >
  <span class="slider round"></span>
</label>

<label class="switch4">
  <input type="checkbox" checked value= "<?php echo($resultat['humidity']) ?>" >
  <span class="slider round"></span>

<label class="switch5">
  <input type="checkbox" checked value= "<?php echo($resultat['security']) ?>" >
  <span class="slider round"></span>

</label>
</div>
</div>


<style>



body {
    font-family: "Lato", sans-serif;
    background-color: #cffdf8;

    font-weight: normal;
    font-style:normal;
    background-size :cover;
    cursor:auto;
    padding: 0;
    margin:0;
 
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f76262;
    display: flex;
}


li {
    float: left;
    display: flex;
    align-items: center;
    border-left: 1px solid black;
    }

li:last-child {
    margin-left: auto;
}

li:nth-last-child(2) {
    border-right: 1px solid black;
}


li a {
    color: black;
    padding: 4px 16px;
    text-decoration: none;
    font-size: 1.5em;
    font-family: Lato, Helvetica, sans-serif;
    border-radius:10px;
    height: 100%;
}

li a p {
    vertical-align: middle;
}

li:hover:not(.active) {
    background-color: #216583;
    transition: all 1s;
}


li a:focus {
    border: 0;
}

 li:a:active{
    color: #f76262;
 }

}
.active {
    background-color: #D3D3D3;
}
.notification{
    margin: 10px 0px;
    padding:12px;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}   
.notification_error{
    color: #D8000C;
    background-color: #FFD2D2;
}
.notification_success{
    color: #4F8A10;
    background-color: #DFF2BF;
}
#validate-button{
    margin:0 auto;
    display:block;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 9px 24px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
   
}
.switch1 { 

  position: absolute;
  top: 0%;
  display: inline-block;
  width: 60px;
  height: 33px;
  margin-top: 32%;
  margin-left:  45%; 

 } 
.switch1 input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.switch2 {
  position: absolute;
  top: 0%;
  display: inline-block;
  width: 60px;
  height: 33px;
  margin-top: 37%;
  margin-left:  45%; 

 } 
.switch2 input { 
  opacity: 0;
  width: 0;
  height: 0;
}
.switch3 {
  position: absolute;
  top: 0%;
  display: inline-block;
  width: 60px;
  height: 33px;
  margin-top: 42%;
  margin-left:  45%; 

 } 
.switch3 input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.switch4 {
  position: absolute;
  top: 0%;
  display: inline-block;
  width: 60px;
  height: 33px;
  margin-top: 46%;
  margin-left:  45%; 

 } 
.switch4 input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.switch5 {
  position: absolute;
  display: inline-block;
  width: 60px;
  height: 33px;
  top: 78px;
  left:  2px; 

 } 
.switch5 input { 
  opacity: 0;
  width: 0;
  height: 0;
}


.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}


.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.tabs {
    margin-top: 22%;
    height: 25%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    text-decoration-color: black;
    background-color: #f76262;
    overflow-x: hidden;
    padding-top: 20px;
    border-radius: 15px;
}

.tabs a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    display: block;
}

.tabs a:hover {
    color: #216583;
}

.main {
    text-decoration-color: #C0C0C0;
    background-color: #65c0ba;
    border: 4px solid black;
    margin-top: 9%; 
    margin-left: 26%;
    font-size: 30px; 
    padding: 18px 35px;
}

h2 {
  text-align: left;

}

h4 {
  text-align: center;
  bottom:100px;
  color: #f76262;
  border

}


@media screen and (max-height: 450px) {
    .tabs {padding-top: 30%}
    .tabs a {font-size: 18%}
}


#smoke{
    height: 8vh;
    width: 8vw;
    top:60px;
  }


#humidity{
    height: 8vh;
    width: 8vw;
    top: 60px;
  }


#security{
    height: 8vh;
    width: 8vw;
    top: 60px;

}

#lumen{

    height: 8vh;
    width: 8vw;
    top: 60px;
}

#temperature{

    height: 8vh;
    width: 8vw;
    top: 60px;  
}          

</style>
</body>
<?php include 'backEnd/footer.php' ?>
</html>

