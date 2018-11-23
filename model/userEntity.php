<?php
function registerUser()
{
    require("../views/backEnd/config.php");
    $role = 0;
    $active = 0;
    $date = date('Y/m/d h:i:s', time());
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $request = $pdo->prepare("INSERT INTO user (role,active,registerDate,lastName, firstName,age, password,gender,type,email,phone,adress,zipCode,city,country) VALUES (:role,:active,:registerDate,:lastName, :firstName,:age,:password,:gender,:type,:email,:phone,:adress,:zipCode,:city,:country)");
    $request->execute(array("role" => $role,"active" => $active,"registerDate" => $date,"lastName" => $_POST['lastName'], "firstName" => $_POST['firstName'],"age" => $_POST['age'],"password" => $hash,"gender" => $_POST['gender'],"type" => $_POST['type'], "email" => $_POST['email'],"phone" => $_POST['phone'],"adress" => $_POST['adress'],"zipCode" => $_POST['zipCode'],"city" => $_POST['city'],"country" => $_POST['country']));  
    return $request->errorInfo()[2];
}
function loginUser()
{
    require("../views/backEnd/config.php");
    $request = $pdo->prepare('SELECT * FROM user WHERE email = ?');
    $request->execute(array($_POST['email']));
    $result = $request->fetch();
    return $result;
}
?>