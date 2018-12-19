<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'backEnd/globalHead.php'; ?>
	<title><?= base::websiteName ?>| <?= resetPassword::pageName ?></title>
</head>
<body>
	<?php include 'backEnd/header.php' ?>
	<?PHP include 'backEnd/notification.php' ?>
	<div id="form-container">
		<form method="POST">
			<h2 id="title"><?= resetPassword::pageName ?></h2>
			<hr>
			<div class="input-group">
				<label for="password"><?= resetPassword::inputPassword ?></label>
				<input type="password" name="password" value="test">
			</div>

			<div class="input-group">
				<label for="password2"><?= resetPassword::inputPasswordConfirm ?></label>
				<input type="password" name="password2" value="test">
			</div>
			<div class="input-group" style="display: inline;">
				<input type="submit" name="submit" value="<?= resetPassword::inputSubmit ?>" id="validate-button">
			</div>
		</form>
	</div>
	<?php include 'backEnd/footer.php' ?>
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