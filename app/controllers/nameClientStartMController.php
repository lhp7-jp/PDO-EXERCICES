<?php
// echo basename(__DIR__);
require_once '../../models/nameClientStartM.php';
if (isset($_GET['results'])){
    $clientsObj = new nameClientsStartM();
    $nameClientStartMArray = $clientsObj->nameClientStartM();
}
//var_dump($nameClientStartMArray);
?>