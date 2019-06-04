<?php
/**
 * Created by PhpStorm.
 * User: AymericLepine
 * Date: 11/01/2019
 * Time: 13:29
 */
require ('./model/sensorsEntity.php');

function gestion_capteurs($locale){

    if(isConnected($locale)) {
        require ('./views/frontEnd/GestionCapteurs.php');


        if (!empty($_POST['submit'])){
           if($_POST['room'] == "Chambre"){
               $room = 'chambres';

               if((isset($_POST['chambre_smoke']) == true || (isset($_POST['chambre_smoke']) == false))  && getValueOfSensor(isset($_POST['chambre_smoke'])) != getStateSensor($_SESSION['email'], $room, "fumee" )){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['chambre_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "fumee");
               }

                if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                    changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                    $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
                    calculateTimeSensors($room, "lumiere");
                }


               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "temperature");
               }
           }

           else if($_POST['room'] == "Cuisine"){
               $room = 'cuisine';

               if(isset($_POST['cuisine_smoke']) == true || (isset($_POST['cuisine_smoke']) == false)  && getValueOfSensor(isset($_POST['cuisine_smoke'])) != getStateSensor($_SESSION['email'], $room, "fumee")){
                    changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['cuisine_smoke'])));
                    $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                    calculateTimeSensors($room, "fumee");

               }

               if ((isset($_POST['cuisine_lumen']) == true || (isset($_POST['cuisine_lumen']) == false))  && getValueOfSensor(isset($_POST['cuisine_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                    changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['cuisine_lumen'])));
                    $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                    calculateTimeSensors($room, "lumiere");

               }

               if(isset($_POST['chambre_smoke']) == true || (isset($_POST['chambre_smoke']) == false) && getValueOfSensor(isset($_POST['cuisine_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['cuisine_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "temperature");
               }

               if (isset($_POST['cuisine_humidity']) == true || (isset($_POST['cuisine_humidity']) == false)  && getValueOfSensor(isset($_POST['cuisine_humidity'])) != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor(isset($_POST['cuisine_humidity'])));                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "humidite");

               }
           }

           else if($_POST['room'] == "Salle de bain"){
               $room = 'salle_de_bain';

               if ((isset($_POST['sdb_lumen']) == true || (isset($_POST['sdb_lumen']) == false))  && getValueOfSensor(isset($_POST['sdb_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['sdb_lumen'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "lumiere");

               }

               if ((isset($_POST['sdb_temperature']) == true || (isset($_POST['sdb_temperature']) == false)) && getValueOfSensor(isset($_POST['sdb_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")) {
                   changeStateSensor($_SESSION['email'], $room, "temperature",getValueOfSensor(isset($_POST['sdb_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "temperature");
               }

               if ((isset($_POST['sdb_humidity']) == true || (isset($_POST['sdb_humidity']) == false)) && getValueOfSensor(isset($_POST['sdb_humidity']))!= getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor(isset($_POST['sdb_humidity'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "humidite");

               }
           }

           else if($_POST['room'] == "Salon"){
               $room = 'salon';
               if((isset($_POST['salon_smoke']) == true || (isset($_POST['salon_smoke']) == false)) && getValueOfSensor(isset($_POST['salon_smoke']))!= getStateSensor($_SESSION['email'], $room, "fumee")){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['salon_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "fumee");

               }
               if ((isset($_POST['salon_lumen']) == true || (isset($_POST['salon_lumen']) == false)) && getValueOfSensor(isset($_POST['salon_lumen']))!= getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere",getValueOfSensor(isset($_POST['salon_lumen'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "lumiere");

               }
               if ((isset($_POST['salon_temperature']) == true || (isset($_POST['salon_temperature']) == false))  && getValueOfSensor(isset($_POST['salon_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room,"temperature", getValueOfSensor(isset($_POST['salon_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "temperature");

               }
               if ((isset($_POST['salon_humidity']) == true || (isset($_POST['salon_humidity']) == false))  && getValueOfSensor(isset($_POST['salon_humidity'])) != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor($_POST['salon_humidity']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "humidite");

               }
               if (isset($_POST['salon_humidity']) == true || (isset($_POST['salon_humidity']) == false) && getValueOfSensor(isset($_POST['salon_security'])) != getStateSensor($_SESSION['email'], $room, "mouvement")){
                   changeStateSensor($_SESSION['email'], $room, "mouvement", getValueOfSensor(isset($_POST['salon_security'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "mouvement");
               }

           }

           else if(($_POST['room']) == null){
               $room  = 'chambres';

               if((isset($_POST['chambre_smoke']) == true || (isset($_POST['chambre_smoke']) == false))  && getValueOfSensor(isset($_POST['chambre_smoke'])) != getStateSensor($_SESSION['email'], $room, "fumee" )){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['chambre_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "fumee");
               }

               if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                   $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "lumiere");
               }


               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   calculateTimeSensors($room, "temperature");
               }
           }
       }
    }

}


function displayStateSensor($room, $sensortype){

    if (getStateSensor($_SESSION['email'], $room, $sensortype) == '1'){
        return 'checked';
    }

    if (getStateSensor($_SESSION['email'], $room, $sensortype) == '0'){
        return "";
    }

}

function calculateTimeSensors($room, $sensortype){

    if (getStateSensor($_SESSION['email'], $room, $sensortype) == '1'){
        $starttime=date('Y-m-d H:i:s');
        updateTimeSensor($_SESSION['email'], $room, $sensortype,$starttime);
    }

    if (getStateSensor($_SESSION['email'], $room, $sensortype) == '0'){
        $endtime=date('Y-m-d H:i:s');
        $timediff1 = strtotime($endtime) - strtotime(getTimeSensor($_SESSION['email'], $room, $sensortype));
        $multiply = $timediff1 * 5;
        $timediff=gmdate("Y/m/d H:i:s",$multiply);
        addTimeSensor($_SESSION['email'], $room, $sensortype,$timediff);
    }

}

function getValueOfSensor($sensorValue){

    if($sensorValue == 'on'){
         return '1';
     }

    else{
         return '0';
     }
}

?>
