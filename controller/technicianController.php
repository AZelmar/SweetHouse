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
	require('frontEnd/testGestionRdv.php');
}
}
?>