<?php
class Appointments extends DataBase {
/**
 * Méthode permettant de rajouter un rendez-vous;
 * 
 * @ return array : tableau associatif
 */
// public function addAppointments ($myDate, $myTime) : void
// {
// $dateHour=$myDate+$myTime;
// $dbMy = $this->connectDb();
// $mySql = "INSERT INTO `appointments` (`dateHour`) VALUES (:dateHour")";
// $resultQuery = $dbMy->prepare($mySql);
// $resultQuery->bindValue(':dateHour'),$dateHour,PDO::PARAM_STR);
// $resultQuery->execute();
// }
/**
 * Méthode permettant de récupérer tous les rendez-vous
 * 
 * @ return array : tableau associatif
 */
public function viewAllAppointments () : array
{
$dbMy = $this->connectDb();
$mySql = "SELECT dateHour, `idPatients`, `lastname`, `firstname`, date_format(`birthdate`,'%d/%m/%Y') as birthdate  FROM `appointments`
INNER JOIN patients ON patients.id = appointments.idPatients";
$resultQuery = $dbMy->query($mySql);
return $resultQuery->fetchAll();
}
}
?>