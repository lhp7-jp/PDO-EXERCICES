<?php
require "../controllers/ControllerAddPatient.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../public/css/style.css" rel="stylesheet" />
  <!-- captcha -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>HOPITAL La Manu</title>
</head>

<body>
  <h1>HOPITAL La Manu - Ajout de patient</h1>
  <h5>Tous les champs en jaune sont obligatoires</h5>
  <?php if ($addPatientOk) { ?>
    <p>Le patient a bien été enregistré</p>
    <h3></h3>
    <a href="addPatient.php" class="myHref">Ajouter un nouveau patient</a>
    <h3></h3>
  <?php } else { ?>

    <form method="post" action="" novalidate>
      <div>
        <label for="lastName">Nom </label>
        <span>
          <?= $msgErrors["lastName"] ?? "" ?>
        </span>
        <input class="myInput" value="<?= isset($_POST['lastName']) ? htmlspecialchars($_POST["lastName"]) : "" ?>" type="text" name="lastName" placeholder="Dupont" required />
      </div>
      <div>
        <label for="firstName">Prénom : </label><span>
          <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
          <?= $msgErrors["firstName"] ?? "" ?>
          <input class="myInput" value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST["firstName"]) : "" ?>" type="text" name="firstName" placeholder="Patrick" required /><br />
      </div>
      <div>
        <label for="BirthDate">Date de naissance : </label><span>
          <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
          <?= $msgErrors["BirthDate"] ?? "" ?>
          <input class="myInput" value="<?= isset($_POST['BirthDate']) ? htmlspecialchars($_POST["BirthDate"]) : "" ?>" type="date" name="BirthDate" placeholder="" required pattern="^\d{1,2}/\d{1,2}/\d{4}$/u" /><br />
      </div>
      <div>
        <label for="Phone">Téléphone : </label><span>
          <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
          <?= $msgErrors["Phone"] ?? "" ?>
          <input class="myInput" value="<?= isset($_POST['Phone']) ? htmlspecialchars($_POST["Phone"]) : "" ?>" type="number" name="Phone" placeholder="0666666666" required pattern="/^0[6-7]([-. ]?[0-9]{2}){4}$/u" /><br />
      </div>
      <div>
        <label for="Mail">Mail : </label>
        <span">
          <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
          <?= $msgErrors["Mail"] ?? "" ?>
          <input class="myInput" value="<?= isset($_POST['Mail']) ? htmlspecialchars($_POST["Mail"]) : "" ?>" type="email" name="Mail" placeholder="patrick.dupont@lamanu.fr" required pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/u" /><br />
      </div>
      <input class="myInput" type="submit" value="Nouveau Patient" name="submitButton" />
    </form>
  <?php } ?>
  <h3></h3>
  <!-- <div class="g-recaptcha" data-sitekey="6LcoAWMeAAAAAEcKRd7ejrnwF5jFyxNF2raxYGfP"></div> -->
  <h3></h3>
  <img src="../../public/img/logo_la_manu_formation_400.png" class="imgLamanu" alt="logo La Manu">
  <p></p>
  <button onclick="window.location.href = 'home.php';">Retour</button>
  <p></p>
  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>