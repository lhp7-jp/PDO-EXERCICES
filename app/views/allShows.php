<?php
// echo basename(__DIR__);
require "../controllers/allShowsController.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/public/css/style.css" rel="stylesheet" />
  <title>PDO EXERCICES 02022022</title>
</head>

<body>
  <h1>PDO EXERCICES 02022022</h1>
  <h2>Tous les spectacles</h2>
  <table align="center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Artiste</th>
        <th scope="col">Date</th>
        <th scope="col">Durée</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($showsArray as $show) { ?>
        <tr>
          <th scope="row"><?= $show['id'] ?></th>
          <td><?= $show['title'] ?></td>
          <td><?= $show['performer'] ?></td>
          <td><?= $show['date'] ?></td>
          <td><?= $show['duration'] ?></td>
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