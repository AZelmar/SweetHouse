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
    require('frontEnd/adminManagement.php');
}