<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./public/css/style.css" /> 
	<title><?= base::websiteName ?>| <?= error404::pageName ?></title>
</head>
<body>
	<?php include 'backEnd/header.php' ?>
	<?php include 'backEnd/notification.php' ?>
</body>
</html>