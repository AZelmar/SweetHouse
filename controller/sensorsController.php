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

       var_dump($_POST['#tab1']);

        if($'#tab1' = $_GET['chambres']){
          echo "ceci est ma variable javascript dans du code PHP : ".$chambres;
       }
       else{
          echo 'didier';
       