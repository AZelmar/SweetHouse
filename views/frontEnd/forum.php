
<?php
include ('./public/locale/'.$locale.'.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SweetHouse</title>
    <?php include ('./views/backEnd/globalHead.php'); ?>
    <link href="./public/css/style_forum.css" rel="stylesheet" media="all">
</head>

<body>
<?php
    include './views/backEnd/header.php';
    include './views/backEnd/notification.php';
    include './views/backEnd/footer.php';
?>
<a href="./home" <button class="button"> <?= htmlentities(forum::boutton)?></button> </a>

<h1>Forum </h1>

<h2> <?= htmlentities(forum::title2) ?> </h2>

<form method="post">
    <label>
        <?= htmlentities(forum::sujet )?>
        <select name="subject">
            <option value="Technique"> <?= htmlentities(forum::technique) ?></option>
            <option value="Conseils"><?= htmlentities(forum::conseil) ?></option>
            <option value = "Entreprise "><?= htmlentities(forum::entreprise) ?></option>
            <option value="Autres "> <?= htmlentities(forum::other )?></option>
        </select>
    </label>
    <br>
    <br>
    <div class = id_client> <?= htmlentities(forum::numeroClient) ?><?php echo htmlentities($userId) ?> </div>
    <br>
    <div class = email> <?= htmlentities(forum::adresseEmail) ?><?php echo htmlentities($_SESSION['email']) ?> </div>
    <br>
    <label>
        <?= htmlentities(forum::pseudo )?>
        <input  class = "norm" type="text" name="pseudo" placeholder="<?= htmlentities(forum::pseudoPlacefolder )?>" required="required">
    </label>
    <br>
    <label>
        Message :
        <textarea name = "commentaire" placeholder="<?= htmlentities(forum::messagePlaceholder) ?>" required="required"></textarea>
    </label>

    <div class="boutton"> <input type="submit" value="<?= htmlentities(forum::buttonSubmit )?>" name="submit"> </div>

</form>

<h2><?= htmlentities(forum::title3) ?></h2>

<h3> <?= htmlentities(forum::presentationForum )?></h3>


<!---------------------------------- Affichage commentaire ------------------------------------------>




    <?php
    $counter = 0;
    while($counter < 10){
    ?>

<table>
    <tr>
        <th><?= htmlentities(forum::numeroCommentaireForum )?>
        </th>
        <th>
            <?= htmlentities(forum::numeroClientForum )?>
        </th>
        <th >
           <?= htmlentities(forum::pseudoForum) ?>
        </th>
        <th>
           <?= htmlentities(forum::mailForum )?>
        </th>
        <th>
            <?= htmlentities(forum::sujetForum )?>
        </th>

        <th>
           <?= htmlentities(forum::dateForum) ?>
        </th>
    </tr>
    <tr>
        <td><?php echo htmlentities($userdata[$counter]['id_sujet']); ?></td>
        <td><?php echo htmlentities($userdata[$counter]['id_client']); ?> </td>
        <td><?php echo htmlentities($userdata[$counter]['pseudo']); ?></td>
        <td><?php echo htmlentities($userdata[$counter]['mail']); ?></td>
        <td><?php echo htmlentities($userdata[$counter]['subject']); ?></td>
        <td><?php echo htmlentities($userdata[$counter]['date_commentaire']); ?></td>
    </tr>

</table>
</br>

<p class="titre1"> Question </p>

<p class="commentaire">
    <?php echo htmlentities($userdata[$counter]['commentaire']);?>
</p>

<p class="reponse_administrateur">

    <?php

    if (htmlentities($userdata[$counter]['admin_answer']) == null){
        echo forum::administratorAnswer;
    }
    else {
        echo htmlentities($userdata[$counter]['admin_answer']);
    }

    ?>
</p>

    <?php
        $counter++;
    } ?>
</br>
<hr>
</br>
</body>

</html>
