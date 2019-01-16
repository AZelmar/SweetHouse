<?php
/**
 * Created by PhpStorm.
 * User: AymericLepine
 * Date: 11/01/2019
 * Time: 13:29
 */

function gestion_capteurs($locale){

    if(isConnected($locale)) {
        require ('../views/frontEnd/GestionCapteurs.php');

       if (!empty($_POST['submit'])){
           var_dump($_POST['room']);
           if($_POST['room'] == "Chambre"){
               $room = 'Chambres';
               if($_POST['chambre_smoke'] != getStateSensor($_SESSION['email'], $room, "fumee" )){
                   changeStateSensor($_SESSION['email'], $room, "fumee", $_POST['chambre_smoke']);
               }

               else if ($_POST['chambre_lumen'] != getStateSensor($_SESSION['email'],$room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere",$_POST['chambre_smoke']);
               }

               else if($_POST['chambre_temperature'] != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", $_POST['chambre_temperature']);
               }
           }

           else if($_POST['room'] == "Cuisine"){
               $room = 'Cuisine';

               if($_POST['cuisine_smoke'] != getStateSensor($_SESSION['email'], $room, "fumee")){
                    changeStateSensor($_SESSION['email'], $room, "fumee", $_POST['cuisine_smoke']);
               }

               else if ($_POST['cuisine_lumen'] != getStateSensor($_SESSION['email'], $room, "lumiere")){
                    changeStateSensor($_SESSION['email'], $room, "lumiere", $_POST['cuisine_lumen']);
               }

               else if($_POST['cuisine_temperature'] != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", $_POST['cuisine_temperature']);
               }

               else if ($_POST['cuisine_humidity'] != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite",$_POST['cuisine_humidity']);
               }
           }

           else if($_POST['room'] == "Salle de bain"){
               $room = 'Salle de bain';

               if ($_POST['sdb_lumen'] != getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere", $_POST['sdb_lumen']);
               }

               else if ($_POST['sdb_temperature'] != getStateSensor($_SESSION['email'], $room, "temperature")) {
                   changeStateSensor($_SESSION['email'], $room, "temperature", $_POST['sdb_temperature']);
               }

               else if ($_POST['sdb_humidity'] != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", $_POST['sdb_humidity']);
               }
           }

           else if($_POST['room'] == "Salon"){
               $room = 'Salon';
               if($_POST['salon_fumee'] != getStateSensor($_SESSION['email'], $room, "fumee")){
                   changeStateSensor($_SESSION['email'], $room, "fumee", $_POST['salon_fumee']);
               }
               else if ($_POST['salon_lumen'] != getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere",$_POST['salon_lumen']);
               }
               else if ($_POST['salon_temperature'] != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room,"temperature", $_POST['salon_temperature']);
               }
               else if ($_POST['salon_humidity'] != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", $_POST['salon_humidity']);
               }
               else if ($_POST['salon_security'] != getStateSensor($_SESSION['email'], $room, "mouvement")){
                   changeStateSensor($_SESSION['email'], $room, "mouvement", $_POST['salon_security']);
               }

           }

           else if($_POST['room'] == ""){
               $room  = 'Chambres';
           }
       }
    }

}