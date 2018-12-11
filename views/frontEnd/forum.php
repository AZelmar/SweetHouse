

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SweetHouse</title>
    <link href="../public/css/style.css" rel="stylesheet" media="all">
    <link href="style_forum.css" rel="stylesheet" media="all">

</head>
<body>
<?php
    include 'header.php';
?>
<a href="../views/index.php" <button class="button">Retour à la page précédente</button> </a>


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

    <label>
        <div class="numéro_client">
            Numéro client
            <input type="text" name="numéro_client" placeholder="Votre numéro client" required="required">
        </div>
    </label>


    <label>
        Pseudo :
        <input type="text" name="pseudo" placeholder="Votre pseudo" required="required">
    </label>

    <label>
        Adresse e-mail
        <input type="email" name="mail" placeholder="Entrez votre e-mail" required="required">
    </label>

    <label>
        Message :
        <textarea name = "commentaire" placeholder="Tapez votre message ici" required="required"></textarea>
    </label>

    <div class="bouton" > <input type="submit" value="Envoyer" name="submit"> </div>

</form>


<h2> Observer les questions déjà posées </h2>

</body>
</html>

<style>
    h1{
        font-family: Lato, Helvetica, sans-serif;
        font-weight: lighter;
        font-size: 4em;
        text-align: center;
    }

    h2{
        font-family: Lato, Helvetica, sans-serif;
        font-weight: 300;
        font-size: 3em;
        text-align: center;
        margin-top: 5%;
    }

    .button {
        background-color: #216583;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        font-family: Lato, Helvetica, sans-serif;
        font-weight: lighter;
    }

    form {
        margin: 20px auto;
        width: 900px;
        border-radius: 1em;
        border : 2px solid black;
        font-family: 'Lato', sans-serif;
        font-weight: 100;
        background-color: #65c0ba;
        padding: 30px;
    }


    label {
        display: inline-block 1em;
        width: 250px;
        text-align: right;
        margin: 15px;
    }

    input, textarea {
        width: 300px;
        box-sizing: border-box;
        border : 1px solid #999;
        margin: 10px;
        padding: 6px;

    }

    textarea {
        vertical-align: top;
        height: 10em;
        width: 75em;

    }

    input:focus, textarea:focus {
        border-color: #216583;
    }


</style>

<body>



<?php
    afficherFormulaire();
?>



</body>