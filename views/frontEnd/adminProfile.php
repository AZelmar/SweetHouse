<?php include('./public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include './views/backEnd/globalHead.php'; ?>
	<title><?= base::websiteName ?>| Profil Admin </title>
</head>
<?php 
include './views/backEnd/header.php';
include './views/backEnd/footer.php';
include './views/backEnd/notification.php';
?>

<body>
	<div id="Profil">
	<h2 id="title"> Votre profil :</h2>
      <hr>
      <form method="post" action="adminProfile">
        <p>
        
		<div class="input-group">
			<label>Modifier mail :</label>
			<input type="text" name="mail" value= "<?php echo htmlentities($resultat['email']) ?>" >
		</div>
		<div class="input-group">
			<label>Modifier numero de telephone :</label>
			<input type="text" name="phoneNumber" value= "<?php echo htmlentities($resultat['phone']) ?>" >
		</div>
		<div class="input-group">
			<label>Entrez votre ancien mot de passe ( pour le changer ):</label>
			<input type="password" name="oldPassword" >
		</div>
		<div class="input-group">
			<label>Entrez votre nouveau mot de passe :</label>
			<input type="password" name="newPassword" >
		</div>
		<input type="submit" name="valider" value= Modifier >
      </form>
  </div>
    
   
<div id="Infos">
	<h2 id="title">Informations generales</h2>
		<hr>
		<div class="infos-group">
			<h1 id="titreinfos">Bonjour <?php echo htmlentities($resultat['firstName']) ?>  </h1>
			<p id="texteinfos"> 
				Aujourd'hui : 
				<br><br>
				Il y a <?php echo htmlentities($resultatQuestion) ?> nouvelles questions dans le forum 
				<br><br> 
				Il y a <?php echo htmlentities($resultatMaison) ?> nouvelles maisons 
				<br><br>
				Il y a <?php echo htmlentities($achatsCapteurs) ?> achats dans la boutique
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
	margin-left: 100px;
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
