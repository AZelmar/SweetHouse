<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("../model/technicianEntity.php");


function gestionrdv($locale) 
{
	if(isConnected($locale))
    {
	$email=$_SESSION['email'];
    $resultat=getTechnicianData($email);
    $id=$resultat['userId'];
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
	require('frontEnd/testGestionRdv.php');
}
}
?>