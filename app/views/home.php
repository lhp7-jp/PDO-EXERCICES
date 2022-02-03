<?php
// echo basename(__DIR__);
require_once '../controllers/homeController.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../public/css/style.css" rel="stylesheet" />
  <title>PDO EXERCICES 02022022</title>
</head>

<body>
<h1>PDO EXERCICES 02022022</h1>
<div>
<p></p>
<button onclick="window.location.href = 'allClients.php?results=allClients';">Tous les clients</button>
<button onclick="window.location.href = 'allShows.php?results=allShows';">Tous les spectacles</button>
<button onclick="window.location.href = 'twentyClients.php?results=allClients';">Les 20 premiers clients</button>
<h2></h2>
<button onclick="window.location.href = 'cardFidClients.php?results=cardFidClients';">Les clients ayant une carte de fidélité</button>
<h2></h2>
<button onclick="window.location.href = 'nameClientStartM.php?results=nameClientStartM';">Tous les clients dont le nom commence par un M</button>
<h2></h2>
<button onclick="window.location.href = 'allShowsExo6.php?results=allClients';">Tous les spectables - Exo 6</button>
<button onclick="window.location.href = 'allClientsExo7.php?results=allClients';">Tous les clients - Exo 7</button>
<h2></h2>
<img src="../../public/img/logo_la_manu_formation_400.png" class="imgLamanu" alt="logo La Manu">
</div>



<!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>