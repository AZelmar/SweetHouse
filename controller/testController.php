<?php
require("./model/testEntity.php");
function testChargeRdv(){
    if(isset($_GET['number']))
    {
        testRdv();
    }
}
function resetChargeRdv(){
   resetRdv();
}
?> 