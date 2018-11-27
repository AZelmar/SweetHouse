<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
function accountRegister()
{
    require '../public/js/phpmailer/Exception.php';
    require '../public/js/phpmailer/PHPMailer.php';
    require '../public/js/phpmailer/SMTP.php';

    require("../model/userEntity.php");

    if(!empty($_POST['submit']))
    {
        if(!empty($_POST['cgu']))
        {
            if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['age']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['gender']) && !empty($_POST['type']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress']) && !empty($_POST['zipCode']) && !empty($_POST['city']) && !empty($_POST['country']))
            {
                if($_POST['password'] == $_POST['password2'])
                {
                    $errorInfo = registerUser();
                    if($errorInfo != ""){
                        $error_parameters = array();
                        preg_match("/for key '(\w+)'$/", $errorInfo, $error_parameters);
                        if(sizeof($error_parameters) == 2 && $error_parameters[1] == "email")
                        {
                            $notification = array("type" => "error","message" => "Email déja pris !");
                        }
                        elseif(sizeof($error_parameters) == 2 && $error_parameters[1] == "phone")
                        {
                            $notification = array("type" => "error","message" => "Numéro de télephone déja pris !");
                        }
                        else
                        {
                            $notification = array("type" => "error","message" => "Une erreur est survenue !");
                        }
                    }
                    else
                    {
                        $notification = array("type" => "success","message" => "Utilisateur enregistré !");
                        $mail = new PHPMailer;
                        $mail -> CharSet = "UTF-8";
                        $mail->isSMTP(); 
                        $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
                        $mail->Host = "smtp.easyname.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
                        $mail->Port = 587; // TLS only
                        $mail->SMTPSecure = 'tls'; // ssl is depracated
                        $mail->SMTPAuth = true;
                        $mail->Username = "160227mail1";
                        $mail->Password = "sweethouse";
                        $mail->setFrom("contact@sweethouse.co.at", "SweetHouse");
                        $mail->addAddress($_POST['email'], $_POST['lastName']);
                        $mail->Subject = 'SweetHouse';
                        //$mail->msgHTML("Bienvenue chez SweetHouse.");
                        $mail->msgHTML("Bienvenue chez SweetHouse.<br><br>Vous trouverez-ci joint le lien de télechargement du formulaire correspondant à votre statut de ".$_POST['type']." qu'il faudra renvoyer complété et renvoyer par pièce jointe à cette adresse mail.<br><br> Cordialement, toutes l'équipe de SweetHouse<br><br> <a href=\"http://www.sweethouse.co.at/download.php?file=".$_POST['type'].".pdf\">Télecharger le formulaire</a>"); 
                        $mail->AltBody = 'HTML messaging not supported';

                        if(!$mail->send()){
                        }else{
                        }
                    }
                }
                else
                {
                    $notification = array("type" => "error","message" => "Les mots de passes ne correspondent pas !");
                }
            }
            else
            {
                $notification = array("type" => "error","message" => "Veuillez remplir tous les champs !");
            }
        }
        else
        {
            $notification = array("type" => "error","message" => "Veuillez acceptez les cgu !");
        }
    }
    require ('frontEnd/register.php');
}
function accountLogin()
{
    require("../model/userEntity.php");
    if(isset($_POST['submit']))
    {
        $result = getUser();
        if($result['lastName'] != null)
        {
            if(password_verify($_POST['password'], $result['password']))
            {
                if($result['active'] == 1)
                {
                $_SESSION["email"] = $result['email'];
                if(isset($_POST['remember']))
                {   
                    $_SESSION = array();
                    session_destroy();
                }
            }
            else
            {
                $notification = array("type" => "error","message" => "Votre compte n'est pas activé !");
            }
            }
            else
            {
                $notification = array("type" => "error","message" => "Mot de passe incorrect !");
            }
        }
        else
        {
            $notification = array("type" => "error","message" => "Aucun compte lié à cet email trouvé !");
        }
    }
    require ('frontEnd/login.php');
}
function accountLogout()
{
    $_SESSION = array();
    session_destroy();
    header("Location: ./register");
    die();
}
function downloadFile()
{
    if(isset($_GET["file"]) && $_GET["file"] != ""){
        $filepath = "../public/files/".$_GET["file"];
        if(file_exists($filepath)) 
        {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachement; filename="'.$_GET["file"].'"');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // Flush system output buffer
            readfile($filepath);
        }
        else
        {
            $notification = array("type" => "error","message" => "Aucun fichier ne correspond à cette url !");
        }
    }
    else
    {
        $notification = array("type" => "error","message" => "Aucun fichier renseigné !");
    }
    require ('frontEnd/download.php');
}
function forgotPassword()
{
    require("../model/userEntity.php");
    if(!isset($_GET["token"]))
    {
        if(!empty($_POST['submit']))
        {
            $result = getUser();
            if($result['lastName'] != null)
            {
                $errorInfo = addResetRequest();
                if($errorInfo != ""){
                        $error_parameters = array();
                        preg_match("/for key '(\w+)'$/", $errorInfo, $error_parameters);
                        if(sizeof($error_parameters) == 2 && $error_parameters[1] == "email")
                        {
                            $notification = array("type" => "error","message" => "Vous avez déja fais une demande de reset !");
                        }
                        else
                        {
                            $notification = array("type" => "error","message" => "Une erreur est survenue !");
                        }
                }
                else
                {
                    $notification = array("type" => "success","message" => "Demande de reset prise en compte !");
                }
            }
            else
            {
                $notification = array("type" => "error","message" => "Aucun compte lié à cet email trouvé !");   
            }
        }
    }
    else
    {
        $result = checkResetRequest();
        if($result['email'] != null)
        {
            echo 'test';
        }
        else
        {
           $notification = array("type" => "error","message" => "Aucune demande lié à ce token !"); 
        }
    }
    require ('frontEnd/forgotPassword.php');
}
?>