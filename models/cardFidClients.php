<?php

class cardFidClient {
    private  string $_dbName = 'colyseum';
    private  string $_user = 'jpadoux';
    private  string $_password = 'adouxjp';

public function connectDb(){
try {
    $myDb = new PDO ("mysql:host=localhost;dbname=" . $this->_dbName . ";charset=utf8",
     $this->_user, $this ->_password);
     return $myDb;
} catch (Exception $errorMsg) {
    die('Erreur : ' . $errorMsg->getMessage());
}
}

/**
 * Méthode permettant de récupérer tous les clients ayant une carte de fidélité
 * 
 * @ return array : tableau associatif
 */
public function cardFidClients() : array
{
$dbMy = $this->connectDb();
$mySql = "SELECT * FROM colyseum.clients where cardNumber in (SELECT cardNumber FROM colyseum.cards
inner join cardtypes on cards.cardTypesId=cardtypes.id where type='Fidélité');";
$resultQuery = $dbMy->query($mySql);
return $resultQuery->fetchAll();
}
}
?>