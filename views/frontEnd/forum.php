
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

<form method="post">
    <label>
        Sujet :
        <select name="subject">
            <option value="Technique"> Problème technique (capteurs, site internet, connexion, installation,...</option>
            <option value="Conseils"> Conseils & Astuces, demander des conseils pour optimiser la gestion de vos capteurs</option>
            <option value = "Entreprise "> Questions Entreprise, pour les solutions destinées aux entreprises </option>
            <option value="Autres "> Autres, pour toutes autres questions ne rentrant pas dans les précédents choix </option>
        </select>
    </label>
    <br>
    <br>
    <div class = id_client> Votre numéro client : <?php echo $userId ?> </div>
    <br>
    <div class = email> Votre adresse mail : <?php echo $_SESSION['email'] ?> </div>
    <br>
    <label>
        Pseudo :
        <input  class = "norm" type="text" name="pseudo" placeholder="Votre pseudo" required="required">
    </label>
    <br>
    <label>
        Message :
        <textarea name = "commentaire" placeholder="Tapez votre message ici" required="required"></textarea>
    </label>

    <div class="boutton"> <input type="submit" value="Envoyer" name="submit"> </div>

</form>

<h2> Observer les questions déjà posées </h2>

<h3> Vous pouvez répondre lire les questions ci-dessous. Attention à ne pas répéter régulièrement la même question et faites un tour sur la FAQ avant !</h3>


<!---------------------------------- Affichage commentaire ------------------------------------------>


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
        <td><?//php echo $numero_commentaire?></td>
        <td><?//php echo$numero_client?> </td>
        <td><?//php echo $pseudo?></td>
        <td><?//php echo $mail?></td>
        <td><?//php echo $subject?></td>
        <td><?//php echo $date?></td>
    </tr>
</table>
</br>

<p class="titre1"> Question </p>

<p class="commentaire">
    <?php //echo $commentaire;?>
</p>

<p class="reponse_administrateur">
    <?php //echo $reponse_administrateur;?>
</p>

</br>
<hr>
</br>
</body>
</html>
