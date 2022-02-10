<?php
require_once '../../models/config.php';
require_once '../../models/DataBase.php';
require_once '../../models/Patients.php';
$gestionPatient = new Patients();
$gestionArray = $gestionPatient->viewAllPatients();
