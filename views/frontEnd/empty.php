<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'backEnd/globalHead.php'; ?>
	<title><?= base::websiteName ?>| <?= emptyPage::pageName ?></title>
</head>
<body>
	<?php include 'backEnd/header.php' ?>
	<?php include 'backEnd/notification.php' ?>
	<?php include 'backEnd/footer.php' ?>
</body>
</html>