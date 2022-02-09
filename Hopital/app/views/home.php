<?php
// echo basename(__DIR__);
require_once '../controllers/ControllerHome.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../public/css/style.css" rel="stylesheet" />
  <title>HOPITAL La Manu</title>
</head>

<body>
  <div>
    <img src="../../public/img/logo_la_manu_formation_400.png" class="imgLamanu" alt="logo La Manu">
    <h1>HOPITAL La Manu </h1>
    <h2>Gestion des patients</h2>
  </div>
  <div>
    <button onclick="window.location.href = 'addPatient.php?results=addPatient';">Ajoutez un nouveau patient</button>
    <h3></h3>
    <button onclick="window.location.href = 'viewAllPatients.php?results=viewAllPatients';">Liste de tous les patients</button>
    <h3></h3>
    <br>
    <h2>Gestion des rendez-vous</h2>
    <button onclick="window.location.href = 'addAppointments.php?results=addAppointments';">Enregistrer un nouveau rendez-vous</button>
    <h3></h3>
    <button onclick="window.location.href = 'viewAllAppointments.php?results=viewAllAppointments';">Liste des rendez-vous</button>
    <h3></h3>
  </div>
  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>