<?php
/**
 * Created by PhpStorm.
 * User: AymericLepine
 * Date: 11/01/2019
 * Time: 13:29
 */
require ('./model/sensorsEntity.php');

<<<<<<< HEAD
<<<<<<< HEAD
    
=======

>>>>>>> parent of 447fa08... Merge branch 'master' of https://github.com/AZelmar/SweetHouse
=======
>>>>>>> parent of 49f5121... lol
function gestion_capteurs($locale){

    if(isConnected($locale)) {
        require ('./views/frontEnd/GestionCapteurs.php');
<<<<<<< HEAD

<<<<<<< HEAD
=======
                    if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                        calculateTimeSensors($_SESSION['email'], $room, "lumiere");
                        changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                        $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
>>>>>>> parent of 447fa08... Merge branch 'master' of https://github.com/AZelmar/SweetHouse

        if (!empty($_POST['submit'])){
           if($_POST['room'] == "Chambre"){
               $room = 'chambres';

<<<<<<< HEAD
               if((isset($_POST['chambre_smoke']) == true || (isset($_POST['chambre_smoke']) == false))  && getValueOfSensor(isset($_POST['chambre_smoke'])) != getStateSensor($_SESSION['email'], $room, "fumee" )){
                  
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['chambre_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                
               }

                if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                    
=======


        if (!empty($_POST['submit'])){
           if($_POST['room'] == "Chambre"){
               $room = 'chambres';

               if((isset($_POST['chambre_smoke']) == true || (isset($_POST['chambre_smoke']) == false))  && getValueOfSensor(isset($_POST['chambre_smoke'])) != getStateSensor($_SESSION['email'], $room, "fumee" )){
                   calculateTimeSensors($_SESSION['email'],$room, "fumee");
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['chambre_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                
               }

                if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                    calculateTimeSensors($_SESSION['email'], $room, "lumiere");
>>>>>>> parent of 49f5121... lol
                    changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                    $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
                    
                }
<<<<<<< HEAD
=======
>>>>>>> parent of 447fa08... Merge branch 'master' of https://github.com/AZelmar/SweetHouse


<<<<<<< HEAD
               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                  
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   
=======
                   }
>>>>>>> parent of 447fa08... Merge branch 'master' of https://github.com/AZelmar/SweetHouse
               }
           }

<<<<<<< HEAD
           
=======
               else if($_POST['room'] == "Cuisine"){
                   $room = 'cuisine';
=======


               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   calculateTimeSensors($_SESSION['email'], $room, "temperature");
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   
               }
           }

           else if($_POST['room'] == "Cuisine"){
               $room = 'cuisine';
>>>>>>> parent of 49f5121... lol

               if(isset($_POST['cuisine_smoke']) == true || (isset($_POST['cuisine_smoke']) == false)  && getValueOfSensor(isset($_POST['cuisine_smoke'])) != getStateSensor($_SESSION['email'], $room, "fumee")){
                    changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['cuisine_smoke'])));
                    $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }

               if ((isset($_POST['cuisine_lumen']) == true || (isset($_POST['cuisine_lumen']) == false))  && getValueOfSensor(isset($_POST['cuisine_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                    changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['cuisine_lumen'])));
                    $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }

               if(isset($_POST['chambre_smoke']) == true || (isset($_POST['chambre_smoke']) == false) && getValueOfSensor(isset($_POST['cuisine_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['cuisine_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

               if (isset($_POST['cuisine_humidity']) == true || (isset($_POST['cuisine_humidity']) == false)  && getValueOfSensor(isset($_POST['cuisine_humidity'])) != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor(isset($_POST['cuisine_humidity'])));                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
           }

<<<<<<< HEAD
               else if($_POST['room'] == "Salle de bain"){
                   $room = 'salle_de_bain';
>>>>>>> parent of 447fa08... Merge branch 'master' of https://github.com/AZelmar/SweetHouse

           else if($_POST['room'] == "Salle de bain"){
               $room = 'salle_de_bain';

               if ((isset($_POST['sdb_lumen']) == true || (isset($_POST['sdb_lumen']) == false))  && getValueOfSensor(isset($_POST['sdb_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['sdb_lumen'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

<<<<<<< HEAD
               }
=======
                   if ((isset($_POST['sdb_humidity']) == true || (isset($_POST['sdb_humidity']) == false)) && getValueOfSensor(isset($_POST['sdb_humidity']))!= getStateSensor($_SESSION['email'], $room, "humidite")){
                       changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor(isset($_POST['sdb_humidity'])));
                       $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
>>>>>>> parent of 447fa08... Merge branch 'master' of https://github.com/AZelmar/SweetHouse

               if ((isset($_POST['sdb_temperature']) == true || (isset($_POST['sdb_temperature']) == false)) && getValueOfSensor(isset($_POST['sdb_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")) {
                   changeStateSensor($_SESSION['email'], $room, "temperature",getValueOfSensor(isset($_POST['sdb_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
=======
           else if($_POST['room'] == "Salle de bain"){
               $room = 'salle_de_bain';

               if ((isset($_POST['sdb_lumen']) == true || (isset($_POST['sdb_lumen']) == false))  && getValueOfSensor(isset($_POST['sdb_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['sdb_lumen'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }

               if ((isset($_POST['sdb_temperature']) == true || (isset($_POST['sdb_temperature']) == false)) && getValueOfSensor(isset($_POST['sdb_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")) {
                   changeStateSensor($_SESSION['email'], $room, "temperature",getValueOfSensor(isset($_POST['sdb_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

               if ((isset($_POST['sdb_humidity']) == true || (isset($_POST['sdb_humidity']) == false)) && getValueOfSensor(isset($_POST['sdb_humidity']))!= getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor(isset($_POST['sdb_humidity'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

>>>>>>> parent of 49f5121... lol
               }
           }

<<<<<<< HEAD
<<<<<<< HEAD
               if ((isset($_POST['sdb_humidity']) == true || (isset($_POST['sdb_humidity']) == false)) && getValueOfSensor(isset($_POST['sdb_humidity']))!= getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor(isset($_POST['sdb_humidity'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }
           }
=======
>>>>>>> parent of 49f5121... lol
           else if($_POST['room'] == "Salon"){
               $room = 'salon';
               if((isset($_POST['salon_smoke']) == true || (isset($_POST['salon_smoke']) == false)) && getValueOfSensor(isset($_POST['salon_smoke']))!= getStateSensor($_SESSION['email'], $room, "fumee")){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['salon_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
<<<<<<< HEAD
=======
               else if($_POST['room'] == "Salon"){
                   $room = 'salon';
                   if((isset($_POST['salon_smoke']) == true || (isset($_POST['salon_smoke']) == false)) && getValueOfSensor(isset($_POST['salon_smoke']))!= getStateSensor($_SESSION['email'], $room, "fumee")){
                       changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['salon_smoke'])));
                       $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
>>>>>>> parent of 447fa08... Merge branch 'master' of https://github.com/AZelmar/SweetHouse
=======
>>>>>>> parent of 49f5121... lol

               }
               if ((isset($_POST['salon_lumen']) == true || (isset($_POST['salon_lumen']) == false)) && getValueOfSensor(isset($_POST['salon_lumen']))!= getStateSensor($_SESSION['email'], $room, "lumiere")){
                   changeStateSensor($_SESSION['email'], $room, "lumiere",getValueOfSensor(isset($_POST['salon_lumen'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
               if ((isset($_POST['salon_temperature']) == true || (isset($_POST['salon_temperature']) == false))  && getValueOfSensor(isset($_POST['salon_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room,"temperature", getValueOfSensor(isset($_POST['salon_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
               if ((isset($_POST['salon_humidity']) == true || (isset($_POST['salon_humidity']) == false))  && getValueOfSensor(isset($_POST['salon_humidity'])) != getStateSensor($_SESSION['email'], $room, "humidite")){
                   changeStateSensor($_SESSION['email'], $room, "humidite", getValueOfSensor($_POST['salon_humidity']));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

               }
               if (isset($_POST['salon_humidity']) == true || (isset($_POST['salon_humidity']) == false) && getValueOfSensor(isset($_POST['salon_security'])) != getStateSensor($_SESSION['email'], $room, "mouvement")){
                   changeStateSensor($_SESSION['email'], $room, "mouvement", getValueOfSensor(isset($_POST['salon_security'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

           } 

           else if(($_POST['room']) == null){
               $room  = 'chambres';

               if((isset($_POST['chambre_smoke']) == true || (isset($_POST['chambre_smoke']) == false))  && getValueOfSensor(isset($_POST['chambre_smoke'])) != getStateSensor($_SESSION['email'], $room, "fumee" )){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['chambre_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
               }
<<<<<<< HEAD
=======

               if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                   $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
               }
>>>>>>> parent of 49f5121... lol

               if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                   $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
               }

<<<<<<< HEAD

               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

=======
               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

>>>>>>> parent of 49f5121... lol
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


function calculateTimeSensors($email, $room, $sensortype){

    if (getStateSensor($email, $room, $sensortype) == '1'){
        updateTimeStart($email, $room, $sensortype);
    }

    if (getStateSensor($email, $room, $sensortype) == '0'){
        updateTimeEnd($email, $room, $sensortype);
    }
        $timeuse = getTimeUse($_SESSION['email'], $room, $sensortype);
        $timediff1 = abs (getTimeStart($_SESSION['email'], $room, $sensortype) - getTimeEnd($_SESSION['email'], $room, $sensortype));
        $seconds = $timediff1 + 5 + strtotime($timeuse);
        $timediff = gmdate("H:i:s",$seconds);
        addTimeSensor($_SESSION['email'], $room, $sensortype, $timediff);

}

function getValueOfSensor($sensorValue){

    if($sensorValue == 'on'){
         return '1';
     }

    else{
         return '0';
     }
}

function getLogs(){
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=004A");
	curl_setopt($ch, CURLOPT_HEADER, FALSE); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
	$data = curl_exec($ch);
	curl_close($ch);
	$data_tab = str_split($data,33);
	return $data_tab;
}
function getSensorLog()
{
	$sensorRef = $_POST['sensorRef'];
	$data_tab = getLogs();
	foreach($data_tab as $key => $trame)
   {
		list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
      	if ($c == $sensorRef){
         	$id = $key;
         	break;
      	}
   }
   echo json_encode($data_tab[$id]);
}
?>
