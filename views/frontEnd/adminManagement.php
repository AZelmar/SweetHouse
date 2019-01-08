<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'backEnd/globalHead.php'; ?>
	<title><?= base::websiteName ?>| Profil Admin </title>
</head>
<?php 
include 'backEnd/header.php';
include 'backEnd/footer.php';
?>

<div class="clearfix">
  <div class="box" style="background-color:#bbb">
  <div id="Profil">
	<h2 id="title"> Votre profil :</h2>
      <hr>
      <form method="post" action="adminProfile">
        <p>
        
		<div class="input-group">
			<label>Modifier mail :</label>
			<input type="text" name="mail" value= "opzejfio" >
		</div>
		<div class="input-group">
			<label>Modifier numero de telephone :</label>
			<input type="text" name="phoneNumber" value= "zopejroi" >
		</div>
		<div class="input-group">
			<label>Vos rendez-vous :</label>
			<select name="rdv">
					<option value="1" selected="selected">24/01: Mme Chabchoub 13:30</option>
					<option value="2">28/01: Mme Kazi 15:00</option>
					<option value="3">02/02: M. Feller 17:00</option>
			</select>
		</div>
		<input type="submit" name="valider" value= Modifier >
      </form>
  </div>
  </div>


  <div class="box" style="background-color:#ccc">
  <div id="Profil">
	<h2 id="title"> Votre profil :</h2>
      <hr>
      <form method="post" action="adminProfile">
        <p>
        
		<div class="input-group">
			<label>Modifier mail :</label>
			<input type="text" name="mail" value= "zpoefjpozej" >
		</div>
		<div class="input-group">
			<label>Modifier numero de telephone :</label>
			<input type="text" name="phoneNumber" value= "kijfoijo" >
		</div>
		<div class="input-group">
			<label>Vos rendez-vous :</label>
			<select name="rdv">
					<option value="1" selected="selected">24/01: Mme Chabchoub 13:30</option>
					<option value="2">28/01: Mme Kazi 15:00</option>
					<option value="3">02/02: M. Feller 17:00</option>
			</select>
		</div>
		<input type="submit" name="valider" value= Modifier >
      </form>
  </div>
  </div>


  <div class="box" style="background-color:#ddd">
  <div id="Profil">
	<h2 id="title"> Votre profil :</h2>
      <hr>
      <form method="post" action="adminProfile">
        <p>
        
		<div class="input-group">
			<label>Modifier mail :</label>
			<input type="text" name="mail" value= "oiazjroiz" >
		</div>
		<div class="input-group">
			<label>Modifier numero de telephone :</label>
			<input type="text" name="phoneNumber" value="iosjfiod" >
		</div>
		<div class="input-group">
			<label>Vos rendez-vous :</label>
			<select name="rdv">
					<option value="1" selected="selected">24/01: Mme Chabchoub 13:30</option>
					<option value="2">28/01: Mme Kazi 15:00</option>
					<option value="3">02/02: M. Feller 17:00</option>
			</select>
		</div>
		<input type="submit" name="valider" value= Modifier >
      </form>
  </div>
  </div>
</div>

</body>
</html>

<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 33.3%;
  padding: 100px;
}



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
	margin-top: 10px;
	padding:55px;
	float:left;
}
label{
	display: inline-block;
}

#Profil {
	margin:auto;
	border: 3px solid black;
	padding: auto;
	background-color: #65c0ba;
	color: black;
	



}

</style>
