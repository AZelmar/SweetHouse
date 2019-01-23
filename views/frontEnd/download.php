<?php include('./public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<?php include './views/backEnd/globalHead.php'; ?>
    <title><?= base::websiteName ?> | <?= download::pageName ?></title>
</head>
<body>
    <?php include './views/backEnd/header.php' ?>
    <?php include './views/backEnd/notification.php' ?>
    <?php include './views/backEnd/footer.php' ?>
</body>
</html>