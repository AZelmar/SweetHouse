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
}
function getTechnicianById()
{
    require("config.php");
    $request = $pdo->prepare('SELECT * FROM user LEFT JOIN technicianRDV ON technicianRDV.technicianId = user.userId WHERE user.userId = ?');
    $request->execute(array($_POST['userId']));
    $result = $request->fetch();
    return $result;
}

function changeTechnician($email)

{
  require("config.php");
  $req= 'UPDATE user SET phone = :phone , email = :email
                WHERE email = "'.$email.'"';
  $reqp= $pdo->prepare($req);
  $reqp ->execute(array('phone'=>$_POST['phoneNumber'],'email'=>$_POST['mail']));

}

function changeTechnicianPassword($email)
{
$hash1 = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
  require("config.php");
  $req= 'UPDATE user SET password = :password
                WHERE email = "'.$email.'"';
  $reqp= $pdo->prepare($req);
  $reqp ->execute(array("password" => $hash1 ));

}

function findTechnicianHouses()
{
  require("config.php");
  $request = $pdo->prepare('SELECT COUNT(DISTINCT userId) FROM user_room WHERE userId <= 12');
  $request->execute(array());
  $result1 = $request->fetchColumn();
  return $result1;
}
?>