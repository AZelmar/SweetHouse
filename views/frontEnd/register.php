<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./public/css/style.css" /> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous"> 
	<title><?= base::websiteName ?>| <?= register::pageName ?></title>
</head>
<body>
	<?php include 'backEnd/header.php' ?>
	<?PHP include 'backEnd/notification.php' ?>
	<div id="form-container">
		<form method="POST">
			<h2 id="title">Inscription</h2>
			<hr>
			<div class="input-group">
				<label for="lastName">Nom:</label>
				<input type="text" name="lastName" value="test">
			</div>

			<div class="input-group">
				<label for="nom">Prénom:</label>
				<input type="text" name="firstName" value="test">
			</div>
			<div class="input-group">
				<label for="nom">Age:</label>
				<input type="text" name="age" value="18">
			</div>
			<div class="input-group">
				<label for="password">Mot de passe :</label>
				<input type="password" name="password" value="test">
			</div>

			<div class="input-group">
				<label for="password2">Répetez mot de passe :</label>
				<input type="password" name="password2" value="test">
			</div>

			<div class="input-group">
				<label for="gender">Genre :</label>
				<select name="gender">
					<option value="male">Homme</option>
					<option value="female">Femme</option>
				</select>
			</div>

			<div class="input-group">
				<label for="type">Type :</label>
				<select name="type">
					<option value="individual">Particulier</option>
					<option value="professional">Professionel</option>
				</select>
			</div>

			<div class="input-group">
				<label for="email">Adresse email :</label>
				<input type="email" name="email" value="test@yopmail.com">
			</div>

			<div class="input-group">
				<label for="phone">Numéro de télephone:</label>
				<input type="phone" name="phone" value="014854848">
			</div>

			<div class="input-group">
				<label for="adress">Adresse :</label>
				<input type="text" name="adress" value="tsrezzzz">
			</div>

			<div class="input-group">
				<label for="zipCode">Code postal :</label>
				<input type="number" name="zipCode" value="75014">
			</div>

			<div class="input-group">
				<label for="city">Ville :</label>
				<input type="text" name="city" value="paris">
			</div>

			<div class="input-group">
				<label for="country">Pays :</label>
				<select name="country">
					<option value="france">France</option>
					<option value="spain">Espagne</option>
					<option value="canada">Canada</option>
				</select>
			</div>
			<div class="input-group">
				<label for="cgu">Acceptez les CGU :</label>
				<input type="checkbox" name="cgu">
			</div>
			<div class="input-group">
				<input type="submit" name="submit" value="Valider" id="validate-button">
			</div>
		</form>
	</div>
</body>
</html>
<style>
body{
	text-align: center; 
}
#form-container{
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
</style>
<script>
$("#validate-button").click(function(){
	var lastName = $("input[name=lastName]").val();
	var firstName = $("input[name=firstName]").val();
	var age = $("input[name=age]").val();
	var password = $("input[name=password]").val();
	var password2 = $("input[name=password2]").val();
	var gender = $("select[name=gender]").val();
	var type = $("select[name=type]").val();
	var email = $("input[name=email]").val();
	var phone = $("input[name=phone]").val();
	var adress = $("input[name=adress]").val();
	var zipCode = $("input[name=zipCode]").val();
	var city = $("input[name=city]").val();
	var country = $("select[name=country]").val();
	console.log(type);
	return false;
});
</script>