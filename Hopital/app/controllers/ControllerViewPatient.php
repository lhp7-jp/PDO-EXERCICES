<?php
require_once '../../models/Config.php';
require_once '../../models/DataBase.php';
require_once '../../models/Patients.php';

    $patientsObj = new Patients();
    $patientsArray = $patientsObj->viewAllPatients();
    
?>