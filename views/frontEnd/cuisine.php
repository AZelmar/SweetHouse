<?php include('./public/locale/'.$locale.'.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<?php include './views/backEnd/globalHead.php'; ?>
    <link href="./public/css/style_gestion_capteurs.css" rel="stylesheet" media="all">
    <title>SweetHouse / Cuisine</title>
</head>

<body>


<?php include './views/backEnd/header.php' ?>


<form method="POST">

<ul id="tabs">
    <li><a href="#" name="tab1"><?= shop::livingRoom ?></a></li>
    <li><a href="#" name="tab2"><?= shop::room ?></a></li>
    <li><a href="#" name="tab3"><?= shop::kitchen ?></a></li>
    <li><a href="#" name="tab4"><?= shop::bathroom ?></a></li>
</ul>	


    <h2>Capteurs</h2>

    <div id="content">
    	<div id="tab2">

            <h4>Cuisine</h4>
            <div id= "tab1">
            	<div class="gallery">
                	<img src="./public/images/smoke.png" id="smoke" >
                <div class="desc"></div>
            	</div>
			</div>


			<div id= "tab5">
            	<div class="gallery">
                	<img src="./public/images/lumen.png" id="lumen" >
                <div class="desc"></div>
            	</div>
            </div>


            <div id= "tab3">
            	<div class="gallery">
                	<img src="./public/images/temperature.png" id="temperature" >
                <div class="desc"></div>
            	</div>
        	</div>


        	<div id = "tab4">
            	<div class="gallery">
                	<img src="./public/images/humidity.png" id="humidity" >
                <div class="desc"></div>
            	</div>
            </div>

            <label class="switch1">
                <input type="checkbox" name="cuisine_smoke"  >
                <span class="slider round"></span>
            </label>


            <label class="switch2">
                <input type="checkbox" name="cuisine_lumen" >
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="cuisine_temperature" >
                <span class="slider round"></span>
            </label>


            <label class="switch4">
                <input type="checkbox" name="cuisine_humidity" >
                <span class="slider round"></span>
            </label>

        </div>
</form>
</body>

<?php include './views/backEnd/footer.php' ?>
</html>

