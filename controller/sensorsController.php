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
        getStateSensor($_SESSION['email'], "salon", "temperature");
        //(changeStateSensor($_SESSION['email'], "salon", "temperature", 1));
        //displayStateSensor('chambres', 'fumee');
        //print_r($_POST);
        require ('./views/frontEnd/GestionCapteurs.php');

        if (!empty($_POST['submit'])){
           if($_POST['room'] == "Chambre"){
               $room = 'chambres';

               if(isset($_POST['chambre_smoke']) != null && getValueOfSensor($_POST['chambre_smoke']) != getStateSensor($_SESSION['email'], $room, "fumee" )){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor($_POST['chambre_smoke']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

               if (isset($_POST['chambre_lumen']) != null &&  getValueOfSensor($_POST['chambre_lumen']) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor($_POST['chambre_lumen']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

               if(isset($_POST['chambre_temperature'] )!= null && $_POST['chambre_temperature'] != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor($_POST['chambre_temperature']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }
           }

           else if($_POST['room'] == "Cuisine"){
               $room = 'cuisine';

               if(isset($_POST['cuisine_smoke'] )!= null && getValueOfSensor($_POST['cuisine_smoke']) != getStateSensor($_SESSION['email'], $room, "fumee")){
                    changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor($_POST['cuisine_smoke']));
                    $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }

               if (isset($_POST['cuisine_lumen']) != null && getValueOfSensor($_POST['cuisine_lumen']) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                    changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor($_POST['cuisine_lumen']));
                    $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }

               if(isset($_POST['cuisine_temperature'] )!= null && getValueOfSensor($_POST['cuisine_temperature']) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor($_POST['cuisine_temperature']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

               if (isset($_POST['cuisine_humidity']) != null && getValueOfSensor($_POST['cuisine_humidity']) != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor($_POST['cuisine_humidity']));                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
           }

           else if($_POST['room'] == "Salle de bain"){
               $room = 'salle_de_bain';

               if (isset($_POST['sdb_lumen'] )!= null && getValueOfSensor($_POST['sdb_lumen']) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor($_POST['sdb_lumen']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }

               if (isset($_POST['sdb_temperature']) != null && getValueOfSensor($_POST['sdb_temperature']) != getStateSensor($_SESSION['email'], $room, "temperature")) {
                   changeStateSensor($_SESSION['email'], $room, "temperature",getValueOfSensor( $_POST['sdb_temperature']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

               if (isset($_POST['sdb_humidity'] ) != null && getValueOfSensor($_POST['sdb_humidity'] )!= getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor($_POST['sdb_humidity']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
           }

           else if($_POST['room'] == "Salon"){
               $room = 'salon';
               if(isset($_POST['salon_smoke'] )!= null && getValueOfSensor($_POST['salon_smoke'] )!= getStateSensor($_SESSION['email'], $room, "fumee")){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor($_POST['salon_fumee']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
               if (isset($_POST['salon_lumen'] )!= null && getValueOfSensor($_POST['salon_lumen'] )!= getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere",getValueOfSensor($_POST['salon_lumen']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
               if (isset($_POST['salon_temperature']) != null && getValueOfSensor($_POST['salon_temperature']) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room,"temperature", getValueOfSensor($_POST['salon_temperature']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
               if (isset($_POST['salon_humidity']) != null && getValueOfSensor($_POST['salon_humidity']) != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor($_POST['salon_humidity']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
               if (isset($_POST['salon_security'] )!= null && getValueOfSensor($_POST['salon_security']) != getStateSensor($_SESSION['email'], $room, "mouvement")){
                   changeStateSensor($_SESSION['email'], $room, "mouvement", getValueOfSensor($_POST['salon_security']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

           }

           else if(isset($_POST['room']) == null){
               $room  = 'chambres';
           }
       }
    }

}


function displayStateSensor($room, $sensortype){

    if (getStateSensor($_SESSION['email'], $room, $sensortype) == '1'){
        return 'checked';
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
