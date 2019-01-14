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
  $result1 = $request->fetch();
  return $result1;
  
}

?>