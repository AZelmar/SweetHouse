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

function changeAdminPassword($email)
{
$hash1 = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
  require("config.php");
  $req= 'UPDATE user SET password = :password
                WHERE email = "'.$email.'"';
  $reqp= $pdo->prepare($req);
  $reqp ->execute(array("password" => $hash1 ));

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

function getNewQuestions()
{
	require("config.php");
	$req= 'SELECT  COUNT(*) FROM `formulaire` WHERE formulaire.date_commentaire >= NOW() - INTERVAL 5 DAY' ;
	$reqp= $pdo->prepare($req);
	$reqp->execute();
	$resultatQuestion = $reqp->fetchColumn();
	return $resultatQuestion;
}
function updateUser()
{
	  require("config.php");
	  $request= $pdo->prepare('UPDATE user SET active = :active, phone = :phone , email = :email WHERE userId = :id');
	  $request ->execute(array('active'=>$_POST['userActive'],'phone'=>$_POST['userPhoneNumber'],'email'=>$_POST['userMail'],'id'=>$_POST['userId']));
	  return $request->errorInfo()[2];
}
function getAllClient()
{

require("config.php");
$req = $pdo->prepare('SELECT userId,lastName FROM user WHERE role = :role');		 				      
$req->execute(array("role" => 0));
$clients=$req->fetchAll();
return $clients;

}
function getAllTechnician()
{

require("config.php");
$req = $pdo->prepare('SELECT userId,lastName FROM user WHERE role = :role');		 				      
$req->execute(array("role" => 1));
$technicians=$req->fetchAll();
return $technicians;

}
?>