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
  <div>
    <img src="../../public/img/logo_la_manu_formation_400.png" class="imgLamanu" alt="logo La Manu">
    <h1>HOPITAL La Manu </h1>
    <h2>Tous les rendez-vous enregistrés</h2>
  </div>
  <table>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">lastname</th>
        <th scope="col">firstname</th>
        <th scope="col">Birthdate</th>
        <th scope="col">phone</th>
        <th scope="col">mail</th>
        <th scope="col">Informations</th>
        <th scope="col">Suppression</th>
      </tr>
    </thead>
    <tbody>
    <form action = "infoPatient.php" method = "post">
      <?php foreach ($patientsArray as $patients) { ?>
        <tr>
          <th scope="row"><?= $patients['id'] ?></th>
          <td><?= $patients['lastname'] ?> </td>
          <td><?= $patients['firstname'] ?></td>
          <td><?= $patients['birthdate'] ?></td>
          <td><?= $patients['phone'] ?></td>
          <td><?= $patients['mail'] ?></td>
          <td>
            <input type="hidden" name="idPatientView" value="<?= $patients['id'] ?>">
            <button class="myButton">Plus d'Informations</button>
          </td>
          <td>
          <input type="hidden" name="idPatientDelete" value="<?= $patients['id'] ?>">
            <button class="myButton">suppression</button>
          </td>
        </tr>
      <?php } ?>
      </form>
    </tbody>
  </table>
  <p></p>
  <button onclick="window.location.href = 'home.php';">Retour</button>
  <p></p>
  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>