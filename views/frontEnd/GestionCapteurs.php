<?php include('./public/locale/'.$locale.'.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './views/backEnd/globalHead.php'; ?>
    <link href="./public/css/style_gestion_capteurs.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="./public/js/jtogglerjs/jtoggler.styles.css">

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

            <div class="gallery" style="display: inline-block;vertical-align: baseline;">
                 <img src="./public/images/distance.png" id="smoke">
                <div class="desc"></div>
            </div>
            <div style="display: inline-block;vertical-align: baseline;">
                <span id="chambre_distance_value"></span>
            </div>
            <br>
            <div class="gallery" style="display: inline-block;vertical-align: baseline;">
                <img src="./public/images/lumen.png" id="lumen" >
                <div class="desc"></div>
            </div>
            <div style="display: inline-block;vertical-align: baseline;">
                <span id="chambre_lumen_value"></span>
            </div>
            <br>
            <div class="gallery" style="display: inline-block;vertical-align: baseline;">
                <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fimg.icons8.com%2Fmetro%2F1600%2Fengine.png&f=1" id="temperature" >
                <div class="desc"></div>
            </div>
            <label class="switch3" style="display: inline-block;vertical-align: baseline;">
                <input type="checkbox" id="chambres_motor" class="jtoggler" data-jtmulti-state name="chambre_motor">
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
                <img src="./public/images/humidity.png" id="humidity" >
                <div class="desc"></div>
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
                <img src="./public/images/humidity.png" id="humidity" >
                <div class="desc"></div>
            </div>


            <label class="switch1">
                <input type="checkbox" name="sdb_lumen" >
                <span class="slider round"></span>
            </label>

            <label class="switch2">
                <input type="checkbox" name="sdb_temperature" >
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
                <img src="./public/images/humidity.png" id="humidity" >
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
                <input type="checkbox" name="salon_lumen" >
                <span class="slider round"></span>
            </label>

            <label class="switch3">
                <input type="checkbox" name="salon_temperature"  >
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

</div>
</form>
</body>
<script type="text/javascript">
        $(document).ready(function(){
            var sensorValue = new Array('5','1');
            function refreshSensorValue(){
            sensorValue.forEach(function(sensor) {
                 $.ajax({
                    type: "POST",
                    url: "<?= $basename ?>/ajax/getTrameInfo",
                    data: {sensorRef:  sensor},
                    success: function(data){
                    var trame = JSON.parse(data);
                    if(trame != null)
                    {
                         console.log(trame);
                         var tra = trame.substr(0, 1);
                         var obj = trame.substr(1, 4);
                         var req = trame.substr(5, 1);
                         var typ = trame.substr(6, 1);
                         var num = trame.substr(7, 2);
                         var val= trame.substr(9, 4);
                         var tim = trame.substr(13, 4);
                         var chk = trame.substr(17, 2);
                         var timestamp = trame.substr(19, 13);
                         switch(typ){
                            case '5':
                                if(req == '2'){
                                    $("#chambre_lumen_value").text(htmlEntities(Math.round(parseInt(val)/4095*100 ))+" %");
                                }
                                break;
                            case '1':
                                if(req == '2'){
                                    if(parseInt(val) > 2000)
                                    {
                                        $("#chambre_distance_value").text("Présence");
                                    }
                                    else
                                    {
                                        $("#chambre_distance_value").text("Pas de présence");
                                    }
                                }
                                break;
                         }
                    }
                }
            });
        });
        setTimeout(refreshSensorValue,500);
        }
        refreshSensorValue();
        $(document).on('jt:toggled:multi', function (event, target) {
            var motorVal = $(target).parent().index();
            console.log($(target).parent().index());
            $.ajax({
                    type: "POST",
                    url: "<?= $basename ?>/ajax/sendTrame",
                    data: {motorValue:  $(target).parent().index()},
                    success: function(data){
                        console.log(data);
                }
            });
        });
        });
        $('#room').val("Chambre");
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="./public/js/jtogglerjs/jtoggler.js"></script>
<script>
    $(function(){

  $('.jtoggler').jtoggler();

});
</script>

<?php include './views/backEnd/footer.php' ?>
</html>
