
<?php
include('../public/locale/'.$locale.'.php');
//include ('../controller/forumControler.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SweetHouse</title>
    <link href="./public/css/style.css" rel="stylesheet" media="all">
    <link href="./public/css/style_forum.css" rel="stylesheet" media="all">
</head>

<body>
<?php
    include '../views/backEnd/header.php';
?>
<a href="./home" <button class="button">Retour à la page d'acceuil</button> </a>

<h1>Forum </h1>

<h2> Poser sa question </h2>

<form method="post" action="/forum/post">
    <label>
        Sujet :
        <select name="subject">
            <option value="Technique"> Problème technique (capteurs, site internet, connexion, installation,...</option>
            <option value="Conseils"> Conseils & Astuces, demander des conseils pour optimiser la gestion de vos capteurs</option>
            <option value = "Entreprise "> Questions Entreprise, pour les solutions destinées aux entreprises </option>
            <option value="Autres "> Autres, pour toutes autres questions ne rentrant pas dans les précédents choix </option>
        </select>
    </label>
    <br><br>
    <div class = id_client> Votre numéro client :<?php echo $num_client ?> </div>
    <br>
    <div class = email> Votre adresse mail : <?php echo $mail ?> </div>
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

Vous pouvez répondre lire ou compléter les questions ci-dessous. Attention à ne pas répéter régulièrement la même question et faite un tour sur la FAq avant !

</body>
</html>

<?php
    include '../controller/forumControler.php'
?>


<?php
 afficherFormulaire();
?>
