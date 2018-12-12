<?php

function submitFormulaire($id_client, $pseudo, $mail, $subject, $commentaire){

    require("../views/backEnd/config.php");

    try{

        $date_commentaire = date("Y.m.d");
        $_SESSION['storeDate'] = $date_commentaire;

        $req = $pdo-> prepare("INSERT INTO formulaire (id_client,pseudo, mail, subject, date_commentaire, commentaire) VALUES (:id_client,:pseudo,:mail,:subject, :date_commentaire,:commentaire)");
        $req -> execute (array("id_client" => $id_client, "pseudo"=>$pseudo, "mail" => $mail, "subject"=>$subject, "commentaire"=>$commentaire, "date_commentaire" => $date_commentaire));

    }
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

}


function getInfos(){
    $mail = $_SESSION[email];
    $req = $pdo -> query ('SELECT id_client FROM formulaire WHERE mail = $mail');
    $num_client = $req ->fetchAll(PDO::FETCH_ASSOC);
    $getInfos = array($num_client,$mail);
    return $getInfos;
}



function displayFormulaire (){

    require ("../views/backEnd/config.php");

    $request = $pdo->query('SELECT * FROM formulaire');
    $data = $request->fetchAll(PDO::FETCH_ASSOC);

    $i = 0;
    foreach ($data as $line) {

        $numero_commentaire = $line['id_commentaire'];
        $numero_client = $line['id_client'];
        $pseudo = $line['pseudo'];
        $mail = $line['mail'];
        $subject = $line['subject'];
        $date = $line['date_commentaire'];
        $commentaire = $line['commentaire'];
        $reponse_administrateur = $line['admin_answer'];

        if (($line['admin_answer']) == null) {
            $reponse_administrateur = ' L administrateur n a pas encore répondu à ce post :/';
        } else {
            $line['admin_answer'] . '</br>';

        }

        $line = array();
        $list = array ();

        $list.add($numero_commentaire);
        $list.add($numero_client);
        $list.add($pseudo);
        $list.add($mail);
        $list.add($subject);
        $list.add($date);
        $list.add($commentaire);
        $list.add($reponse_administrateur);

        $line.add($list);


        return $line;

        ?>


        <table>
            <tr>
                <th>
                    Numéro du commentaire
                </th>
                <th>
                    Numéro Client
                </th>
                <th >
                    Pseudo
                </th>
                <th>
                    Adresse mail
                </th>
                <th>
                    Sujet
                </th>

                <th>
                    Date de publication
                </th>
            </tr>
            <tr>
                <td><?php echo $numero_commentaire?></td>
                <td> <?php echo$numero_client?> </td>
                <td><?php echo $pseudo?></td>
                <td><?php echo $mail?></td>
                <td><?php echo $subject?></td>
                <td><?php echo $date?></td>
            </tr>
        </table>
        </br>

        <p class="titre1"> Question </p>

        <p class="commentaire">
            <?php echo $commentaire;?>
        </p>

        <p class="reponse_administrateur">
            <?php echo $reponse_administrateur;?>
        </p>

        </br>
        <hr>
        </br>

        <?php
    }
    ?>



    <style>
        td,th  {
            border: 2px solid #216583;
            width: 25%;
            font-size: 0.8em;
        }

        table{
            border-collapse: collapse;
            font-family: 'Lato', sans-serif;
            text-align: center;
            margin-left: 1%;
            table-layout: fixed;
            margin-right: 1%;


        }

        .commentaire{
            border: 2px solid #f76262 ;
            border-radius: 5px;
            margin-left: 1%;
            margin-right: 50%;
            padding: 8px;
            font-family: Lato, Helvetica, sans-serif;
            font-weight: 300;
            font-size: 0.95em;
            margin-top: 2%;
        }

        .reponse_administrateur{
            border: 2px solid #65c0ba ;
            border-radius: 5px;
            margin-left: 51%;
            margin-right: 1%;
            padding: 8px;
            font-family: Lato, Helvetica, sans-serif;
            font-weight: 300;
            font-size: 0.95em;

        }

        .titre1{
            font-family: Lato, Helvetica, sans-serif;
            font-size: 1em;
            text-align: center;
            padding-bottom: 3px;
        }

        hr{
            color : black;
            background-color: black;
            border-color: black;
            height: 1px;
            margin-left: 5%;
            margin-right: 5%;
        }

    </style>

    <?php

}

?>