<?php
function registerUser()
{
    require("config.php");
    $role = 0;
    $active = 0;
    $date = date('Y/m/d H:i:s', time());
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $request = $pdo->prepare("INSERT INTO user (role,active,registerDate,lastName, firstName,age, password,gender,type,email,phone,adress,zipCode,city,country) VALUES (:role,:active,:registerDate,:lastName, :firstName,:age,:password,:gender,:type,:email,:phone,:adress,:zipCode,:city,:country)");
    $request->execute(array("role" => $role,"active" => $active,"registerDate" => $date,"lastName" => $_POST['lastName'], "firstName" => $_POST['firstName'],"age" => $_POST['age'],"password" => $hash,"gender" => $_POST['gender'],"type" => $_POST['type'], "email" => $_POST['email'],"phone" => $_POST['phone'],"adress" => $_POST['adress'],"zipCode" => $_POST['zipCode'],"city" => $_POST['city'],"country" => $_POST['country']));  
    return $request->errorInfo()[2];
}
function getUser()
{
    require("config.php");
    $request = $pdo->prepare('SELECT * FROM user WHERE email = ?');
    $request->execute(array($_POST['email']));
    $result = $request->fetch();
    return $result;
}
function getUserById()
{
    require("config.php");
    $request = $pdo->prepare('SELECT * FROM user WHERE userId = ?');
    $request->execute(array($_POST['userId']));
    $result = $request->fetch();
    return $result;
}
function addLoginCookie($expirationDate,$userId,$userEmail,$ip)
{
    require("config.php");
    $request = $pdo->prepare("INSERT INTO cookieLogin (expirationDate,userId,userEmail,ip) VALUES (:expirationDate,:userId,:userEmail,:ip)");
    $request->execute(array("expirationDate" => $expirationDate,"userId" => $userId,"userEmail" => $userEmail,"ip" => $ip));  
    return $request->errorInfo()[2];
}
function removeLoginCookie($userEmail)
{
    require("config.php");
    $request = $pdo->prepare('DELETE FROM cookieLogin WHERE userEmail = ?');
    $request->execute(array($userEmail));
    return $request->errorInfo()[2];
}
function checkLoginCookie($userEmail)
{
    require("config.php");
    $request = $pdo->prepare("SELECT * FROM cookieLogin INNER JOIN user ON user.userId = cookieLogin.userId WHERE cookieLogin.userEmail = :userEmail");
    $request->execute(array("userEmail" => $userEmail));  
    $result = $request->fetchAll();
    return $result;
}
function addResetRequest($token)
{
    require("config.php");
    $date = date('Y/m/d H:i:s', time());
    $request = $pdo->prepare("INSERT INTO resetRQ (requestDate,email,token) VALUES (:requestDate,:email,:token)");
    $request->execute(array("requestDate" => $date,"email" => $_POST['email'],"token" => $token));  
    return $request->errorInfo()[2];
}
function checkResetRequest()
{
    require("config.php");
    $request = $pdo->prepare('SELECT * FROM resetRQ WHERE token = ?');
    $request->execute(array($_GET['token']));
    $result = $request->fetch();
    return $result;
}
function checkResendResetRequest()
{
    require("config.php");
    $request = $pdo->prepare('SELECT * FROM resetRQ WHERE email = ?');
    $request->execute(array($_POST['emailHidden']));
    $result = $request->fetch();
    return $result;
}
function validateResetRequest()
{
    require("config.php");
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $request = $pdo->prepare('UPDATE user INNER JOIN resetRQ ON user.email = resetRQ.email SET password = :password WHERE resetRQ.token = :token');
    $request->execute(array("password" => $hash,"token" => $_GET['token']));
    $request = $pdo->prepare('DELETE FROM resetRQ WHERE token = ?');
    $request->execute(array($_GET['token']));
    return $request->errorInfo()[2];
}

function getUserData($email)

{
  require("config.php");
  $request = $pdo->prepare('SELECT * FROM user WHERE email= ? ');
  $request->execute(array($email));
  $result = $request->fetch();
  return $result;
  
}

function changeUser($email)

{
  require("config.php");
  $req= 'UPDATE user SET firstName = :firstName, lastName = :lastName, gender =:gender, adress =:adress, delaccount=:delaccount
                WHERE email = "'.$email.'"';
  $reqp= $pdo->prepare($req);
  $reqp ->execute(array('lastName'=>$_POST['last-name'],'firstName'=>$_POST['first-name'],'gender'=>$_POST['gender'], 'adress'=>$_POST['adress'], 'delaccount'=>$_POST['delaccount']));

}

function getUserShop($idShop)
{
    require("config.php");
    $request = $pdo->prepare('SELECT * FROM userShop WHERE id_userShop = "'.$idShop.'"');
    $request->execute(array());
    $result = $request->fetch();
    return $result;
}

function changeUserShop($idShop,$lumiere,$temperature,$mouvement,$fumee)
{
  require("config.php");
  $req= 'UPDATE userShop SET lumiere = lumiere + "'.$lumiere.'" , temperature = temperature + "'.$temperature.'", fumee =fumee + "'.$fumee.'", mouvement = mouvement + "'.$mouvement.'"
                WHERE id_userShop = "'.$idShop.'"';
  $reqp= $pdo->prepare($req);
  $reqp ->execute(array());

}

function createUserShop($idShop){
    require("config.php");
    $req= 'INSERT INTO `userShop`(`id_userShop`, `lumiere`, `temperature`, `humidite`, `fumee`, `mouvement`, `debit`) VALUES ("'.$idShop.'",0,0,0,0,0,0)';
    $reqp= $pdo->prepare($req);
    $reqp ->execute(array());

}
?>