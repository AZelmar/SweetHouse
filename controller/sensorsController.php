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
                   calculateTimeSensors($_SESSION['email'],$room, "fumee");
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['chambre_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                
               }

                if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                    calculateTimeSensors($_SESSION['email'], $room, "lumiere");
                    changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                    $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
                    
                }


               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   calculateTimeSensors($_SESSION['email'], $room, "temperature");
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");
                   
               }
           }

           else if($_POST['room'] == "Cuisine"){
               $room = 'cuisine';

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
               }
           }
           else if($_POST['room'] == "Salon"){
               $room = 'salon';
               if((isset($_POST['salon_smoke']) == true || (isset($_POST['salon_smoke']) == false)) && getValueOfSensor(isset($_POST['salon_smoke']))!= getStateSensor($_SESSION['email'], $room, "fumee")){
                   changeStateSensor($_SESSION['email'], $room, "fumee", getValueOfSensor(isset($_POST['salon_smoke'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

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

               if (isset($_POST['chambre_lumen']) == true || (isset($_POST['chambre_lumen']) == false) != null && getValueOfSensor(isset($_POST['chambre_lumen'])) != getStateSensor($_SESSION['email'], $room, "lumiere")) {
                   changeStateSensor($_SESSION['email'], $room, "lumiere", getValueOfSensor(isset($_POST['chambre_lumen'])));
                   $notification = array("type" => "success", "message" => "Votre changement a bien été envoyé ! Merci ! ");
               }


               if((isset($_POST['chambre_temperature']) == true || (isset($_POST['chambre_temperature']) == false)) != null && getValueOfSensor(isset($_POST['chambre_temperature'])) != getStateSensor($_SESSION['email'], $room, "temperature")){
                   changeStateSensor($_SESSION['email'], $room, "temperature", getValueOfSensor(isset($_POST['chambre_temperature'])));
                   $notification = array("type" => "success","message" => "Votre changement a bien été envoyé ! Merci ! ");

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
function createTrame($sensorType,$sensorValue){
  $TrameEnvoi = array_fill(0,18,'0');
  $TrameEnvoi[0] = '1';  // le champ TRA. choisir toujours "Trame courante = 1"
                          // le champ OBJ (4 octets) = numero de groupe. ex 007A 007B ...
  $TrameEnvoi[1] = '0';  // mettre le chiffre du numero de groupe (0)
  $TrameEnvoi[2] = '0';  // mettre le chiffre du numero de groupe (0)
  $TrameEnvoi[3] = '4';  // mettre le chiffre du numero de groupe (7)
  $TrameEnvoi[4] = 'A';  // mettre la lettre  du numero de groupe (A, B, ... E)
  $TrameEnvoi[5] = '2';  // champ REQ. 1= Requete en ecriture
  $TrameEnvoi[6] = $sensorType;     // champ TYP. remplir dans la boucle (voir Doc)
  $TrameEnvoi[7] = '0';  // champ NUM (2 octets). Numero du capteur
  $TrameEnvoi[8] = '1';  // On choisit par exemple le numero 01.
  $TrameEnvoi[ 9] = '0';      // Champ VAL (4 octets) = valeur à envoyer au site web
  $TrameEnvoi[10] = '0';      // par exemple la valeur du capteur de lumiere
  $TrameEnvoi[11] = '0';
  $TrameEnvoi[12] = $sensorValue;
  $TrameEnvoi[13] = 'B'; // Champ TIM (4 octets) = heure d'envoi de la trame
  $TrameEnvoi[14] = 'A'; // Ce champ n'est pas utilisé par la passerelle; donc
  $TrameEnvoi[15] = 'B'; // on peut mettre la valeur qu'on veut
  $TrameEnvoi[16] = 'A';
  $TrameEnvoi[17] = '0';      // premier  chiffre (poid fort)   du checksum
  $TrameEnvoi[18] = '0';      // deuxieme chiffre (poid faible) du checksum
  return $trame;
}
function sendLogs($trame){
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=004A&TRAME=".$trame);
    curl_setopt($ch, CURLOPT_HEADER, FALSE); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    $data = curl_exec($ch);
    curl_close($ch);  
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
      	}
   }
   echo json_encode($data_tab[$id]);
}
?>
