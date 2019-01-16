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
<div id="tabs" class="tabs">
    <li><a href="#" name="tab1" id="1"> Chambres</a></li>
    <li><a href="#" name="tab2" id="2">Cuisine</a></li>
    <li><a href="#" name="tab3" id="3">Salle de bain</a></li>
    <li><a href="#" name="tab4" id="4">Salon</a></li>

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
                <input type="checkbox" name ="chambre_smoke">
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" name = "chambre_lumen">
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="chambre_temperature">
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
                <input type="checkbox" name="cuisine_smoke" >
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
                <input type="checkbox" name="sdb_lumen">
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" name="sdb_temperature">
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="sdb_humidity">
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
                <input type="checkbox" name="salon_smoke" >
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" name="salon_lumen">
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="salon_temperature" >
                <span class="slider round"></span>
            </label>

            <label class="switch4">
                <input type="checkbox" name="salon_humidity" >
                <span class="slider round"></span>
            </label>

            <label class="switch5">
                <input type="checkbox" name="salon_security">
                <span class="slider round"></span>

            </label>
        </div>
    </div>

    <input type ="hidden" name="room" id="room">

    <div class="boutton"> <input type="submit" value="Modifier mes l'état de mes capteurs" name="submit"> </div>

</form>

</body>


<script type="text/javascript">

    $('#1').click(function() {
        $('#room').val("Chambre");
        console.log('Chambre')
    });

    $('#2').click(function() {
        $('#room').val("Cuisine");
        console.log('Cuisine');
    });

    $('#3').click(function() {
        $('#room').val("Salle de bain");
        console.log('SSDB');
    });

    $('#4').click(function() {
        $('#room').val("Salon");
        console.log('Ssalon');
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


<<<<<<< HEAD
    $('#tab1').click(function() {
        console.log('test');
    $('room').val("Chambres");
    console.log( $('#room').val());
    window.location.href="tapage.php?#tab1=1"
    //var '#tab1' = 'chambres';
    //document.write ("<iframe src='traitement.php?room="+chambres+"' scrolling='no' frameborder='0' width='0' height='0' ><iframe>");

    //});

=======
>>>>>>> 1418bda4e891a2ab7ef303fbc9b119a455e8d05e

</script>

<?php include 'backEnd/footer.php' ?>
</html>

