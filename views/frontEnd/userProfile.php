<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./public/css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">  
	<title><?= base::websiteName ?>| <?= profile::pageName ?></title>
</head>
<?php 
include 'backEnd/header.php';
$email=$_SESSION['email'];
$resultat = getUserData($email);
changeUserData($email);

?>

<body>
	<div id="Profil">
	<h2 id="title"><?= profile::profileMan ?></h2>
      <hr>
      <form method="post" action="userprofile">
        <p>
        
		<div class="input-group">
			<label><?= profile::modifyHome ?></label>
			<input type="text" name="adress" value= "<?php echo htmlentities($resultat['adress']) ?>" >
		</div>
		<div class="input-group">
			<label><?= profile::modifyWork ?></label>
			<input type="text" name="adressbur" >
		</div>
		<div class="input-group">
			<label><?= profile::modifyName ?></label>
			<input type="text" name="last-name" value= "<?php echo htmlentities($resultat['lastName']) ?>" >
		</div>
		<div class="input-group">
			<label><?= profile::modifySurname ?></label>
			<input type="text" name="first-name" value= "<?php echo htmlentities($resultat['firstName']) ?>" >
		</div>
		<div class="input-group">
			<label><?= profile::modifySex ?></label>
			<input type="text" name="gender" value= "<?php echo htmlentities($resultat['gender']) ?>" >
		</div>
		<div class="input-group">
			<label><?= profile::contact ?></label>
			<input type="text" 
				   value="Pierre Louis, 0684759562, pierrelouis158@gmail.com"
				   size="50">
		</div>
        <div class="input-group">
          <label><?= profile::delAcc ?></label>
          <input type="text" name="delaccount" value=" <?php echo htmlentities($resultat['delaccount']) ?>" placeholder= <?= profile::suppAcc ?> >
        </div>
       <input type="submit" name="valider" value=<?= profile::del ?>>
      	</form>
  </div>
    
    <div id="aside">

      </div>    
	<div id="Infos">
	<h2 id="title"><?= profile::infosGen ?></h2>
		<hr>
		<div class="infos-group">
			<h1 id="titreinfos"><?= profile::hello ?> <?php echo htmlentities($resultat['firstName']) ?>  </h1>
			<p id="texteinfos"> 
				<?= profile::domHouse ?>
				<br><br>
				<?= profile::house ?> <?php echo htmlentities($resultat['adress']) ?>  
				<br><br> 
				<?= profile::work ?>
				<br><br><br>
				<?= profile::tech ?>
				<br>
				<?= profile::intrus?>
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
