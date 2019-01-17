<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("./model/userEntity.php");
if (isset($_COOKIE['keep_log'])) {
    $cookieLogin = json_decode($_COOKIE['keep_log'], true);
    $results      = checkLoginCookie($cookieLogin["userEmail"]);
    foreach($results as $result)
    {
      if ($result['email'] != null && $result['ip'] == hash('sha512', $_SERVER['REMOTE_ADDR'])) {
          $_SESSION["email"] = $result['email'];
          $_SESSION["role"] = $result['role'];
      }
    }
}

function home($locale)
{
  	require('./views/frontEnd/home.php');
}

function userProfile($locale)
{
    if(isConnected($locale))
    {
      $email=$_SESSION['email'];  
      $resultat=getUserData($email);
      $idShop=$resultat['userId'];
      $resultat2=getUserShop($idShop);
      require('./views/frontEnd/userProfile.php');
    }
}

function gestion_rdv($locale){
    require('./views/frontEnd/GestionRDV.php');
}




function userShop($locale)
{
    if (!empty($_POST['validerMagasin']) )
        {
            if(!isset($_SESSION["email"])) {
                $notification = array(
                    "type" => "error",
                    "message" => "Vous devez être connecté !");
                }
            else {
                $email=$_SESSION['email'];
                $resultat=getUserData($email);

                $idShop=$resultat['userId'];

                $resultat2=getUserShop($idShop);
                $idShopExists=$resultat2['id_userShop'];

                $lumiere = isset($_POST['number1_0']) ? $_POST['number1_0'] : NULL;
                $temperature = isset($_POST['number1_1'])  ? $_POST['number1_1'] : NULL;
                $mouvement= isset($_POST['number1_2'])  ? $_POST['number1_2'] : NULL;
                $fumee = isset($_POST['number1_3'])  ? $_POST['number1_3'] : NULL;

                if ($idShopExists==NULL){
                    createUserShop($idShop);
                    changeUserShop($idShop,$lumiere,$temperature,$mouvement,$fumee);

                }

                else {
                    changeUserShop($idShop,$lumiere,$temperature,$mouvement,$fumee);
                }


                $notification = array(
                    "type" => "success",
                    "message" => "Ajout de capteurs réussis !" );

                }


        }

    require('./views/frontEnd/shop.php');
}

function accountRegister($locale)
{
    require './addon/phpmailer/Exception.php';
    require './addon/phpmailer/PHPMailer.php';
    require './addon/phpmailer/SMTP.php';
    $validGender = array("male","female");
    $validType = array("individual","professional");
    $validCountry = array("france","spain","canada");
    if (!empty($_POST['submit'])) {
        if (!empty($_POST['cgu'])) {
            if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['age']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['gender']) && !empty($_POST['type']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress']) && !empty($_POST['zipCode']) && !empty($_POST['city']) && !empty($_POST['country'])) {
                if(in_array($_POST['gender'], $validGender) && in_array($_POST['type'], $validType) && in_array($_POST['country'], $validCountry)){
                if ($_POST['password'] == $_POST['password2']) {
                    if(strlen($_POST['password']) >= 8)
                    {
                        $errorInfo = registerUser();
                        if ($errorInfo != "") {
                            $error_parameters = array();
                            preg_match("/for key '(\w+)'$/", $errorInfo, $error_parameters);
                            if (sizeof($error_parameters) == 2 && $error_parameters[1] == "email") {
                                $notification = array(
                                    "type" => "error",
                                    "message" => "Email déja pris !"
                                );
                            } elseif (sizeof($error_parameters) == 2 && $error_parameters[1] == "phone") {
                                $notification = array(
                                    "type" => "error",
                                    "message" => "Numéro de télephone déja pris !"
                                );
                            } else {
                                $notification = array(
                                    "type" => "error",
                                    "message" => "Une erreur est survenue !"
                                );
                            }
                        } else {
                            $send = sendMail($_POST['email'], "SweetHouse - Inscription", "Bienvenue chez SweetHouse.<br><br>Vous trouverez-ci dessous le lien de télechargement du formulaire correspondant à votre statut de " . $_POST['type'] . " qu'il faudra renvoyer complété et renvoyer par pièce jointe à cette adresse mail.<br><br> Cordialement, toutes l'équipe de SweetHouse<br><br> <a href=\"http://www.sweethouse.co.at/download?file=" . $_POST['type'] . ".pdf\">Télecharger le formulaire</a>");
                            if ($send) {
                                $notification = array(
                                    "type" => "success",
                                    "message" => "Vous avez bien été enregistré ! Un email vous a été envoyé pour continuer votre inscription."
                                );
                            } else {
                                $notification = array(
                                    "type" => "error",
                                    "message" => "Une erreur est survenue !"
                                );
                            }
                        }
                    }
                    else
                    {
                        $notification = array(
                            "type" => "error",
                            "message" => "Le mot de passe est trop court !"
                        );                        
                    }
                } else {
                    $notification = array(
                        "type" => "error",
                        "message" => "Les mots de passes ne correspondent pas !"
                    );
                }
            }
            else
            {
                     $notification = array(
                        "type" => "error",
                        "message" => "Formulaire corrompu !"
                    );               
            }
            } else {
                $notification = array(
                    "type" => "error",
                    "message" => "Veuillez remplir tous les champs !"
                );
            }
        } else {
            $notification = array(
                "type" => "error",
                "message" => "Veuillez acceptez les cgu !"
            );
        }
    }
    require('./views/frontEnd/register.php');
}
function accountLogin($locale,$notification)
{
    if (isset($_POST['submit'])) {
        $result = getUser();
        if ($result['lastName'] != null) {
            if (password_verify($_POST['password'], $result['password'])) {
                if ($result['active'] == 1) {
                    $_SESSION["email"] = $result['email'];
                    $_SESSION['role'] = $result['role'];
                    if (isset($_POST['remember'])) {
                        $ip         = hash('sha512', $_SERVER['REMOTE_ADDR']);
                        $userId     = $result['userId'];
                        $userEmail  = hash('sha512', $result['email']);
                        $expireDate = date('Y/m/d H:i:s', time() + 60 * 60 * 24 * 365);
                        $cookie     = array(
                            'ip' => $ip,
                            'userEmail' => $userEmail
                        );
                        setcookie('keep_log', json_encode($cookie), time() + 60 * 60 * 24 * 365);
                        addLoginCookie($expireDate, $userId, $userEmail, $ip);
                    }
                } else {
                    $notification = array(
                        "type" => "error",
                        "message" => "Votre compte n'est pas activé !"
                    );
                }
            } else {
                $notification = array(
                    "type" => "error",
                    "message" => "Mot de passe incorrect !"
                );
            }
        } else {
            $notification = array(
                "type" => "error",
                "message" => "Aucun compte lié à cet email trouvé !"
            );
        }
    }
    require('./views/frontEnd/login.php');
}
function accountLogout($locale)
{
    if (isset($_COOKIE['keep_log'])) {
        $userEmail = hash('sha512', $_SESSION['email']);
        $errorInfo = removeLoginCookie($userEmail);
        if ($errorInfo != "") {
            $error_parameters = array();
            preg_match("/for key '(\w+)'$/", $errorInfo, $error_parameters);
            $notification = array(
                "type" => "error",
                "message" => "Une erreur est survenue !"
            );
            require('./views/frontEnd/empty.php');
        } else {
            setcookie('keep_log', '', time() - 3600); // empty value and old timestamp
            $_SESSION = array();
            session_destroy();
            header("Location: ./login");
        }
    }
    else
    {
        $_SESSION = array();
        session_destroy();
        header("Location: ./login");       
    }
}
function downloadFile($locale)
{
    if (isset($_GET["file"]) && $_GET["file"] != "") {
        $filepath = "../public/files/" . $_GET["file"];
        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachement; filename="' . $_GET["file"] . '"');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // Flush system output buffer
            readfile($filepath);
        } else {
            $notification = array(
                "type" => "error",
                "message" => "Aucun fichier ne correspond à cette url !"
            );
        }
    } else {
        $notification = array(
            "type" => "error",
            "message" => "Aucun fichier renseigné !"
        );
    }
    require('./views/frontEnd/download.php');
}
function forgotPassword($locale)
{
    require './addon/phpmailer/Exception.php';
    require './addon/phpmailer/PHPMailer.php';
    require './addon/phpmailer/SMTP.php';
    
    if (!isset($_GET["token"])) {
        if (!empty($_POST['resend'])) {
            $result = checkResendResetRequest();
            if ($result['email'] != null && $result['reset'] == 1) {
                $send = sendMail($result['email'], "SweetHouse - Mot de passe oublié", "Vous avez fais une nouvelle demande de réinitialisation de mot de passe.<br><br>Cliquez <a href='http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "?token=" . $result['token'] . "'>ici</a> pour changer votre mot de passe. ");
                if ($send) {
                    $notification = array(
                        "type" => "success",
                        "message" => "Votre demande a bien été prise en compte ! Un email vous a été envoyé pour réinitialiser votre mot de passe"
                    );
                } else {
                    $notification = array(
                        "type" => "error",
                        "message" => "Une erreur est survenue !"
                    );
                }
            }
        }
        if (!empty($_POST['submit'])) {
            $result = getUser();
            if ($result['lastName'] != null) {
                $token     = bin2hex(openssl_random_pseudo_bytes(16));
                $errorInfo = addResetRequest($token);
                if ($errorInfo != "") {
                    $error_parameters = array();
                    preg_match("/for key '(\w+)'$/", $errorInfo, $error_parameters);
                    if (sizeof($error_parameters) == 2 && $error_parameters[1] == "email") {
                        $notification = array(
                            "type" => "error",
                            "message" => "Vous avez déja fais une demande de réinitialisation de mot de passe ! <form method='POST'><input type='submit' name='resend' value='Renvoyer' id='resend-button'></button><input type='hidden' name='emailHidden' value='" . $_POST['email'] . "'></form>"
                        );
                    } else {
                        $notification = array(
                            "type" => "error",
                            "message" => "Une erreur est survenue !"
                        );
                    }
                } else {
                    $send = sendMail($_POST['email'], "SweetHouse - Mot de passe oublié", "Vous avez fais une demande de réinitialisation de mot de passe.<br><br>Cliquez <a href='http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "?token=" . $token . "'>ici</a> pour changer votre mot de passe. ");
                    if ($send) {
                        $notification = array(
                            "type" => "success",
                            "message" => "Votre demande a bien été prise en compte ! Un email vous a été envoyé pour réinitialiser votre mot de passe"
                        );
                    } else {
                        $notification = array(
                            "type" => "error",
                            "message" => "Une erreur est survenue !"
                        );
                    }
                }
            } else {
                $notification = array(
                    "type" => "error",
                    "message" => "Aucun compte lié à cet email trouvé !"
                );
            }
        }
        require('./views/frontEnd/forgotPassword.php');
    } else {
        $result = checkResetRequest();
        if ($result['email'] == null) {
            $notification = array(
                "type" => "error",
                "message" => "Aucune demande lié à ce token !"
            );
            $title        = "Réinitialiser mot de passe";
            require('./views/frontEnd/empty.php');
        } else {
            if (!empty($_POST['submit'])) {
                if (!empty($_POST['password']) && !empty($_POST['password2'])) {
                    if ($_POST['password'] == $_POST['password2']) {
                        $errorInfo = validateResetRequest();
                        if ($errorInfo != "") {
                            $error_parameters = array();
                            preg_match("/for key '(\w+)'$/", $errorInfo, $error_parameters);
                            $notification = array(
                                "type" => "error",
                                "message" => "Une erreur est survenue !"
                            );
                        } else {
                            $notification = array(
                                "type" => "success",
                                "message" => "Votre mot de passe a bien été modifié. Vous pouvez à présent vous connectez avec ce dernier"
                            );
                        }
                    } else {
                        $notification = array(
                            "type" => "error",
                            "message" => "Les mots de passes ne correspondent pas !"
                        );
                    }
                } else {
                    $notification = array(
                        "type" => "error",
                        "message" => "Veuillez remplir tous les champs !"
                    );
                }
            }
            require('./views/frontEnd/resetPassword.php');
        }
    }
}
function sendMail($email, $subject, $message)
{
    $mail          = new PHPMailer;
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();
    $mail->SMTPDebug  = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host       = "smtp.easyname.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port       = 587; // TLS only
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth   = true;
    $mail->Username   = "160227mail1";
    $mail->Password   = "sweethouse";
    $mail->setFrom("contact@sweethouse.co.at", "SweetHouse");
    $mail->addAddress($email);
    $mail->Subject = $subject;
    //$mail->msgHTML("Bienvenue chez SweetHouse.");
    $mail->msgHTML($message);
    $mail->AltBody = 'HTML messaging not supported';
    return $mail->send();
}

function changeUserData($email)
{
    if (isset($_POST['valider']) )
        {
            if ((!empty($_POST['adress'])) && (!empty($_POST['gender'])) && (!empty($_POST['first-name'])) && (!empty($_POST['last-name'])))
                {
                changeUser($email);
                }
            else
                {
                echo 'Vous devez remplir tous les champs !';
                }
        }
}
function isConnected($locale){
    if(isset($_SESSION['email']))
    {
        return true;
    }
     $notification = array(
        "type" => "error",
        "message" => "Vous devez être connecté pour accéder à cette page"
    );
    accountLogin($locale,$notification);
    return false;
}
function getUserInfo(){
    if(isset($_POST['userId']))
    {
        echo json_encode(getUserById());
    }
}
function getTechnicianInfo(){
    if(isset($_POST['userId']))
    {
        echo json_encode(getTechnicianById());
    }
}
?> 