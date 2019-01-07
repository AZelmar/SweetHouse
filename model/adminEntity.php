<?php 

function getAdminData($email)

{
  require("config.php");
  $request = $pdo->prepare('SELECT * FROM user WHERE email= ? ');
  $request->execute(array($email));
  $result = $request->fetch();
  return $result;
  
}

function changeAdmin($email)

{
  require("config.php");
  $req= 'UPDATE user SET phone = :phone , email = :email
                WHERE email = "'.$email.'"';
  $reqp= $pdo->prepare($req);
  $reqp ->execute(array('phone'=>$_POST['phoneNumber'],'email'=>$_POST['mail']));

}

function getNewHouses()
{
	require("config.php");
	$req= 'SELECT  COUNT(*) FROM `user` WHERE user.registerDate >= NOW() - INTERVAL 5 DAY' ;
	$reqp= $pdo->prepare($req);
	$reqp->execute();
	$resultatMaison = $reqp->fetchColumn();
	return $resultatMaison;

}

function getNewSensors()
{
	require("config.php");
	$req= 'SELECT (SUM(lumiere) + SUM(temperature) + SUM(humidite)+ SUM(fumee) + SUM(mouvement) +SUM(debit)) as Total FROM userShop' ;
	$reqp= $pdo->prepare($req);
	$reqp->execute();
	$achatsCapteurs = $reqp->fetchColumn();
	return $achatsCapteurs;


}
?>