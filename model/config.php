<?php
$dsn = 'mysql:dbname=u160227db1;host=e101550-mysql.services.easyname.eu';
$user = 'u160227db1';
$password = 'sweethousesweet';
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>