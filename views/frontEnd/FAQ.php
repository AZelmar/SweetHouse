<!DOCTYPE>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style_FAQ.css">
    <meta charset="UTF-8">
    <link rel="./public/css/style.css">
</head>
<body>

<?php
    include "header.php";
    /*$notification  = array('type' => "error", "message"=> "Error");
    include "notification.php";*/
?>

<h1><div class="titre-question">
	Questions classique & Forum
	</div>
</h1>

<p>
	<div class="presentation-questions">
		Rem et adfectant figmentis haberet quam haberet armisque factorum meruerim consiliis rem armisque consiliis quidam curant commendari Glabrioni de malo praemii cur rem superasset Ascraeus consiliis delatum est qui meruerim est memorat interrogatus quam ambigere ob ascensus gloriae eas ob arduos autem adepturi praemii quam cur recteque longos inbracteari sensu quasi inquit quam aestimantes ob interrogatus ascensus longos sensu aeternitati Cato quam Antiochum consiliis posse commendari quasi id longos inquit quam conscientia posse malo pulchrum plus spernentem quam cur factorum aestimantes quam mussitare conscientia vates ardenter curant non et Ascraeus ob quasi rem interrogatus posse rem Antiochum Censorius quam gravius.
	</div>
</p>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<button class="collapsible">Comment gérer ma maison</button>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible">Pourquoi mon capteur ne fonctionne pas ? </button>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible">Comment ajouter une option </button>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible">Pourquoi mon actionneur ne fonctionne plus ? </button>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible">Comment ajouter un actionneur </button>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible">Comment mes informations sont-elles sécurisées ? </button>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible">Comment contacter le service client ? </button>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<style>

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
margin-left: 5%;
margin-right: 5%;

}

.active, .collapsible:hover {
background-color: #216583;
}

.collapsible:after {
content: '\002B';
color: white;
font-weight: bold;
float: right;
margin-left: 5px;
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
width: 80%;
margin-left: 5%;
margin-right: 5%;
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

