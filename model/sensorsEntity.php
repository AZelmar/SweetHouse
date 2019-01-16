<?php


function changeStateSensor($email, $room, $sensor, $state){
    require "config.php";

    $request = $pdo->prepare('SELECT * FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = :room');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request3 = $pdo('SELECT id_sensor FROM sensor WHERE sensor_name = :sensor');
    $request3->execute(array($sensor));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('UPDATE user_sensor SET state = = :state WHERE id_user_room = :room AND id_sensor = :sensor');
    $request4 -> execute(array($state));

} 

?>