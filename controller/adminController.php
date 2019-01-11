<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("../model/adminEntity.php");


function adminProfile($locale)
{
    if(isConnected($locale))
    {
	$email=$_SESSION['email'];
    $resultat=getAdminData($email);
    $resultatMaison=getNewHouses();
    $achatsCapteurs=getNewSensors();
    $resultatQuestion=getNewQuestions();

	if (isset($_POST['valider']) )
        	{
            	if ((!empty($_POST['mail'])) && (!empty($_POST['phoneNumber']))) 
                	{
                        if (!empty($_POST['oldPassword']))
                        {
                            if (!empty($_POST['newPassword']))
                            {
                                    $oldPass = $_POST['oldPassword'];
                                if(strlen($_POST['newPassword']) >= 8)
                                {
                                    if (password_verify($oldPass,$resultat['password']))
                                    {
                                    changeAdminPassword($email);
                                    }
                                    else
                                    {
                                    $notification = array(
                                            "type" => "error",
                                            "message" => "Votre ancien mot de passe n'est pas correct ! ");
                                    }
                                }
                                else
                                {
                                        $notification = array(
                                            "type" => "error",
                                            "message" => "Le mot de passe est trop court !"
                                            );                        
                                }


                            }

                            else
                            {
                                $notification = array(
                                            "type" => "error",
                                            "message" => "Vous devez entrez un nouveau mot de passe si vous voulez le modifier !");
                            }
                        }

                	changeAdmin($email);
                	}
           	 	else
                	{
                        $notification = array(
                                            "type" => "error",
                                            "message" => "Vous devez remplir tous les champs !");
                	}
        	}


    require('frontEnd/adminProfile.php');
}
}

function adminManagement($locale)
{
    if(isConnected($locale))
    {
	if(isset($_POST['userSubmit']))
	{
		$errorInfo = updateUser();
		if ($errorInfo != "") {

			                                $notification = array(
                                    "type" => "error",
                                    "message" => "Une erreur est survenue !"
                                );
		}
		else
		{
                                $notification = array(
                                    "type" => "success",
                                    "message" => "Modification enregistrée."
                                );
		}
	}
    $maisons=getAllHouses();
    require('frontEnd/adminManagement.php');
}
}

