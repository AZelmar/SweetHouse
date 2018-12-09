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
            submitFormulaire($_POST['numéro_client'], $_POST['pseudo'], $_POST['mail'],$_POST[ 'subject'], $_POST['commentaire']);
            ?>
            <html>
            <body>
            Merci <strong> <?php echo $_POST['pseudo'] ?> </strong>, ton message a bien été intégré ! Un administrateur te répondra bientôt !
            </body>
            </html>

            <style>
                body{
                    font-family: 'Lato', sans-serif;
                    text-align: center;
                    margin-top: 20%;
                    font-size: 2.5em;
                    margin-bottom: 15%;
                }
            </style>

            <?php
            echo  '</br>';
            echo '</br>';
            echo '</br>';
            require 'index.php';

        }
    }


}

formSubmit();

function afficherFormulaire (){
    displayFormulaire();

}


