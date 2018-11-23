<?php
require("../controller/user.php");
$request = $_SERVER['REDIRECT_URL'];
$request = str_replace("/eleves/SweetHouse", "",$request);
switch ($request) {
    case '/' :
        break;
    case '' :
        break;
    case '/register' :
        accountRegister();
        break;
    case '/login' :
        accountLogin();
        break;
    case '/logout' :
        accountLogout();
        break;
    case '/download':
        downloadFile();
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}
?>