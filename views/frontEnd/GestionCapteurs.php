<?php include('./public/locale/'.$locale.'.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './views/backEnd/globalHead.php'; ?>
    <link href="./public/css/style_gestion_capteurs.css" rel="stylesheet" media="all">

</head>

<body>
        <?php include './views/backEnd/header.php';?>
<form method="post">
<ul id="tabs">
    <li><a href="#" name="tab1" id="1">Chambre</a></li>
    <li><a href="#" name="tab2" id="2">Cuisine</a></li>
    <li><a href="#" name="tab3" id="3">Salle de bain</a></li>
    <li><a href="#" name="tab4" id="4">Salon</a></li>
</ul>   

<div class="main" >

    <h2>Capteurs</h2>

    <div id="content">

        <div id="tab1" value='chambres'>

       

            <h4>Chambres</h4>


            <div class="gallery">
                <img src="./public/images/smoke.png" id="smoke" >
                <div class="desc"></div>
            </div>

            <div class="gallery">
                <img src="./public/images/lumen.png" id="lumen" >
                <div class="desc"></div>
            </div>

            <div class="gallery">
                <img src="./public/images/temperature.png" id="temperature" >
                <div class="desc"></div>

            </div>

            <label class="switch1">
                <input type="checkbox" name ="chambre_smoke" <?php  echo (displayStateSensor('chambres', 'fumee'));  ?>>
                <span class="slider round"></span>
            </label>
            <label class="switch2">
                <input type="checkbox" name = "chambre_lumen" <?php echo displayStateSensor('chambres', 'lumiere')?>>
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="chambre_temperature" <?php echo displayStateSensor('chambres', 'temperature') ?>>
                <span class="slider round"></span>
            </label>

        </div>


        <div id="tab2">

            <h4>Cuisine</h4>

            <div class="gallery">
                <img src="./public/images/smoke.png" id="smoke" >
                <div class="desc"></div>
            </div>



            <div class="gallery">
                <img src="./public/images/lumen.png" id="lumen" >
                <div class="desc"></div>
            </div>



            <div class="gallery">
                <img src="./public/images/temperature.png" id="temperature" >
                <div class="desc"></div>
            </div>


            <div class="gallery">
                <img src="./public/images/humidity.jpg" id="humidity" >
                <div class="desc"></div>
            </div>


            <label class="switch1">
                <input type="checkbox" name="cuisine_smoke" <?php echo (displayStateSensor('cuisine', 'fumee'));  ?> >
                <span class="slider round"></span>
            </label>


            <label class="switch2">
                <input type="checkbox" name="cuisine_lumen" <?php  echo (displayStateSensor('cuisine', 'lumiere'));  ?>>
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="cuisine_temperature" <?php  echo (displayStateSensor('cuisine', 'temperature'));  ?>>
                <span class="slider round"></span>
            </label>


            <label class="switch4">
                <input type="checkbox" name="cuisine_humidity" <?php  echo (displayStateSensor('cuisine', 'humidite'));  ?>>
                <span class="slider round"></span>
            </label>

        </div>


        <div id="tab3" >

            <h4>Salle de bain</h4>

            <div class="gallery">
                <img src="./public/images/lumen.png" id="lumen">
                <div class="desc"></div>
            </div>



            <div class="gallery">
                <img src="./public/images/temperature.png" id="temperature" >
                <div class="desc"></div>
            </div>


            <div class="gallery">
                <img src="./public/images/humidity.jpg" id="humidity" >
                <div class="desc"></div>
            </div>


            <label class="switch1">
                <input type="checkbox" name="sdb_lumen" <?php  echo (displayStateSensor('salle_de_bain', 'lumiere'));  ?>>
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" name="sdb_temperature" <?php  echo (displayStateSensor('salle_de_bain', 'temperature'));  ?>>
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="sdb_humidity"<?php  echo (displayStateSensor('salle_de_bain', 'humidite'));  ?>>
                <span class="slider round"></span>
            </label>

        </div>


        <div id="tab4">
            <h4>Salon</h4>
            <div class="gallery">
                <img src="./public/images/smoke.png" id="smoke" >
                <div class="desc"></div>
            </div>



            <div class="gallery">
                <img src="./public/images/lumen.png" id="lumen"  >
                <div class="desc"></div>
            </div>


            <div class="gallery">
                <img src="./public/images/temperature.png" id="temperature" >
                <div class="desc"></div>
            </div>


            <div class="gallery">
                <img src="./public/images/humidity.jpg" id="humidity" >
                <div class="desc"></div>
            </div>

            <div class="gallery">
                <img src="./public/images/security.png" id="security">
                <div class="desc"></div>
            </div>


            <label class="switch1">
                <input type="checkbox" name="salon_smoke" <?php  echo (displayStateSensor('salon', 'fumee'));  ?>>
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" name="salon_lumen" <?php  echo (displayStateSensor('salon', 'lumiere'));  ?>>
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="salon_temperature" <?php echo(displayStateSensor('salon', 'temperature')) ?> >
                <span class="slider round"></span>
            </label>

            <label class="switch4">
                <input type="checkbox" name="salon_humidity" <?php  echo (displayStateSensor('salon', 'humidite'));  ?>>
                <span class="slider round"></span>
            </label>

            <label class="switch5">
                <input type="checkbox" name="salon_security"<?php  echo (displayStateSensor('salon', 'mouvement'));  ?>>
                <span class="slider round"></span>

            </label>
        </div>
    </div>

    <input type ="hidden" name="room" id="room">

    <div class="boutton"> <input type="submit" value="Modifier l'état de mes capteurs" name="submit"> </div>
</div>
</form>
<br>
<br>
<br>
<br>
<br>
</body>


<script type="text/javascript">

    $('#1').click(function() {
        $('#room').val("Chambre");
    });

    $('#2').click(function() {
        $('#room').val("Cuisine");
    });

    $('#3').click(function() {
        $('#room').val("Salle de bain");
    });

    $('#4').click(function() {
        $('#room').val("Salon");
    })

    $(document).ready(function() { $("#content").find("[id^='tab']").hide(); // Hide all content
        $("#tabs li:first").attr("id","current");
        $("#content #tab1").fadeIn(); // Show first tab's content

        $('#tabs a').click(function(e) {
            e.preventDefault();
            if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
                return;
            }
            else{
                $("#content").find("[id^='tab']").hide(); // Hide all content
                $("#tabs li").attr("id",""); //Reset id's
                $(this).parent().attr("id","current"); // Activate this
                $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
            }
        });
    });

    //----------------------------------------------Fonction pour récupérer le type de room------------------------------//


</script>

<?php include './views/backEnd/footer.php' ?>
</html>

