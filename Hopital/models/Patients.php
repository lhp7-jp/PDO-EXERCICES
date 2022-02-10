<?php
class Patients extends DataBase {
/**
 * Méthode permettant de rajouter un patient;
 * 
 * @ return array : tableau associatif
 */
public function addPatient (string $lastName,string $firstName, string $BirthDate, string $Phone,string $Mail) : void
{
$dbMy = $this->connectDb();
$mySql = "INSERT INTO `patients` (`lastname`, `firstname`, `birthdate` , `phone`, mail) 
VALUES (:lastName,:firstName,:BirthDate,:Phone,:Mail)";
$resultQuery = $dbMy->prepare($mySql);
$resultQuery->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$resultQuery->bindValue(':firstName',$firstName, PDO::PARAM_STR);
$resultQuery->bindValue(':BirthDate',$BirthDate, PDO::PARAM_STR);
$resultQuery->bindValue(':Phone', $Phone, PDO::PARAM_STR);
$resultQuery->bindValue(':Mail', $Mail,PDO::PARAM_STR);
$resultQuery->execute();
}
/**
 * Méthode permettant de lister les patients;
 * 
 * @ return array : tableau associatif
 */
public function viewAllPatients() : array
{
$dbMy = $this->connectDb();
$mySql = "SELECT `id`, `lastname`, `firstname`, date_format(`birthdate`,'%d/%m/%Y') as birthdate, `phone`, `mail` FROM `patients` ORDER BY `id`";
$resultQuery = $dbMy->query($mySql);
return $resultQuery->fetchAll();
}
/**
 * Méthode permettant de lister un patient;
 * 
 * @ return array : tableau associatif
 */
public function viewOnePatients(int $id) : array
{
$dbMy = $this->connectDb();
$mySql = "SELECT `id`,`lastname`, `firstname`, date_format(`birthdate`,'%d/%m/%Y') as birthdate , `phone`, `mail` FROM `patients` WHERE `id`= :id";
$resultQuery = $dbMy->prepare($mySql);
$resultQuery->bindValue(':id', $id, PDO::PARAM_INT);
$resultQuery->execute();
return $resultQuery->fetch();
}
// this = réfere a l'objet actuel
    public function modifyPatient($id, $lastname, $firstname, $mail, $phone, $birthdate)
    {
        $base = $this->connectDb();
        $sql = "UPDATE `patients` SET lastname=:lastname, firstname=:firstname, birthdate=:birthdate
        , phone=:phone, mail=:mail WHERE id=:id ;";
        $resultQuery = $base->prepare($sql);
        $resultQuery->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $resultQuery->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $resultQuery->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $resultQuery->bindValue(':phone', $phone, PDO::PARAM_STR);
        $resultQuery->bindValue(':mail', $mail, PDO::PARAM_STR);
        $resultQuery->bindValue(':id', $id, PDO::PARAM_STR);
        $resultQuery->execute();
    }
/**
 * Méthode permettant de verifier si adresse mail non utilisé
 * 
 * @ return array : tableau associatif
 */
public function checkFreeMail(string $Mail): bool
{
    $dbMy = $this->connectDb();
    $mySql =  "SELECT `mail` FROM `patients` where `mail` = ':mail'";
    $resultQuery = $dbMy->prepare($mySql);
    $resultQuery->bindValue(':mail', $Mail,PDO::PARAM_STR);
    $resultQuery->execute();
    $result=$resultQuery->fetchAll();
    if (count($result) == 0) {
        return true;
    } else {
        return false;
    }
    }
  }
?>