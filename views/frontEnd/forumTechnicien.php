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
    <a href="./home" <button class="button"> <?= htmlentities(forumAmdmin::button) ?></button> </a>

    <h1>Forum </h1>

    <h2> <?= htmlentities(forumAmdmin::title )?> </h2>

    <form method="post" id ="forum">

        <label>
            <?= htmlentities(forumAmdmin::numeroCommentaire )?>
            <input type="text" name ="numero_commentaire" placeholder="Numéro du commentaire" required="required">
        </label>
        <br>
        <br>
        <label>
            <?= htmlentities(forumAmdmin::reponseAdmin) ?>
            <br>
            <textarea name = "commentaire_technicien" placeholder="Tapez votre réponse ici" required="required"></textarea>
        </label>
        <div class="boutton"> <input type="submit" value="<?= htmlentities(forumAmdmin::submit )?>" name="submit"> </div>
    </form>

<?php
$counter = 0;
while($counter < 10){
    ?>

    <table>
        <tr>
            <th>
                <?= htmlentities(forumAmdmin::numeroCommentaireForumAdmin) ?>
            </th>
            <th>
                <?= htmlentities(forumAmdmin::numeroClientForumAdmin) ?>
            </th>
            <th>
                <?= htmlentities(forumAmdmin::pseudoForumAdmin) ?>
            </th>
            <th>
                <?= htmlentities(forumAmdmin::mailForumAdmin )?>
            </th>
            <th>
                <?= htmlentities(forumAmdmin::subjectForumAdmin )?>
            </th>

            <th>
                <?= htmlentities(forumAmdmin::dateForumAdmin )?>
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
        <?php echo htmlentities($userdata[$counter]['commentaire']); ?>
    </p>


    <p class="reponse_administrateur" name="commentaire_technicien">

    <?php

    if ($userdata[$counter]['admin_answer'] == null) {
        echo htmlentities(forumAmdmin::adminAnswerForumAdmin);
    }

    else {
        echo htmlentities($userdata[$counter]['admin_answer']);
    }

    $counter++;
}

?>

<hr>


</body>
