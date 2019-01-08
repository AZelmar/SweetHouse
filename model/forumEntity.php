<?php

function submitFormulaire($id_client, $pseudo, $mail, $subject, $commentaire){
    require ("config.php");
    try{
        $date_commentaire = date('Y/m/d', time());
        $req = $pdo -> prepare("INSERT INTO formulaire (id_client,pseudo, mail, subject, date_commentaire, commentaire) VALUES (:id_client,:pseudo,:mail,:subject,:date_commentaire,:commentaire)");
        $req -> execute (array("id_client" => $id_client, "pseudo"=>$pseudo, "mail" => $mail, "subject"=>$subject, "date_commentaire" => $date_commentaire, "commentaire"=>$commentaire));
    }
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

}

function getUserId($email){
    try {
        require("config.php");
        $request = $pdo->prepare('SELECT * FROM user WHERE email= ? ');
        $request->execute(array($email));
        $result = $request->fetch();
        return $result;
    }

    catch (Exception $e){
        echo $e;
    }
}

function displayFormulaire (){

    require '../model/config.php';

    $request = $pdo->prepare('SELECT * FROM formulaire ORDER BY formulaire.id_sujet DESC LIMIT 10');
    $request ->execute(array());
    $result = $request->fetchAll();
    return $result;


}

?>