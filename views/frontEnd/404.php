<?php include('./public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include './views/backEnd/globalHead.php'; ?>
	<title><?= base::websiteName ?>| <?= error404::pageName ?></title>
</head>
<body>
	<?php include './views/backEnd/header.php' ?>
	<?php include './views/backEnd/notification.php' ?>
	<div class="notification notification_error"><?= error404::message ?></div>
	<?php include './views/backEnd/footer.php' ?>
</body>
</html>