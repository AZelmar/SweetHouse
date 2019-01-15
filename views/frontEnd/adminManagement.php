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
include 'backEnd/notification.php';
include 'backEnd/footer.php';
?>
<form method="POST">
<div class="clearfix">
  <div class="box" >
	<h2 id="title"> Gestion Utilisateur :</h2>
      <hr>
      <select class="chosen-select" name="userId" style="width:300px" id="userId">
      	<?php foreach ($clients as $output) {?>
      	<option value="<?= $output['userId'] ?>"><?php echo $output["userId"];echo " ";echo $output["lastName"];?></option>
      	<?php }?>
	  </select>
        <p>
  		<div class="input-group">
			<label>Date inscription :</label>
			<input type="text" name="userRegistration" disabled>
		</div>  
		  <div class="input-group">
			<label>Prénom :</label>
			<input type="text" name="userFirstName" disabled>
		</div>  
		 <div class="input-group">
			<label>Etat du compte :</label>
			<input type="number" name="userActive">
		</div>      
		<div class="input-group">
			<label>Modifier mail :</label>
			<input type="text" name="userMail" value= "opzejfio" >
		</div>
		<div class="input-group">
			<label>Modifier numero de telephone :</label>
			<input type="phone" name="userPhoneNumber" value= "zopejroi" >
		</div>
		<div class="input-group">
			
		</div>
		<input type="submit" name="userSubmit" value= Modifier >
  </div>


  <div class="box">
	<h2 id="title"> Gestion Technicien :</h2>
      <hr>
        
              <select class="chosen-select" name="technicianId" style="width:300px" id="technicianId">
      	<?php foreach ($technicians as $output) {?>
      	<option value="<?= $output['userId'] ?>"><?php echo $output["userId"];echo " ";echo $output["lastName"];?></option>
      	<?php }?>
	  </select>
	  		  <div class="input-group">
			<label>Prénom :</label>
			<input type="text" name="technicianFirstName" disabled>
		</div>  
		<div class="input-group">
			<label>Modifier mail :</label>
			<input type="text" name="technicianMail">
		</div>
		<div class="input-group">
			<label>Modifier numero de telephone :</label>
			<input type="text" name="technicianPhoneNumber" value= "kijfoijo" >
		</div>
		<div class="input-group">
			<label>Vos rendez-vous :</label>
			<select name="rdv">
					<option value="1" selected="selected">24/01: Mme Chabchoub 13:30</option>
					<option value="2">28/01: Mme Kazi 15:00</option>
					<option value="3">02/02: M. Feller 17:00</option>
			</select>
		</div>
		<input type="submit" name="technicianSubmit" value= Modifier >
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
</form>
<script type="text/javascript" src="./public/js/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
	$("#userId").chosen();
	$("#technicianId").chosen();
	$(document).ready(function(){
		loadUserInfo();
		loadTechnicianInfo();
	    $("#userId").change(function(){
	    	loadUserInfo();
	    });
	    $("#technicianId").change(function(){
	    	loadTechnicianInfo();
	    });
	    function loadUserInfo(){
	    	$.ajax({
			    type: "POST",
			    url: "<?= $basename ?>/ajax/getUserInfo",
			    data: {userId:  $("#userId").val()},
			    success: function(data){
			    	var userData = JSON.parse(data);
			    	$("[name='userRegistration']").val(userData[4]);
			    	$("[name='userFirstName']").val(encodeURIComponent(userData[6]));
			    	$("[name='userActive']").val(encodeURIComponent(userData[2]));
			    	$("[name='userMail']").val(encodeURI(userData[11]));
			    	$("[name='userPhoneNumber']").val("0"+encodeURIComponent(userData[12]));
			    }
			});
	    }
 		function loadTechnicianInfo(){
	    	$.ajax({
			    type: "POST",
			    url: "<?= $basename ?>/ajax/getTechnicianInfo",
			    data: {userId:  $("#technicianId").val()},
			    success: function(data){
			    	var userData = JSON.parse(data);
			    	console.log(userData);
			    	$("[name='technicianFirstName']").val(encodeURIComponent(userData[6]));
			    	$("[name='technicianMail']").val(encodeURI(userData[11]));
			    	$("[name='technicianPhoneNumber']").val("0"+encodeURIComponent(userData[12]));
			    }
			});
	    }
	});
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
  border-right: 3px solid black;
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
	padding:15px;

}
label{
	display: inline-block;
}

</style>
