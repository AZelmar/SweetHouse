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
 

function addSensorBDD($email){

    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    for ($i = 1 ; $i < 5 ; $i++) {
       $request1 = $pdo->prepare('INSERT INTO user_room (id_user_room, userId, id_room) VALUES (NULL, ?, ?); ');
       $request1->execute(array($userId[0], $i));

        $request2 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
        $request2->execute(array ($userId[0], $i));
        $id_user_room = $request2->fetch();

        $a = 0;
        $b = 1;

        for ($j = 1 ; $j < 7; $j++){
            $request3 = $pdo->prepare('INSERT INTO user_sensor (id_user_room,id_sensor,state,functional) VALUES (?,?,?,?)');
            $request3->execute(array($id_user_room[0], $j, $a, $b));
        }

    }





}

function addTimeSensor($email, $room, $sensortype, $timediff){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    $request1->execute(array($userId[0], $room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3->execute(array($sensortype));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('UPDATE user_sensor SET use_time = ? WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($timediff[0],$id_user_room[0], $sensor[0]));
}

function updateTimeStart($email, $room, $sensortype){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    $request1->execute(array($userId[0], $room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3->execute(array($sensortype));
    $id_sensor = $request3->fetch();

    $request4 = $pdo->prepare('UPDATE user_sensor SET start_time = NOW() WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($id_user_room[0], $id_sensor[0]));
}

function updateTimeEnd($email, $room, $sensortype){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    $request1->execute(array($userId[0], $room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3->execute(array($sensortype));
    $id_sensor = $request3->fetch();

    $request4 = $pdo->prepare('UPDATE user_sensor SET end_time = NOW() WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($id_user_room[0], $id_sensor[0]));

}

function getTimeStart($email, $room, $sensortype){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    $request1->execute(array($userId[0], $room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3->execute(array($sensortype));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('SELECT start_time FROM user_sensor WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($id_user_room[0], $sensor[0]));
    $start_time = $request4->fetch();
    return $start_time[0];
}

function getTimeEnd($email, $room, $sensortype){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    $request1->execute(array($userId[0], $room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3->execute(array($sensortype));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('SELECT end_time FROM user_sensor WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($id_user_room[0], $sensor[0]));
    $end_time = $request4->fetch();
    return $end_time[0];
}

function getTimeUse($email, $room, $sensortype){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = ?');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = ? AND id_room = ?');
    $request1->execute(array($userId[0], $room[0]));
    $id_user_room = $request1->fetch();

    $request3 = $pdo->prepare('SELECT id_sensor FROM sensor WHERE sensor_name = ?');
    $request3->execute(array($sensortype));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('SELECT use_time FROM user_sensor WHERE id_user_room = ? AND id_sensor = ?');
    $request4 -> execute(array($id_user_room[0], $sensor[0]));
    $use_time = $request4->fetch();
    return $use_time[0];
}

?>

