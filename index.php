<?php
require("./controller/test.php");
$request = $_SERVER['REDIRECT_URL'];
$request = str_replace("/eleves/SweetHouse", "",$request);
switch ($request) {
    case '/' :
        require __DIR__ . '/views/home.php';
        break;
    case '' :
        require __DIR__ . '/views/home.php';
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
    default:
        require __DIR__ . '/views/404.php';
        break;
}
?>