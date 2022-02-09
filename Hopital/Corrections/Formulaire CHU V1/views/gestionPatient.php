<?php

require_once '../controllers/gestionPatientController.php';


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <a href="https://icons8.com/icon/MS2XYm4irEPy/user"></a>

    <title>Gestion Patients</title>
</head>

<body class="">


    <h1 class="text-center mt-5 mt-4">Listes des patients</h1>

    <a href="home.php?results=home" class="mt-3 btn btn-outline-dark">Accueil</a>

    <a href="addPatient.php?results=addPatient" class="mt-3 btn btn-outline-dark">formulaire</a>

    <a href="infoPatient.php?results=infoPatient" class="mt-3 btn btn-outline-dark">Informations patients</a>


    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Informations patient</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">DeNormandie</th>
                    <td>Guillaume</td>

                    <td><a href=""></a></td>
                </tr>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>