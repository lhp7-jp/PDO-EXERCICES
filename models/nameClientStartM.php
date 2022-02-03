<?php

class nameClientsStartM {
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
public function nameClientStartM() : array
{
$dbMy = $this->connectDb();
$mySql = "SELECT * FROM colyseum.clients where lastName like 'M%' order by lastName";
$resultQuery = $dbMy->query($mySql);
return $resultQuery->fetchAll();
}
}
?>