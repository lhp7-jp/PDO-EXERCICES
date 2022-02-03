<?php

class Clients{
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
 * Méthode permettant de récupérer tous les clients
 * 
 * @ return array : tableau associatif
 */
public function allClients () : array
{
$dbMy = $this->connectDb();
$mySql = "select id, lastName, firstName, date_format(`birthDate`,'%d/%m/%Y') as birthDate, card, cardNumber from `Clients` order by lastname";
$resultQuery = $dbMy->query($mySql);
return $resultQuery->fetchAll();
}
}
?>