<?php


function changeStateSensor($email, $room, $sensor, $state){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $id_room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    $request1->execute(array($userId[0], $id_room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3 -> execute(array($sensor));
    $id_sensor = $request3->fetch();

    $request4 = $pdo->prepare('UPDATE user_sensor SET state = ? WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($state, $id_user_room[0], $id_sensor[0]));

}


function getStateSensor($email, $room, $sensortype){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $room = $request2->fetch();


    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    //$request1->bindParam('userId', $userId[0]);
    //$request1->bindParam('id_room', $room[0]);
    $request1->execute(array($userId[0], $room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3->execute(array($sensortype));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('SELECT state FROM user_sensor WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($id_user_room[0], $sensor[0]));
    $state = $request4->fetch();

    return $state[0];
} 

?>

