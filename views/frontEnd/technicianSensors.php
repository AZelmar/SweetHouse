<?php include('./public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include './views/backEnd/globalHead.php'; ?>
	<title><?= base::websiteName ?>| Maison Technicien </title>
</head>
<body>
	<?php include './views/backEnd/header.php' ?>
	<?PHP include './views/backEnd/notification.php' ?>
	<div id="form-container">
	<h2 id="title"> Gestion Capteurs :</h2>
	<hr>
      <select class="chosen-select" name="userId1" style="width:300px" id="userId1">
      	<?php foreach ($clients1 as $output1) {?>
      	<option value="<?= $output1['userId'] ?>"><?php echo htmlentities($output1["userId"]);?></option>
      	<?php }?>
	  </select>
	  <p>
	  	<input type="submit" name="sensTechSubmit" value= Afficher action="technicianSensors">
		<div class="input-group">
			<label>Récapitulatif des capteurs :</label>
			<select name="sensorsUser" style="width: 100%">
				<?php foreach (getUserSensorById($getSens1) as $output2) {?>
      	<option value="<?= $output2['lastName'] ?>"><?php echo " Le capteur de ";echo htmlentities($output2["sensors"]);echo " de " ; echo htmlentities($output2["rooms"]);echo " de ";echo htmlentities($output2["lastName"]);echo " : état "; echo htmlentities($output2["states"]); echo ", fonctionel : "; echo htmlentities($output2["functionals"]);?></option>
      	<?php }?>
			</select>
		</div>
	</p>

	</div>

	<?php include './views/backEnd/footer.php' ?>
</body>
</html>
<script type="text/javascript" src="./public/js/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
	$("#userId1").chosen();
</script>
<style>
body{
	text-align: center; 
	align-items: center; 
}
#form-container{
	align-items: center; 
	display: inline-block;
	text-align: left;
	margin-top: 25px;
	background-color: #65c0ba;
	padding: 15px;
	border: 2px solid black;
}
#title{
	text-align: center;
}
.input-group{
	margin-top: 15px;
}
label{
	display: inline-block;
}
hr{
	margin-bottom: 20px;
}
#forgot-button{
    margin:0 auto;
    background-color: #ff9800;
    border: none;
    color: white;
    padding: 9px 24px;
    text-align: center;
    text-decoration: none;
        font-size: 14px;
}
</style>