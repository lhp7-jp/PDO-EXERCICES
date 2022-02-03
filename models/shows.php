<?php

class Shows{
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
 * Méthode permettant de récupérer tous les spectacles
 * 
 * @ return array : tableau associatif
 */
public function allShows () : array
{
$dbMy = $this->connectDb();
$mySql = "select id, title, performer, date_format(`date`,'%d/%m/%Y') as date, showTypesId, firstGenresId, secondGenreId, duration, startTime from `Shows` order by title ";
$resultQuery = $dbMy->query($mySql);
return $resultQuery->fetchAll();

}
}
?>