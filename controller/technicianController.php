<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("./model/technicianEntity.php");


function gestionrdv($locale) 
{
	if(isConnected($locale)) {
        $email = $_SESSION['email'];
        $resultat = getTechnicianData($email);



    $id=htmlentities($resultat['userId']);
    $rdvs=getTechnicianRDV($id);

    if (isset($_POST['validerRDV']) )
    {
    	if ((!empty($_POST['reason'])) && (!empty($_POST['userIdTech'])))
    	{
    		$day=$_POST['day'];
    		$hour=$_POST['hour'];
    		$reason=$_POST['reason'];
    		$userId=$_POST['userIdTech'];
    		createRDV($id,$day,$hour,$reason,$userId);

    	}

    	else
    	{
    		$notification = array(
                                            "type" => "error",
                                            "message" => "Vous devez ajouter un motif et un Id utilisateur ! ");
    	}
    }
	require('./views/frontEnd/technicianRdv.php');
}
}

function technicianProfile($locale)
{
    if(isConnected($locale))
    {
    $email=$_SESSION['email'];
    $resultat=getTechnicianData($email);
    $id=htmlentities($resultat['userId']);
    $resultatQuestion=getNewQuestions();
    $resultatMaisonsTechnicien=findTechnicianHouses();
    $resultatProblemesTechnicien=findTechnicianProblems();

    if (isset($_POST['validerTechnicianProfile']) )
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
                                    changeTechnicianPassword($email);
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

                    changeTechnician($email);
                    }
                else
                    {
                        $notification = array(
                                            "type" => "error",
                                            "message" => "Vous devez remplir tous les champs !");
                    }
            }


    require('./views/frontEnd/technicianProfile.php');
}
}

function technicianSensors($locale)
{
    if(isConnected($locale))
    {
        $email=$_SESSION['email'];
        $resultat=getTechnicianData($email);
        $resulSensor1=$resultat['userId'];
        $getSens1=getUserTechSensorData($resulSensor1);
        if(isset($_POST['sensTechSubmit']))
        {
            changeUserTechSensorData($resulSensor);
        }
        $clients1=getAllCLient();
}
require('./views/frontEnd/technicianSensors.php');
}
?>