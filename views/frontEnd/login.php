<?php include('./public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include './views/backEnd/globalHead.php'; ?>
	<title><?= base::websiteName ?>| <?= login::pageName ?></title>
</head>
<body>
	<?php include './views/backEnd/header.php' ?>
	<?PHP include './views/backEnd/notification.php' ?>
	<div id="form-container">
		<form method="POST">
			<h2 id="title"><?= login::pageName ?></h2>
			<hr>
			<div class="input-group">
				<label for="email"><?= login::inputEmail ?></label>
				<input type="email" name="email" value="test@yopmail.com">
			</div>

			<div class="input-group">
				<label for="password"><?= login::inputPassword ?></label>
				<input type="password" name="password" value="yolo">
			</div>
			<div class="input-group">
				<label for="remember"><?= login::inputRemember ?></label>
				<input type="checkbox" name="remember">
			</div>
			<div class="input-group">
				<input type="submit" name="submit" value="<?= login::inputSubmit ?>" id="validate-button">
				<a href="forgotPassword" type="button" id="forgot-button"><?= login::inputForgot ?></a>
			</div>
		</form>
	</div>
	<?php include './views/backEnd/footer.php' ?>
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