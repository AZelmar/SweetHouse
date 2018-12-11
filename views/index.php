<?php
session_start();
require("../controller/userController.php");
require("../controller/baseController.php");
require ("../controller/forumControler.php");
$request = $_SERVER['REDIRECT_URL'];
//$request = str_replace("/eleves/SweetHouse", "",$request);
$basename = str_replace("/views","",dirname($_SERVER["PHP_SELF"]));
$request = str_replace($basename,"",$request);
//preg_match("/^\/(fr|en)?\//m", $request,$parameters);
preg_match("/^(?(?=\/(?>fr|en)\/)(?>\/(fr|en)\/)(.*)|\/(.*))$/m", $request,$parameters);
if($parameters[1] != null)
{
    $locale = $parameters[1];
    $route = $parameters[2];
}
else
{
    $locale = "fr";
    $route = $parameters[3];
}
switch ($route) {
    case '' :
        home($locale);
        break;
    case 'register' :
        accountRegister($locale);
        break;
    case 'login' :
        accountLogin($locale);
        break;
    case 'logout' :
        accountLogout($locale);
        break;
    case 'download':
        downloadFile($locale);
        break;
    case 'forgotPassword' :
        forgotPassword($locale);
        break;
    case 'home':
        home($locale);
        break;
    case 'userprofile':
        userProfile($locale);
        break;
    case strpos($route, "public/"):
        header("Location: ".$basename."/".$route."");
        die();
        break;
    case 'forum':
        forum($locale);
        break;
    default:
        error404($locale);
        break;
}
?>