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
<a href="./home" <button class="button"> <?= forumAmdmin::button ?></button> </a>

<h1>Forum </h1>

<h2> <?= forumAmdmin::title ?> </h2>

<form method="post">

    <label>
        <?= forumAmdmin::numeroCommentaire ?>
        <input type="text" name ="numero_commentaire" placeholder="Numéro du commentaire" required="required">
    </label>
    <br>
    <br>
    <label>
        <?= forumAmdmin::reponseAdmin ?>
        <br>
        <textarea name = "commentaire_administrateur" placeholder="Tapez votre réponse ici" required="required"></textarea>
    </label>
    <div class="boutton"> <input type="submit" value="<?= forumAmdmin::submit ?>" name="submit"> </div>
</form>

<?php
    $counter = 0;
    while($counter < 10){
?>

<table>
    <tr>
        <th>
           <?= forumAmdmin::numeroCommentaireForumAdmin ?>
        </th>
        <th>
           <?= forumAmdmin::numeroClientForumAdmin ?>
        </th>
        <th>
           <?= forumAmdmin::pseudoForumAdmin ?>
        </th>
        <th>
           <?= forumAmdmin::mailForumAdmin ?>
        </th>
        <th>
           <?= forumAmdmin::subjectForumAdmin ?>
        </th>

        <th>
            <?= forumAmdmin::dateForumAdmin ?>
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
    <?php echo $userdata[$counter]['commentaire']; ?>
</p>


<p class="reponse_administrateur" name="commentaire_administrateur">

    <?php

    if ($userdata[$counter]['admin_answer'] == null) {
        echo forumAmdmin::adminAnswerForumAdmin;
    }

    else {
        echo $userdata[$counter]['admin_answer'];
    }

?>
</p>
<label name="delete_commit">
    <?= forumAmdmin::supprimerCommentaireForumAdmin ?>
    <input type="checkbox">
</label>
<?php
    $counter++;
    }

        ?>

<hr>

</br>
</body>