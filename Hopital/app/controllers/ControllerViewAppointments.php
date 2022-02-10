<?php
require_once '../../models/Config.php';
require_once '../../models/DataBase.php';
require_once '../../models/Patients.php';
require_once '../../models/Appointments.php';
$appointmentsObj = new Appointments();
$appointmentsArray = $appointmentsObj->viewAllAppointments();






?>