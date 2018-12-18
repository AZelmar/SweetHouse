<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./public/css/style.css" /> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous"> 
	<title><?= base::websiteName ?>| <?= forgotPassword::pageName ?></title>
</head>
<body>
	<?php include 'backEnd/header.php' ?>
	<?PHP include 'backEnd/notification.php' ?>
	<div id="form-container">
		<form method="POST">
			<h2 id="title"><?= forgotPassword::pageName ?></h2>
			<hr>
			<div class="input-group">
				<label for="email"><?= forgotPassword::inputEmail ?></label>
				<input type="email" name="email" value="test@yopmail.com">
			</div>
			<div class="input-group">
				<input type="submit" name="submit" value="<?= forgotPassword::inputSubmit ?>" id="validate-button">
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