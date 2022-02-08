<?php
require_once "../controllers/ControllerViewPatient.php";
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
  <h1>HOPITAL La Manu</h1>
  <h2>Tous les Patients enregistrés</h2>
  <table align="center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">lastname</th>
        <th scope="col">firstname</th>
        <th scope="col">Birthdate</th>
        <th scope="col">phone</th>
        <th scope="col">mail</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($patientsArray as $patients) { ?>
        <tr>
          <th scope="row"><?= $patients['id'] ?></th>
          <td><?= $patients['lastname'] ?></td>
          <td><?= $patients['firstname'] ?></td>
          <td><?= $patients['birthdate'] ?></td>
          <td><?= $patients['phone'] ?></td>
          <td><?= $patients['mail'] ?></td>
          <td></td>
          <td></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <p></p>
  <button onclick="window.location.href = 'home.php';">Retour</button>
  <p></p>
  <img src="../../public/img/logo_la_manu_formation_400.png" class="imgLamanu" alt="logo La Manu">
  <p></p>
  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>