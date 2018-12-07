<?php

function submitFormulaire($id_client, $pseudo, $mail, $subject, $commentaire){

    $dsn = 'mysql:host=localhost;dbname=sweethous';
    $user = 'root';
    $password = 'root';

try {
    $pdo = new PDO($dsn, $user, $password);

    $date_commentaire = date("Y.m.d");
    $_SESSION['storeDate'] = $date_commentaire;


    $req = $pdo-> prepare("INSERT INTO formulaire (id_client,pseudo, mail, subject, date_commentaire, commentaire) VALUES (:id_client,:pseudo,:mail,:subject, :date_commentaire,:commentaire)");
    $req -> execute (array("id_client" => $id_client, "pseudo"=>$pseudo, "mail" => $mail, "subject"=>$subject, "commentaire"=>$commentaire, "date_commentaire" => $date_commentaire));
    echo $id_client;
    echo $pseudo;
    echo $subject;
    echo $mail;
    echo $commentaire;
    echo $date_commentaire;

}
 catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}


}

	



?>