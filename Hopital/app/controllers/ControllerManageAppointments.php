<?php
require_once '../../models/config.php';
require_once '../../models/DataBase.php';
require_once '../../models/Patients.php';
require_once '../../models/Appointments.php';
$gestionAppointments = new Patients();
$gestionArray = $gestionAppointments->manageAppointments();
