<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("./model/adminEntity.php");


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


    require('./views/frontEnd/adminProfile.php');
}
}

function adminManagement($locale)
{
    if(isConnected($locale))
    {
        $email=$_SESSION['email'];
        $resultat=getAdminData($email);
        $resulSensor=$resultat['userId'];
        $getSens=getUserSensorData($resulSensor);

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
                                        "message" => "Modification pour cet utilisateur enregistrée."
                                    );
    		}
    	}
        if(isset($_POST['sensSubmit']))
        {
            changeUserSensorData($resulSensor);
        }
        if(isset($_POST['technicianSubmit']))
        {
            $errorInfo = updateTechnician();
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
      if(isset($_POST['technicianSubmit']))
        {
            $errorInfo = updateTechnician();
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
                                        "message" => "Modification pour ce technicien enregistrée."
                                    );
            }
        }

        $clients=getAllCLient();
        $clients1=getAllCLient();
        $technicians=getAllTechnician();
        require('./views/frontEnd/adminManagement.php');
    }
}
?>
