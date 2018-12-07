<?php

session_start();

/**
 *
 */

function formSubmit(){

    require ('forumEntity.php');

    if (!empty($_POST['submit'])) {
        if (!empty($_POST['subject']) && !empty($_POST['numéro_client']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['text'])) {
            $notification = array("type" => "error","message" => "Veuillez remplir tous les champs");
        }

        else{
            echo $_POST['numéro_client'];
            submitFormulaire($_POST['numéro_client'], $_POST['pseudo'], $_POST['mail'],$_POST[ 'subject'], $_POST['commentaire']);
        }
    }

    else{
        echo 'test';
    }
}

formSubmit();



