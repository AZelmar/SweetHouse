<?php

require ('./model/forumEntity.php');

function forum ($locale){

    if(isConnected($locale) == true) {

        $userId = returnUserId($_SESSION['email'], $locale);

        if (!empty($_POST['submit'])) {
            if (!empty($_POST['subject'])  && !empty($_POST['pseudo'])  && !empty($_POST['commentaire'])) {
                submitForum($userId, $_POST['pseudo'], $_SESSION['email'], $_POST['subject'], $_POST['commentaire']);
                $notification = array("type" => "success","message" => "Votre message a bien été envoyé ! Merci ! ");

            }

            else{
                $notification = array("type" => "error","message" => "Votre n'a pu être envoyé, veuillez réessayer... ");
            }
        }

        try{

            if ($_SESSION['email'] == null) {
                    $notification = array("type" => "error", "message" => "Impossible de déterminer vos informations, vérifier que vous êtes bien connecté ! ");
                    $num_client = 'Inconnu';
                }

            else {
                    $userdata = displayForum();
            }

        }

        catch (Exception $e){
            echo $e;
        }
    }

    require ('./views/frontEnd/forum.php');
}

function forumAdministrateur($locale){

    if(isConnected($locale)) {
        $userdata = displayForum();

        $origineAdministrateur = "<br> <br> L'administrateur qui a répondu à ce commentaire était : ".getName($_SESSION['email']);


        if (!empty($_POST['submit'])) {
            if (!empty($_POST['commentaire_administrateur'] && !empty($_POST['numero_commentaire']))) {
                submitAdministratorForum(($_POST['commentaire_administrateur'].$origineAdministrateur), $_POST['numero_commentaire']);
                $notification = array("type" => "success","message" => "Votre message a bien été envoyé ! Merci ! ");
            }

            else{
                $notification = array("type" => "error","message" => "Votre n'a pu être envoyé, veuillez réessayer... ");
            }
        }

        if (!empty($_POST['supprimerCommentaire'])){
            deleteCommentaire($_POST['inputDeleteCommentaire']);
        }
    }

    require ('./views/frontEnd/forumAdministrateur.php');

}

function faq ($locale){

    require('./views/frontEnd/faq.php');
}

function returnUserId($email, $locale){

    if(isConnected($locale)) {

        $email = $_SESSION['email'];
        $resultat = getUserId($email);
        $userId = $resultat['userId'];
        return $userId;
    }
}


function deleteComment($locale){
    if (isConnected($locale) == true){

    }
}


function forumTechnicien($locale){

    if(isConnected($locale)) {
        $userdata = displayForum();

        $origineAdministrateur = '<br>'.'<br>'." Le technicien qui a répondu à ce commentaire était : ".getName($_SESSION['email']);


        if (!empty($_POST['submit'])) {
            if (!empty($_POST['commentaire_technicien'] && !empty($_POST['numero_commentaire']))) {
                submitAdministratorForum(($_POST['commentaire_technicien'].$origineAdministrateur), $_POST['numero_commentaire']);
                $notification = array("type" => "success","message" => "Votre message a bien été envoyé ! Merci ! ");
            }

            else{
                $notification = array("type" => "error","message" => "Votre n'a pu être envoyé, veuillez réessayer... ");
            }
        }
    }

    require ('./views/frontEnd/forumTechnicien.php');

}



?>


