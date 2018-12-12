<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./public/css/style.css" /> 
	<title><?= base::websiteName ?>| <?= emptyPage::pageName ?></title>
</head>
<body>
	<?php include 'backEnd/header.php' ?>
	<?PHP include 'backEnd/notification.php' ?>
</body>
</html>