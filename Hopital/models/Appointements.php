<?php

class Appointements extends DataBase {

/**
 * Méthode permettant de récupérer tous les patients
 * 
 * @ return array : tableau associatif
 */
public function allShows () : array
{
$dbMy = $this->connectDb();
$mySql = "select id, DateHour, idPatients FROM appointments order by DateHour; ";
$resultQuery = $dbMy->query($mySql);
return $resultQuery->fetchAll();
}
}
?>