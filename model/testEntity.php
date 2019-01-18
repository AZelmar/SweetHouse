<?php
function testRdv()
{
    require("config.php");
    for($i = 0;$i < $_GET['number'];$i++)
    {
        $req= 'INSERT INTO `technicianRDV`(`technicianId`, `day`, `hour`, `reason`, `userId`) VALUES ("13","23","8","test","666")';
        $reqp= $pdo->prepare($req);
        $reqp ->execute(array());
    }
}
function resetRdv()
{
    require("config.php");
    $req= 'DELETE FROM technicianRDV WHERE userId = 666';
    $reqp= $pdo->prepare($req);
    $reqp ->execute();
}
?>