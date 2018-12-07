<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./public/css/style.css" /> 
	<title>SweetHouse | Mot de passe oublié </title>
</head>
<body>
	<?php include 'backEnd/header.php' ?>
	<?PHP include 'backEnd/notification.php' ?>
	<div id="form-container">
		<form method="POST">
			<h2 id="title">Mot de passe oublié</h2>
			<hr>
			<div class="input-group">
				<label for="email">Adresse email :</label>
				<input type="email" name="email" value="test@yopmail.com">
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
#resend-button{
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