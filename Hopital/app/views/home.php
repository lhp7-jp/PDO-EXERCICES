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
<h2>HOPITAL La Manu</h2>
<h3></h3>
<button onclick="window.location.href = 'addPatient.php?results=addPatient';">Ajout de patient</button>
<h3></h3>
<button onclick="window.location.href = 'viewAllPatients.php?results=viewAllPatients';">Liste de tous les patients</button>
<h3></h3>
<img src="../../public/img/logo_la_manu_formation_400_version_grande.png" class="imgLamanu" alt="logo La Manu">

<!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>