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
<?= faq::title ?>
	</div>
</h1>

<p>
	<div class="presentation-questions">
    <?= faq::presentationFAQ?>
</p>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<button class="collapsible"> <?= faq::gererMaisonTitle ?> </button>
<div class="content">
<p> <?= faq::gererMaison ?> </p>
</div>
    <button class="collapsible"><?= faq::malfonctionnementCapteurTitle ?> </button>
<div class="content">
<p> <?= faq::malfonctionnementCapteur ?></p>
</div>
<button class="collapsible"> <?= faq::ajouterCapteurTitle ?></button>
<div class="content">
<p> <?= faq::ajouterCapteur ?></p>
</div>
<button class="collapsible"> <?= faq::malfonctionnementActionneurTitle ?></button>
<div class="content">
<p> <?= faq::malfonctionnementActionneur ?></p>
</div>
<button class="collapsible"><?= faq::ajouterActionneurTitle ?></button>
<div class="content">
<p><?= faq::ajouterActionneur ?></p>
</div>
<button class="collapsible"> <?= faq::informationSecurityTitle ?></button>
<div class="content">
<p> <?= faq::informationSecurity ?></p>
</div>
<button class="collapsible"> <?= faq::serviceClientTitle ?></button>
<div class="content">
<p> <?= faq::serviceClient ?></p>
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

