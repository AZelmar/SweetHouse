<?php
include ('../public/locale/'.$locale.'.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SweetHouse</title>
    <?php include ('../views/backEnd/globalHead.php'); ?>
    <link href="./public/css/style_forum.css" rel="stylesheet" media="all">
</head>

<body>
<?php
include '../views/backEnd/header.php';
include '../views/backEnd/notification.php';
include '../views/backEnd/footer.php';
?>
<a href="./home" <button class="button"> Retour à la page d'acceuil</button> </a>

<h1>Forum </h1>

<h2> Poser sa question </h2>


<?php
    $counter = 0;
    while($counter < 10){
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
        <td><?php echo $userdata[$counter]['id_sujet']; ?></td>
        <td><?php echo $userdata[$counter]['id_client']; ?> </td>
        <td><?php echo $userdata[$counter]['pseudo']; ?></td>
        <td><?php echo $userdata[$counter]['mail']; ?></td>
        <td><?php echo $userdata[$counter]['subject']; ?></td>
        <td><?php echo $userdata[$counter]['date_commentaire']; ?></td>
    </tr>

</table>
</br>

<p class="titre1"> Question </p>

<p class="commentaire">
    <?php echo $userdata[$counter]['commentaire'];?>
</p>

<p class="reponse_administrateur">

    <?php

    if ($userdata[$counter]['admin_answer'] == null){
        echo "L'administrateur n'a pas encore répondu à ce commentaire, il répondra bientôt ! ";
    }
    else {
        echo $userdata[$counter]['admin_answer'];
    }

    ?>
        <div class="boutton"> <input type="submit" value="Envoyer" name="submit"> </div>
</p>

    <?php
        $counter++;
    } ?>
</br>
<hr>
</br>
</body>