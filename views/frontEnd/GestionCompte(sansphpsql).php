<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" /> 
	<title>SweetHouse</title>
</head>

  <!DOCTYPE html>
<body>
<header>

	<ul>
  <li id="logo-li"><img id="logo" src="logo.png"></li>
  <li><a href="#accueil">Accueil</a></li>
  <li><a href="#inscription">Inscription</a></li>
  <li><a href="#connexion">Connexion</a></li>
  <li><a href="#aide">Aide</a></li>
  <li><a href="#contact" >Contactez-nous !</a></li>
	</ul>

</header>


	<div id="Profil">

	<h2 id="title">Gestion du profil</h2>
		<hr>
		<div class="input-group">
			<label> Modifier votre adresse de domicile :</label>
			<input type="text">
		</div>
		<div class="input-group">
			<label>Modifier votre adresse bureau:</label>
			<input type="text">
		</div>
		<div class="input-group">
			<label>Modifier votre nom:</label>
			<input type="text">
		</div>
		<div class="input-group">
			<label>Modifier votre prénom:</label>
			<input type="text">
		</div>
		<div class="input-group">
			<label>Modifier votre sexe:</label>
			<input type="text">
		</div>
		<div class="input-group">
			<label>Contacter son technicien:</label>
			<input type="text" 
				   value="Pierre Louis, 0684759562, pierrelouis158@gmail.com"
				   size="50">
		</div>

	</div>

	<div id="Infos">
	<h2 id="title">Informations générales</h2>
		<hr>
		<div class="infos-group">
			<h1 id="titreinfos"> Bonjour Vladimir </h1>
			<p id="texteinfos"> 
				Vos lieux domotisés: 
				<br><br>
				 Maison : 
				<br><br> 
				Entreprise:
				<br><br><br>
				Pas de problemes techniques
				<br>
				Pas d'intrusions
			</p>
		</div>
	</div>
</body>
</html>

<style>

body{
	text-align: center;
	font-weight: normal;
    font-style:normal;
    background-size :cover;
    cursor:auto;
    padding: 0;
	margin:0;
	background-color:#cffdf8
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f76262;
    display: flex;
    position:relative;
    z-index:8;

}


li {
    float: left;
    display:flex;
    align-items: center;
    border-left: 1px dotted black;
    
}
li:last-child {
    margin-left: auto;
    
}
li:nth-last-child(2) {
    border-right: 1px dotted black;

}

li a {
    color: #cffdf8;
    padding: 4px 16px;
    text-decoration: none;
    font-size: 1.5em;
    font-family: Lato, Helvetica, sans-serif;
    border-radius:10px;
}

li:hover:not(.active) {
    background-color: #216583;
    transition: all 1s;
    
}

li a:focus {
    border : 3px dotted white;
}
 li:a:active{
    color: #f76262;
 }


#logo-li {
    border-right: none;
}
#logo{
    display: block;
    height: 10vh;
    width: 10vw;
}
.active {
    background-color: #D3D3D3;
}


#title{
	text-align: center;
}
.input-group{
	margin-top: 30px;
	padding:10px;
	float:left;
}
label{
	display: inline-block;
}
hr{
	margin-bottom: 30px;
}
#Profil {
	float:right;
	margin-right: 200px;
	border: 3px solid black;
	padding: 10px;
	margin-top: 30px;
	background-color: #216583;
	color:#cffdf8;
	width: 35%;

}

#Infos {
	float:left;
	margin-left: 300px;
	border: 3px solid black;
	padding: 10px;
	margin-top: 30px;
	background-color: #216583;
	color:#cffdf8;
	width: 30%;
	font-size: 30px;
}

.infos-group{
	padding:10px;
	margin-top: -30px;
}

.texteinfos{

}

</style>