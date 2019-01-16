<?php include('../public/locale/'.$locale.'.php'); ?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./public/css/style.css" />
    <link href="./public/css/style_gestion_capteurs.css" rel="stylesheet" media="all">
    <?php include '../views/backEnd/header.php';?>

</head>


<body>
<form method="post">
<div id="tabs" class="tabs" name ="tabs">
    <li><a href="#" name="tab1" id="tab1"> Chambres</a></li>
    <li><a href="#" name="tab2">Cuisine</a></li>
    <li><a href="#" name="tab3">Salle de bain</a></li>
    <li><a href="#" name="tab4">Salon</a></li>
</div>



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
                <input type="checkbox" checked value= "<?php echo($resultat['smoke']) ?>">
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>">
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" checked value= "<?php echo($resultat['temperature']) ?>" >
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
                <input type="checkbox" checked value= "<?php echo($resultat['smoke']) ?>" >
                <span class="slider round"></span>
            </label>


            <label class="switch2">
                <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>" >
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" checked value= "<?php echo($resultat['temperature']) ?>" >
                <span class="slider round"></span>
            </label>


            <label class="switch4">
                <input type="checkbox" checked value= "<?php echo($resultat['humidity']) ?>" >
                <span class="slider round"></span>
            </label>

        </div>


        <div id="tab3" >

            <h4>Salle de bain</h4>

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


            <label class="switch1">
                <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>" >
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" checked value= "<?php echo ($resultat['temperature']) ?>">
                <span class="slider round"></span>
            </label>


            <label class="switch3">
                <input type="checkbox" checked value= "<?php echo ($resultat['humidity']) ?>">
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
                <input type="checkbox" checked value= "<?php echo($resultat['smoke']) ?>" >
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" checked value= "<?php echo($resultat['lumen']) ?>" >
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" checked value= "<?php echo($resultat['temperature']) ?>" >
                <span class="slider round"></span>
            </label>

            <label class="switch4">
                <input type="checkbox" checked value= "<?php echo($resultat['humidity']) ?>" >
                <span class="slider round"></span>

                <label class="switch5">
                    <input type="checkbox" checked value= "<?php echo($resultat['security']) ?>" >
                    <span class="slider round"></span>

                </label>
        </div>
    </div>
    <input type ="hidden" name="room" id="room">
</form>

</body>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
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


    $('#tab1').click(function() {
        console.log('test');
    $('room').val("Chambres");
    console.log( $('#room').val());
    //var '#tab1' = 'chambres';
    //document.write ("<iframe src='traitement.php?room="+chambres+"' scrolling='no' frameborder='0' width='0' height='0' ><iframe>");

    });

</script>

<?php include 'backEnd/footer.php' ?>
</html>

