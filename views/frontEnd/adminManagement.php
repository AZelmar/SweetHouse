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
  <div class="box" >
	<h2 id="title"> Gestion Utilisateur :</h2>
      <hr>
      <select class="chosen-select" name="maisonUtilisateur" style="width:300px" ; id="maisonUtilisateur">
      	<?php foreach ($maisons as $output) {?>
      	<option><?php echo $output["userId"];echo " ";echo $output["lastName"];?></option>
      	<?php }?>
        
	  </select>
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
			
		</div>
		<input type="submit" name="valider" value= Modifier >
      </form>
  </div>


  <div class="box">
	<h2 id="title"> Gestion Technicien :</h2>
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


  <div class="box" >
	<h2 id="title"> Gestion Capteurs :</h2>
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

<script type="text/javascript" src="./public/js/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
    $(".chosen-select").chosen();
</script>


</body>
</html>

<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 33.33%;
  padding:100px;
  margin:auto;
  border: 3px solid black;
  background-color: #65c0ba;

}



body{
	text-align: center;
	font-weight: normal;
    font-style:normal;
    background-size :cover;
    cursor:auto;
    padding: 0;
	margin:0;
	background-color:#cffdf8;
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

</style>
