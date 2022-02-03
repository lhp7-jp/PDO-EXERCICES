<?php
// echo basename(__DIR__);
require_once '../../models/Clients.php';
if (isset($_GET['results'])){
    $clientsObj = new Clients();
    $clientsArray = $clientsObj->allClients();
}
?>