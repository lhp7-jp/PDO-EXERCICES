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
  <div>
    <img src="../../public/img/logo_la_manu_formation_400.png" class="imgLamanu" alt="logo La Manu">
    <h1>HOPITAL La Manu </h1>
    <h2>Ajout de patient</h2>
    <h5>Tous les champs en jaune sont obligatoires</h5>
    <h3></h3>
  </div>
  <?php if ($addPatientOk) { ?>
    <p>Le patient a bien été enregistré</p>
    <h3></h3>
    <a href="addPatient.php" class="myHref">Ajouter un nouveau patient</a>
    <h3></h3>
  <?php } else { ?>
    <div class="container">
      <form class="myForm" method="post" action="" novalidate>
        <div>
          <label class="myLabel" for="lastName">Nom :</label>
          <input class="myInputAdd" value="<?= isset($_POST['lastName']) ? htmlspecialchars($_POST["lastName"]) : "" ?>" type="text" name="lastName" placeholder="Dupont" required />
          <span class="mySpan">
            <?= $arrayErrors["lastName"] ?? "" ?>
          </span>
        </div>
        <div>
        <label class="myLabel" for="firstName">Prénom : </label>
          <input class="myInputAdd" value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST["firstName"]) : "" ?>" type="text" name="firstName" placeholder="Patrick" required />
          <span class="mySpan">
            <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
            <?= $arrayErrors["firstName"] ?? "" ?>
          </span>
        </div>
        <div>
          <label class="myLabel" for="BirthDate">Date de naissance : </label>
          <input class="myInputAdd" value="<?= isset($_POST['BirthDate']) ? htmlspecialchars($_POST["BirthDate"]) : "" ?>" type="date" name="BirthDate" placeholder="" required pattern="^\d{1,2}/\d{1,2}/\d{4}$/u" />
          <span class="mySpan">
            <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
            <?= $arrayErrors["BirthDate"] ?? "" ?>
          </span>
        </div>
        <div>
          <label class="myLabel" for="Phone">Téléphone : </label>
          <?= $arrayErrors["Phone"] ?? "" ?>
          <input class="myInputAdd" value="<?= isset($_POST['Phone']) ? htmlspecialchars($_POST["Phone"]) : "" ?>" type="number" name="Phone" placeholder="0666666666" required pattern="/^0[6-7]([-. ]?[0-9]{2}){4}$/u" />
          <span class="mySpan">
            <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
          </span>
        </div>
        <div>
          <label class="myLabel" for="Mail">Mail : </label>
          <input class="myInputAdd" value="<?= isset($_POST['Mail']) ? htmlspecialchars($_POST["Mail"]) : "" ?>" type="email" name="Mail" placeholder="patrick.dupont@lamanu.fr" required pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/u" /></br>
            <span class="mySpan"">
            <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
            <?= $arrayErrors["Mail"] ?? "" ?>
            </span>
        </div>
        <div>
        </br>
        <p>   </p>
        <input class="myInputSave" type="submit" value="Enregistrez un nouveau patient" name="submitButton" />
        </div>
      </form>
    </div>
  <?php } ?>
  <h3></h3>
  <!-- <div class="g-recaptcha" data-sitekey="6LcoAWMeAAAAAEcKRd7ejrnwF5jFyxNF2raxYGfP"></div> -->
  <button class="myButton" onclick="window.location.href = 'home.php';">Retour</button>
  <p></p>
  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>