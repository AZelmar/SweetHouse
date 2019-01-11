<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("../model/adminEntity.php");


function adminProfile($locale)
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
                	changeAdmin($email);
                	}
           	 	else
                	{
                	echo 'Vous devez remplir tous les champs !';
                	}
        	}


    require('frontEnd/adminProfile.php');
}

function adminManagement($locale)
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