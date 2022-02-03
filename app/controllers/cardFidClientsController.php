<?php
// echo basename(__DIR__);
require_once '../../models/cardFidClients.php';
if (isset($_GET['results'])){
    $cardFidClientsObj = new cardFidClient();
    $cardFidClientsArray = $cardFidClientsObj->cardFidClients();
    //var_dump($cardFidClientsArray);
}
?>