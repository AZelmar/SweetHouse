<?php
require("../controller/userController.php");
$request = $_SERVER['REDIRECT_URL'];
//$request = str_replace("/eleves/SweetHouse", "",$request);
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
    case '/forgotPassword' :
        forgotPassword();
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}
?>