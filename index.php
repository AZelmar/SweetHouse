<?php
session_start();
require("./controller/userController.php");
require("./controller/baseController.php");
require ("./controller/forumControler.php");
require ("./controller/adminController.php");
require ('./controller/sensorsController.php');
require ("./controller/technicianController.php");
require ("./controller/testController.php");

$request = $_SERVER['REDIRECT_URL'];
//$request = str_replace("/eleves/SweetHouse", "",$request);
$basename = dirname($_SERVER["PHP_SELF"]);
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
        accountLogin($locale,null);
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
    case 'userProfile':
        userProfile($locale);
        break;
    case strpos($route, "public/"):
        header("Location: ".$basename."/".$route."");
        die();
        break;
    case 'forum':
        forum($locale);
        break;
    case 'faq':
        faq($locale);
        break;
    case 'gestionSensor':
        gestion_capteurs($locale);
        break;
    case 'shop':
        userShop($locale);
        break;
    case 'gestionRdv':
        gestion_rdv($locale);
    case 'adminProfile':
        adminProfile($locale);
        break;
    case 'adminManagement':
        adminManagement($locale);
        break;
    case 'forumAdministrateur':
        forumAdministrateur($locale);
    case 'ajax/getUserInfo':
        getUserInfo();
        break;
    case 'ajax/getTechnicianInfo':
        getTechnicianInfo();
    case 'test/testChargeRdv':
        testChargeRdv();
        break;
    case 'test/resetChargeRdv':
        resetChargeRdv();
        break;
    case 'technicianRdv':
        gestionrdv($locale);
        break;
    case 'technicianProfile':
        technicianProfile($locale);
        break;
    case 'technicianForum':
        forumTechnicien($locale);
        break;
    case 'technicianSensors':
        technicianSensors($locale);
        break;
    case 'ajax/getTrameInfo':
        getSensorLog();
        break;
    case 'ajax/sendTrame':
        sendTrame($_POST['motorValue']);
        break;
    default:
        error404($locale);
        break;
}
?>
