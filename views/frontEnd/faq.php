<?php include('./public/locale/'.$locale.'.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>SweetHouse | Foire aux questions</title>
    <meta charset="UTF-8">
    <?php include ('./views/backEnd/globalHead.php'); ?>

</head>
<body>

<?php
    include "./views/backEnd/header.php";
    include './views/backEnd/footer.php';
?>

<h1><div class="titre-question">
	Questions classiques & Forum
	</div>
</h1>

<p>
	<div class="presentation-questions">
    Dans cette Foire Aux Questions vous pourrez retrouver toutes les questions classiques que les utilisateurs peuvent se poser quant à l’utilisation de la plateforme de gestion des capteurs ou les capteurs eux-mêmes. Un Forum est également à la disposition des utilisateurs dans le cas où la réponse aux questions des utilisateurs ne serait pas déjà mentionnée dans la FAQ. Les administrateurs de la plateforme prendront soin d’actualiser les questions traitées dans la FAQ afin de s’adapter aux questions les plus fréquentes. Néanmoins, nous sommes tout à fait ouverts à la suggestion de question récurrentes que d’autres utilisateurs pourraient venir à se poser. N’hésitez donc pas à nous contacter grâce à l’onglet Contactez-Nous, nous ferons tout notre possible pour vous répondre dans de plus brefs délais. 	</div>
</p>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<button class="collapsible">Comment gérer ma maison</button>
<div class="content">
    <p>La plateforme Sweet House est là pour vous proposer une gestion complète de votre maison domotisée ainsi que l’ensemble des capteurs que vous pourriez posséder dans cette maison. La gestion des capteurs est disponible via l’onglet Gestions Capteurs où vous pourrez retrouver l’ensemble des capteurs présents dans votre maison avec la possibilité de modifier l’état de ceux-ci.</p> </div>
<button class="collapsible">Pourquoi mon capteur ne fonctionne pas ? </button>
<div class="content">
    <p>La raison la plus fréquente lié au disfonctionnement d’un capteur est un problème de batterie. Veillez donc à regarder si les témoins lumineux de votre capteur sont allumés. Si ce n’est pas le cas, tentez de remplacer les piles de votre capteur en prenant soin de disposées celles-ci dans le sens correct. Si malgré cette tentative le capteur ne fonctionne toujours pas, vous pouvez prendre RDV avec un technicien de manière à ce que celui-ci remplace au plus vite votre capteur. Sinon, vous pouvez bien évidemment passer par la boutique afin de commander un nouveau capteur adéquat. </p>
</div>
<button class="collapsible">Comment ajouter un capteur ?</button>
<div class="content">
    <p>Pour ajouter un capteur, une demande à l’administrateur est nécessaire. En effet, la mise en place de capteurs est gérée par l’administrateur afin d’éviter tous surchargement de la plateforme. Vous pouvez donc entrer en contact avec celui-ci de différentes manières et celui-ci vous répondra dans les plus brefs délais. Un RDV avec un technicien sera par la suite nécessaire dans le cas où l’installation d’un capteur serait  nécessaire. </p>
</div>
<button class="collapsible">Pourquoi mon actionneur ne fonctionne plus ? </button>
<div class="content">
    <p>Pour répondre à cette question, nous vous invitons à vous référer à la section « Pourquoi mon capteur ne fonctionne plus ». .</p>
</div>
<button class="collapsible">Comment ajouter un actionneur </button>
<div class="content">
    <p>Pour répondre à cette question nous vous invitons à vous référer à la section « Comment ajouter une option ».</p>
</div>
<button class="collapsible">Comment mes informations sont-elles sécurisées ? </button>
<div class="content">
    <p>L’ensemble de vos informations sont contenues dans un serveur sécurisé physiquement et technologiquement au sein des locaux de DomIsep. Les développeurs de la plateforme Sweet House ont mis en place de nombreux protocoles de sécurité afin que vous seul et l’administrateur lié à votre compte soit les seuls maître de vos informations. Votre mot de passe a donc été crypté au sein de la base de données et l’ensemble des données personnelles sont protégées par nos Conditions Générales d’Utilisation que ces informations ne seront en aucun cas utilisé à des fins autres que la gestion domostisée de votre maison. Si vous avez quelconque question à ce sujet n’hésitez pas à contacter un administrateur grâce à l’onglet « Contactez nous ». </p>
</div>
<button class="collapsible">Comment contacter le service client ? </button>
<div class="content">
    <p>Toutes les informations pour le contact du service client sont contenues dans l’onglet Contactez Nous dasn l'onglet Aide</p>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<style>

    h1{
        text-align: center;
        font-family: Lato, Helvetica, sans-serif;
        text-align: center;
        font-weight: lighter;
        margin-bottom: 3%;

    }

    .presentation-questions{
        margin-left: 5%;
        margin-right: 5%;
        font-family: Lato, Helvetica, sans-serif;
        text-align: justify;
        margin-bottom: 3%;



    }
body {
background-color: #cffdf8;
font-weight: normal;
font-style:normal;
background-size :cover;
cursor:auto;
padding: 0;
margin:0;

}

ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #f76262;
display: flex;
}


li {
float: left;
display: flex;
align-items: center;
border-left: 1px solid black;
}
.collapsible {
background-color: #65c0ba;
color: white;
cursor: pointer;
padding: 18px;
width: 100%;
border: none;
text-align: left;
outline: none;
font-size: 15px;
width: 80%;
    margin-left: 10%;
    font-family: Lato, Helvetica, sans-serif;
font-weight: lighter;
    font-size: 1.1em;

}


.active, .collapsible:hover {
background-color: #216583;
}

.collapsible:after {
content: '\002B';
color: white;
font-weight: bold;
float: right;
margin-left: 10px;
}

.active:after {
content: "\2212";
}

.content {
padding: 0 18px;
max-height: 0;
overflow: hidden;
transition: max-height 0.2s ease-out;
background-color: #f1f1f1;
width: 77.5%;
margin-left: 10%;
    font-family: Lato, Helvetica, sans-serif;
    font-weight: lighter;
    font-size: 0.92em;
}



body {
    background-color: #cffdf8;
    font-weight: normal;
    font-style:normal;
    background-size :cover;
    cursor:auto;
    padding: 0;
    margin:0;

}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f76262;
    display: flex;
}


li {
    float: left;
    display: flex;
    align-items: center;
    border-left: 1px solid black;
}
li:last-child {
    margin-left: auto;
}
li:nth-last-child(2) {
    border-right: 1px solid black;
}

li a {
    color: black;
    padding: 4px 16px;
    text-decoration: none;
    font-size: 1.5em;
    font-family: Lato, Helvetica, sans-serif;
    border-radius:10px;
    height: 100%;
}
li a p {
    vertical-align: middle;
}
li:hover:not(.active) {
    background-color: #216583;
    transition: all 1s;
}

li a:focus {
    border: 0;
}
li:a:active{
    color: #f76262;
}


#logo-li {
    border-right: none;
}
#logo{
    display: block;
    height: 10vh;
    width: 10vw;
}
.active {
    background-color: #D3D3D3;
}
.notification{
    margin: 10px 0px;
    padding:12px;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.notification_error{
    color: #D8000C;
    background-color: #FFD2D2;
}
.notification_success{
    color: #4F8A10;
    background-color: #DFF2BF;
}
#validate-button{
    margin:0 auto;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 9px 24px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
}


</style>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

</body>
</html>

