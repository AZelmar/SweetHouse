<?php

require ('../model/forumEntity.php');


function forum ($locale){

    if (!empty($_POST['submit'])) {

        if (!empty($_POST['subject'])  && !empty($_POST['pseudo'])  && !empty($_POST['text'])) {
            $notification = array("type" => "error","message" => "Votre n'a pu être envoyé, veuillez réessayer... ");
        }

        else{
            submitFormulaire($_POST['numéro_client'], $_POST['pseudo'], $_POST['mail'],$_POST[ 'subject'], $_POST['commentaire']);
            $notification = array("type" => "success","message" => "Votre message a bien été envoyé ! Merci ! ");
        }
    }
    echo $_SESSION['email'];
    $resultat = returnUserId($_SESSION['email']);
   // var_dump($resultat);

    /*if ($_SESSION['email'] != null ){
        $resultat2 = displayFormulaire();
        print_r($resultat2);
    }

    else {
        $notification = array("type" => "error", "message" => "Vous devez être connecté pour visualiser les commentaire");
    }*/


    require ('../views/frontEnd/forum.php');

}

function faq ($locale){
    require('../views/frontEnd/FAQ.php');
}


function formSubmit($locale){
    require ('../views/frontEnd/forum.php');


}

function afficherFormulaire (){


    displayFormulaire();

}

function returnUserId($email){

   /* try {

        if ($_SESSION['email'] == null) {
            $notification = array("type" => "error", "message" => "Impossible de déterminer vos informations, vérifier que vous êtes bien connecté ! ");
            $num_client = 'Inconnu';
        } else {
            echo 'frank';
            echo
            //$result = getUserId($email);
            echo 'didier';
            var_dump(($result)['userId']);
            return $result['userId'];
            var_dump( $result);
        }

    }

    catch (Exception $e){
        echo $e;
    }*/
}

?>


