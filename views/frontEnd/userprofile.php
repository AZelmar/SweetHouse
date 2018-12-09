<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./public/css/style.css" /> 
	<title>SweetHouse</title>
</head>
<?php 
include 'controller/userController.php';
include 'backEnd/config.php';
include 'model/userEntity.php';
include 'backEnd/header.php';
$resultat = getUserData();
$email=$_SESSION['email'];

?>

<body>
	<div id="Profil">
	<h2 id="title">Gestion du profil</h2>
      <hr>
      <form method="post" action="userprofile">
        <p>
        
		<div class="input-group">
			<label> Modifier votre adresse de domicile :</label>
			<input type="text" name="adress" value= "<? echo htmlentities($resultat['adress']) ?>" >
		</div>
		<div class="input-group">
			<label>Modifier votre adresse bureau:</label>
			<input type="text" name="adressbur" >
		</div>
		<div class="input-group">
			<label>Modifier votre nom:</label>
			<input type="text" name="last-name" value= "<? echo htmlentities($resultat['lastName']) ?>" >
		</div>
		<div class="input-group">
			<label>Modifier votre prénom:</label>
			<input type="text" name="first-name" value= "<? echo htmlentities($resultat['firstName']) ?>" >
		</div>
		<div class="input-group">
			<label>Modifier votre sexe:</label>
			<input type="text" name="gender" value= "<? echo htmlentities($resultat['gender']) ?>" >
		</div>
		<div class="input-group">
			<label>Contacter son technicien:</label>
			<input type="text" 
				   value="Pierre Louis, 0684759562, pierrelouis158@gmail.com"
				   size="50">
		</div>
       <input type="submit" name="valider" value="modifier"/>
      	</form>
  </div>
    
    <div id="aside">
<?php
  
 if (isset($_POST['valider']) )
{
  if ((!empty($_POST['adress'])) && (!empty($_POST['gender'])) && (!empty($_POST['first-name'])) && (!empty($_POST['last-name'])))
     {
          $req= 'UPDATE user SET firstName = :firstName, lastName = :lastName, gender =:gender, adress =:adress 
          		WHERE email = "'.$email.'"';
          $reqp= $pdo->prepare($req);
          $reqp ->execute(array('lastName'=>$_POST['last-name'],'firstName'=>$_POST['first-name'],'gender'=>$_POST['gender'], 'adress'=>$_POST['adress']));
         }
  else
  {
    echo 'Vous devez remplir tous les champs !';
  }
}
                   
?>
      </div>    
	<div id="Infos">
	<h2 id="title">Informations générales</h2>
		<hr>
		<div class="infos-group">
			<h1 id="titreinfos"> Bonjour <? echo htmlentities($resultat['firstName']) ?> </h1>
			<p id="texteinfos"> 
				Vos lieux domotisés: 
				<br><br>
				 Maison: <? echo htmlentities($resultat['adress']) ?>  
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
	padding: 20px;
	margin-top: 30px;
	background-color: #65c0ba;
	color: black;
	width: 35%;


}

#Infos {
	float:left;
	margin-left: 200px;
	border: 3px solid black;
	padding: 10px;
	margin-top: 30px;
	background-color: #65c0ba;
	color:black;
	width: 30%;
	font-size: 30px;
}

.infos-group{
	padding:10px;
	margin-top: -30px;
}

input[type=submit] {
  	width: 100%;
  	background-color: #216583;
  	color: black;
  	padding: 14px 20px;
  	margin: 10px 0;
  	border: 3px solid black;
  	border-radius: 10px;
  	cursor: pointer;
}

input[type=submit]:hover {
  background-color: white;
  transition-duration: 0.4s;
  color: black;
}

</style>
