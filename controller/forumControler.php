<?php

function forum ($locale){
    require ('../views/frontEnd/forum.php');
}


function formSubmit($locale){

    require ('../model/forumEntity.php');
    require ('../views/backEnd/notification.php');
    require('../views/backEnd/notification.php');

    if (!empty($_POST['submit'])) {
        if (!empty($_POST['subject']) && !empty($_POST['numéro_client']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['text'])) {
            $notification = array("type" => "error","message" => "Votre n'a pu être envoyé, veuillez réessayer... ");
        }

        else{
            submitFormulaire($_POST['numéro_client'], $_POST['pseudo'], $_POST['mail'],$_POST[ 'subject'], $_POST['commentaire']);
            $notification = array("type" => "success","message" => "Votre message a bien été envoyé ! Merci ! ");
            echo '<a href="/home">  Cliquez sur ce lien pour retourner à la page d acceuil </a>';
        }
    }
}

function afficherFormulaire (){
    displayFormulaire();

}

function displayInfos(){
    if($_SESSION[mail] == null){
        $notification = array("type" =>"error", "message"=>"Impossible de déterminer votre adresse mail, vérifier que vous êtes bien connecté ! ");
        $num_client = 'Inconnu';
        $mail = 'Inconnu';
    }

    else{
        getInfos();
    }
}



?>


