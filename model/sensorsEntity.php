<?php


function changeStateSensor($email, $room, $sensor, $state){
    require "config.php";

    $request = $pdo->prepare('SELECT * FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = :room');
    $request2->execute(array($room));
    $room = $request2->fetch();

<<<<<<< HEAD
    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = :userId AND id_room = :id_room');
    $request1->execute(array());
    $id_user_room = $request1->fetch();

=======
>>>>>>> 0e98b8d68bd2f45dfe78d0e1bd15cc306d079677
    $request3 = $pdo('SELECT id_sensor FROM sensor WHERE sensor_name = :sensor');
    $request3->execute(array($sensor));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('UPDATE user_sensor SET state = = :state WHERE id_user_room = :room AND id_sensor = :sensor');
    $request4 -> execute(array($state));

<<<<<<< HEAD
}


function getStateSensor($email, $room, $sensor){
    require "config.php";

    $request = $pdo->prepare('SELECT userId FROM user WHERE email= ? ');
    $request->execute(array($email));
    $userId = $request->fetch();

    $request2 = $pdo->prepare('SELECT id_room FROM room WHERE name_room = :room');
    $request2->execute(array($room));
    $room = $request2->fetch();

    $request1 = $pdo->prepare('SELECT id_user_room FROM user_room WHERE userId = :userId AND id_room = :id_room');
    $request1->execute(array());
    $id_user_room = $request1->fetch();

    $request3 = $pdo('SELECT id_sensor FROM sensor WHERE sensor_name = :sensor');
    $request3->execute(array($sensor));
    $sensor = $request3->fetch();

    $request4 = $pdo->prepare('SELECT state FROM user_sensor WHERE id_user_room = :room AND id_sensor = :sensor');
    $request4 -> execute(array());
    $state = $request4->fetch();

    return $state;
}
=======
} 

?>
>>>>>>> 0e98b8d68bd2f45dfe78d0e1bd15cc306d079677
