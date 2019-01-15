<?php

function getTechnicianData($email)

{
  require("config.php");
  $request = $pdo->prepare('SELECT * FROM user WHERE email= ? ');
  $request->execute(array($email));
  $result = $request->fetch();
  return $result;
  
}

function getTechnicianRDV($id)

{
  require("config.php");
  $request = $pdo->prepare('SELECT * FROM technicianRDV WHERE technicianId= ? ');
  $request->execute(array($id));
  $result1 = $request->fetchAll();
  return $result1;
  
}

function createRDV($id,$day,$hour,$reason,$userId){
    require("config.php");
    $req= 'INSERT INTO `technicianRDV`(`technicianId`, `day`, `hour`, `reason`, `userId`) VALUES ("'.$id.'","'.$day.'","'.$hour.'","'.$reason.'","'.$userId.'")';
    $reqp= $pdo->prepare($req);
    $reqp ->execute(array());

function getTechnicianById()
{
    require("config.php");
    $request = $pdo->prepare('SELECT * FROM user LEFT JOIN technicianRDV ON technicianRDV.technicianId = user.userId WHERE user.userId = ?');
    $request->execute(array($_POST['userId']));
    $result = $request->fetch();
    return $result;
}
?>