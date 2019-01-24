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
include './views/backEnd/notification.php';
include './views/backEnd/footer.php';
?>
<form method="POST">
<div class="clearfix">
  <div class="box" >
	<h2 id="title"> Gestion Utilisateur :</h2>
      <hr>
      <select class="chosen-select" name="userId" style="width:300px" id="userId">
      	<?php foreach ($clients as $output) {?>
      	<option value="<?= $output['userId'] ?>"><?php echo htmlentities($output["userId"]);echo " ";echo htmlentities($output["lastName"]);?></option>
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
			<input type="text" name="userMail">
		</div>
		<div class="input-group">
			<label>Modifier numero de telephone :</label>
			<input type="phone" name="userPhoneNumber">
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
      	<option value="<?= $output['userId'] ?>"><?php echo htmlentities($output["userId"]);echo " ";echo htmlentities($output["lastName"]);?></option>
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
			<input type="text" name="technicianPhoneNumber">
		</div>
		<div class="input-group">
			<label>Récapitulatif de ses rendez-vous :</label>
			<select name="technicianRdv" style="width: 100%">
				<option>Aucun RDV trouvé</option>
			</select>
		</div>
		<input type="submit" name="technicianSubmit" value= Modifier >
  </div>


  <div class="box" >
	<h2 id="title"> Gestion Capteurs :</h2>
	<hr>
      <select class="chosen-select" name="userId1" style="width:300px" id="userId1">
      	<?php foreach ($clients1 as $output1) {?>
      	<option value="<?= $output1['userId'] ?>"><?php echo htmlentities($output1["userId"]);?></option>
      	<?php }?>
	  </select>
	  <p>
	  	<input type="submit" name="sensSubmit" value= Afficher action="adminManagement" >
		<div class="input-group">
			<label>Récapitulatif des capteurs :</label>
			<select name="sensorsUser" style="width: 100%">
				<?php foreach (getUserSensorById($getSens) as $output2) {?>
      	<option value="<?= $output2['lastName'] ?>"><?php echo " Le capteur de ";echo htmlentities($output2["sensors"]);echo " de " ; echo htmlentities($output2["rooms"]);echo " de ";echo htmlentities($output2["lastName"]);echo " : état "; echo htmlentities($output2["states"]); echo ", fonctionel : "; echo htmlentities($output2["functionals"]);?></option>
      	<?php }?>
			</select>
		</div>
  </div>
</div>
</form>
<script type="text/javascript" src="./public/js/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
	$("#userId").chosen();
	$("#userId1").chosen();
	$("#technicianId").chosen();
	loadUserInfo();
	loadTechnicianInfo();
	/*loadUserSensors()*/;
	  function loadUserInfo(){
	    	$.ajax({
			    type: "POST",
			    url: "<?= $basename ?>/ajax/getUserInfo",
			    data: {userId:  $("#userId").val()},
			    success: function(data){
			    	var userData = JSON.parse(data);

			    	$("[name='userRegistration']").val(htmlEntities(userData[4]));
			    	$("[name='userFirstName']").val(htmlEntities(userData[6]));
			    	$("[name='userActive']").val(htmlEntities(userData[2]));
			    	$("[name='userMail']").val(htmlEntities(userData[11]));

			    	$("[name='userRegistration']").val(htmlEntities(userData[4]));
			    	$("[name='userFirstName']").val(htmlEntities(userData[6]));
			    	$("[name='userActive']").val(htmlEntities(userData[2]));
			    	$("[name='userMail']").val(htmlEntities(userData[11]));

			    	$("[name='userPhoneNumber']").val("0"+htmlEntities(userData[12]));
			    }
			});
	    }
	/*function loadUserSensors(){
	    	$.ajax({
			    type: "POST",
			    url: "<?= $basename ?>/ajax/getUserSensor",
			    data: {userId:  $("#userId1").val()},
			    success: function(data){
			    	console.log(userData);
			    	var userData = JSON.parse(data);
		
			    	$("[name='userNameSensors']").val(htmlEntities(userData[6]));	
			    	var empty = true;
			    		$("[name='sensorsUser']").empty();
				    	$.each(userData,function(i){
				    		if(userData[i]["rooms"])
				    		{
								empty = false;
								$("[name='sensorsUser']").append('<option>[ '+htmlEntities(userData[i]["rooms"])+" "+htmlEntities(userData[i]["sensors"])+htmlEntities(userData[i]["states"])+htmlEntities(userData[i]["functionals"])+'</option>');
				    		}
				    	})
				    	if(empty)
				    	{
				    		$("[name='sensorsUser']").append('<option>Pas de capteurs</option>');
				    	}

				    }


			    
			});
	    }
	    */
 		function loadTechnicianInfo(){
	    	$.ajax({
			    type: "POST",
			    url: "<?= $basename ?>/ajax/getTechnicianInfo",
			    data: {userId:  $("#technicianId").val()},
			    success: function(data){
			    	console.log(userData);
			    	var userData = JSON.parse(data);

			    	$("[name='technicianFirstName']").val(htmlEntities(userData[6]));
			    	$("[name='technicianMail']").val(htmlEntities(userData[11]));
			    	$("[name='technicianPhoneNumber']").val("0"+htmlEntities(userData[12]));

			    	if(userData.length > 0)
			    	{
			    		$("[name='technicianFirstName']").val(htmlEntities(userData[0]["technicianFirstName"]));
			    		$("[name='technicianMail']").val(htmlEntities(userData[0]["technicianEmail"]));
			    		$("[name='technicianPhoneNumber']").val("0"+htmlEntities(userData[0]["technicianPhone"]));
			    		var empty = true;
			    		$("[name='technicianRdv']").empty();
				    	$.each(userData,function(i){
				    		if(userData[i]["day"])
				    		{
								empty = false;
								$("[name='technicianRdv']").append('<option>[ '+htmlEntities(userData[i]["day"])+" "+htmlEntities(userData[i]["hour"])+" ] RDV avec "+htmlEntities(userData[i]["userFirstName"])+" pour "+htmlEntities(userData[i]["reason"])+'</option>');
				    		}
				    	})
				    	if(empty)
				    	{
				    		$("[name='technicianRdv']").append('<option>Aucun RDV trouvé</option>');
				    	}
			    	}

			    }
			});
	    }
	$(document).ready(function(){
		$("#userId").change(function(){
	    	loadUserInfo();
	    });
	    /*
	    $("#userId1").change(function(){
	    	loadUserSensors();
	    });*/
	    $("#technicianId").change(function(){
	    	loadTechnicianInfo();
	    });
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
