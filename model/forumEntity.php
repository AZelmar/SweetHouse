<?php

require ("config.php");


function submitFormulaire($id_client, $pseudo, $mail, $subject, $commentaire){


    try{
        $request = $pdo->prepare('SELECT userId FROM user WHERE email = ?');
        $request -> execute (array($email));
        $id_client= $request->fetch();


        $date_commentaire = date("Y.m.d");
        $_SESSION['storeDate'] = $date_commentaire;

        $mail = $_SESSION['email'];

        $req = $pdo-> prepare("INSERT INTO formulaire (id_client,pseudo, mail, subject, date_commentaire, commentaire) VALUES (:id_client,:pseudo,:mail,:subject, :date_commentaire,:commentaire)");
        $req -> execute (array("id_client" => $id_client, "pseudo"=>$pseudo, "mail" => $mail, "subject"=>$subject, "commentaire"=>$commentaire, "date_commentaire" => $date_commentaire));
    }
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

}

function getUserId($email){
    try {
        /*echo 'didier';
        $user = 'user';
        $request = $pdo  -> prepare('SELECT * FROM user WHERE email = ?'); //Il y a un problème avec le nom user, qui est interdit, nécessité de changer le nom
        $request -> execute (array($email));
        $result = $request->fetchAll();
        echo 'didier2';
        return $result;*/
    }

    catch (Exception $e){
        echo $e;
    }


}

function getUser()
{
    require("config.php");
    $request = $pdo->prepare("SELECT * FROM user WHERE email = ?");
    $request->execute(array($_POST['email']));
    $result = $request->fetch();
    return $result;
}

function displayFormulaire (){

    $request = $pdo->prepare('SELECT id_commentaire, id_client, pseudo, subject, date_commentaire, commentaire, admin_answer FROM formulaire');
    $request ->execute();
    $result = $request->fetchAll();
    return $result;

    var_dump($result);

}

?>