<!DOCTYPE html>

<?php
      
  if (isset($_POST['Chambres'])) {
    if (<input type="boutton" name="Chambres" value="Chambres">) {

        header('Location:/Chambres.php');
    
        exit();
      }
  }

  if (isset($_POST['Cuisine'])) {
    if (<input type="boutton" name="Cuisine" value="Cuisine">) {
    
        header('Location:/Cuisine.php');
    
        exit();
      }
  }

  if (isset($_POST['Salon'])) {
    if (<input type="boutton" name="Salon" value="Salon">) {
    
        header('Location:/salon.php');
  
        exit();
      }    
  }

  if (isset($_POST['Salle'])) {
    if (<input type="boutton" name="Salle" value="Salle">) {
    
        header('Location:/Salle%20de%20bain.php');
    
        exit();
      }
  }
}
 
?>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./public/css/style.css" />

</head>

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
  margin-top: 18%;
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
  margin-top: 24%;
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
  margin-top: 31%;
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
  margin-top: 38%;
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
  top: 93px;
  left:  3px; 

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

.sidenav {
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

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    display: block;
}

.sidenav a:hover {
    color: #216583;
}

.main {
    text-decoration-color: black;
    background-color: #65c0ba;
    border: 4px solid black;
    margin-top: 7%; 
    margin-left: 26%;
    font-size: 28px; 
    padding: 5px 35px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 30%}
    .sidenav a {font-size: 18%}
}


#smoke{
    height: 7vh;
    width: 7vw;
  }


#humidity{
    height: 8vh;
    width: 8vw;
  }


#security{
    height: 8vh;
    width: 8vw;
}

#lumen{

    height: 8vh;
    width: 8vw;
}

#temperature{

    height: 8vh;
    width: 8vw;  
}          

</style>
<body>

<div class="sidenav">
  <a href="/Chambres">Chambres</a>
  <a href="/Cuisine">Cuisine</a>
  <a href="/Salle de bain">Salle de bain</a>
  <a href="/Salon">Salon</a>
</div>
 
<div class="main" >
  <h2>Capteurs</h2>
  

  <p>
    <img src="smoke.png" id="smoke">
  </p>  
 
 <p>
   <img src="humidity.jpg" id ="humidity">
 </p>

 <p>
   <img src="security.png" id="security">
 </p>

 <p>
   <img src="lumen.png" id="lumen">
 </p>

  <p>
   <img src="temperature.png" id="temperature">
 </p>


</div>     

<label class="switch1">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>

<label class="switch2">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>

<label class="switch3">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>

<label class="switch4">
  <input type="checkbox" checked>
  <span class="slider round"></span>

<label class="switch5">
  <input type="checkbox" checked>
  <span class="slider round"></span>

</label>

             
</body>
</html>


