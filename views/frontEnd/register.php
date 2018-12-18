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
			<h2 id="title"><?= register::pageName ?></h2>
			<hr>
			<div class="input-group">
				<label for="lastName"><?= register::pageName ?></label>
				<input type="text" name="lastName" value="test">
			</div>

			<div class="input-group">
				<label for="nom"><?= register::inputFirstName ?></label>
				<input type="text" name="firstName" value="test">
			</div>
			<div class="input-group">
				<label for="nom"><?= register::inputAge ?></label>
				<input type="text" name="age" value="18">
			</div>
			<div class="input-group">
				<label for="password"><?= register::inputPassword ?></label>
				<input type="password" name="password" value="test">
			</div>

			<div class="input-group">
				<label for="password2"><?= register::inputPasswordConfirm ?></label>
				<input type="password" name="password2" value="test">
			</div>

			<div class="input-group">
				<label for="gender"><?= register::inputGender ?></label>
				<select name="gender">
					<option value="male"><?= register::optionGenderMale ?></option>
					<option value="female"><?= register::optionGenderFemale ?></option>
				</select>
			</div>

			<div class="input-group">
				<label for="type"><?= register::pageName ?></label>
				<select name="type">
					<option value="individual"><?= register::optionTypeIndividual ?></option>
					<option value="professional"><?= register::optionTypeProfessional ?></option>
				</select>
			</div>

			<div class="input-group">
				<label for="email"><?= register::inputEmail ?></label>
				<input type="email" name="email" value="test@yopmail.com">
			</div>

			<div class="input-group">
				<label for="phone"><?= register::inputPhone ?></label>
				<input type="phone" name="phone" value="014854848">
			</div>

			<div class="input-group">
				<label for="adress"><?= register::inputAdress ?></label>
				<input type="text" name="adress" value="tsrezzzz">
			</div>

			<div class="input-group">
				<label for="zipCode"><?= register::inputZipCode ?></label>
				<input type="number" name="zipCode" value="75014">
			</div>

			<div class="input-group">
				<label for="city"><?= register::inputCity ?></label>
				<input type="text" name="city" value="paris">
			</div>

			<div class="input-group">
				<label for="country"><?= register::inputCountry ?></label>
				<select name="country">
					<option value="france"><?= register::optionCountryFrance ?></option>
					<option value="spain"><?= register::optionCountrySpain ?></option>
					<option value="canada"><?= register::optionCountryCanada ?></option>
				</select>
			</div>
			<div class="input-group">
				<label for="cgu"><?= register::inputCGU ?></label>
				<input type="checkbox" name="cgu">
			</div>
			<div class="input-group">
				<input type="submit" name="submit" value="<?= register::inputSubmit ?>" id="validate-button">
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
	var cgu = $("input[name=cgu]").is(':checked');
	var valid = true;
	var error_message ="";
	if(lastName.length < 2)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Le nom ne peut être vide<br>";
		valid = false;
	}
	if(firstName.length < 2)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Le prénom ne peut être vide<br>";
		valid = false;
	}
	if(!$.isNumeric(age))
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> L'âge ne peut être composé de chiffres<br>";
		valid = false;		
	}
	if(password.length < 8)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Le mot de passe doit comporter au moins 8 caractères<br>";
		valid = false;
	}
	if(password2.length < 8)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Le mot de passe de confirmation doit comporter au moins 8 caractères<br>";
		valid = false;
	}
	if(password != password2)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Les mots de passes doivent concorder<br>";
		valid = false;
	}
	if(email.length == 0)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> L'email ne peut être vide<br>";
		valid = false;
	}
	if(!$.isNumeric(phone) && phone.length == 0)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Le numéro de télephone ne peut être vide et doit être composé que de chiffres<br>";
		valid = false;
	}
	if(adress.length == 0)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> L'adresse ne peut être vide<br>";
		valid = false;
	}
	if(zipCode.length == 0)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Le code postal ne peut être vide<br>";
		valid = false;
	}
	if(city.length == 0)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> La ville ne peut être vide<br>";
		valid = false;
	}
	if(country.length == 0)
	{
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Le pays ne peut pas être vide<br>";
		valid = false;
	}
	if(!cgu)
	{	
		error_message+= "<i class='fas fa-exclamation-triangle'></i> Veuillez accepter les CGU<br>";
		valid = false;
	}
	if(valid == false)
	{
		if(!$(".notification").length)
		{
			$('<div class="notification notification_error">'+error_message+'</div>').insertBefore('#form-container');
		}
		else
		{
			$('.notification').html(error_message);
		}
	}
	else
	{
		if(!$(".notification").length)
		{
			$(".notification").remove();
		}
	}
	return valid;
});
</script>