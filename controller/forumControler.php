<?php

require ('../model/forumEntity.php');

function forum ($locale){


    $userId = returnUserId($_SESSION['email']);

    if (!empty($_POST['submit'])) {
        if (!empty($_POST['subject'])  && !empty($_POST['pseudo'])  && !empty($_POST['commentaire'])) {
            submitFormulaire($userId, $_POST['pseudo'], $_SESSION['email'], $_POST['subject'], $_POST['commentaire']);
            $notification = array("type" => "success","message" => "Votre message a bien été envoyé ! Merci ! ");

        }

        else{
            $notification = array("type" => "error","message" => "Votre n'a pu être envoyé, veuillez réessayer... ");
        }
    }

    require ('../views/frontEnd/forum.php');

}

function faq ($locale){
    require('../views/frontEnd/FAQ.php');
}

/*
function formSubmit($locale){

}

function afficherFormulaire (){
    displayFormulaire();
}
*/
function returnUserId($email){

    try {

        if ($_SESSION['email'] == null) {
            $notification = array("type" => "error", "message" => "Impossible de déterminer vos informations, vérifier que vous êtes bien connecté ! ");
            $num_client = 'Inconnu';
        } else {
            $email = $_SESSION['email'];
            $resultat = getUserId($email);
            $userId = $resultat['userId'];
            return $userId;
        }
    }

    catch (Exception $e){
        echo $e;
    }
}

?>


