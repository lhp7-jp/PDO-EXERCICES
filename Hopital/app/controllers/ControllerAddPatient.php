<?php
require_once '../../models/Config.php';
require_once '../../models/DataBase.php';
require_once '../../models/Patients.php';
$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,25}$/u";
// $regexBirthDate = "/^(([0-2][1-9])|(3[0-1]))-((0[1-9])|(1[0-2]))-([1]|[2])[0-9]{1}(([1-9][0-9])|([0][8-9]))$/u";
$regexPhone = "/^0[6-7]([-. ]?[0-9]{2}){4}$/u";
// Tableau vide qui va nous permettre de stocker les erreurs 
$arrayErrors = [];
// creer une variable pour cacher ou montrer ton formulaire
$addPatientOk = false;
// nous verifions si $_POST n'est pas vide 
if (!empty($_POST)) {
       // nous verifions si input nom est présent dans $_POST
    if (isset($_POST["lastName"])) {
        // a l'aide de la fonction empty je verifie que l'input nom n'est pas vide 
        if (empty($_POST["lastName"])) {
            // je crée une clef nom dans tableau d'erreur avec un message 
            $arrayErrors["lastName"] = "Veuillez indiquer votre nom";
            // je verifie a l'aide de la fonction !preg_match() si l'input ne correspond pas
        } elseif (!preg_match($regexName, $_POST["lastName"])) {
            // je crée une clef nom dans tableau d'erreur avec un message
            $arrayErrors["lastName"] = "Format invalide";
        }
    }
    if (isset($_POST["firstName"])) {
        if (empty($_POST["firstName"])) {
            $arrayErrors["firstName"] = "Veuillez indiquer votre prenom";
        } elseif (!preg_match($regexName, $_POST["firstName"])) {
            $arrayErrors["firstName"] = "Format invalide";
        }
    }
    if (isset($_POST["BirthDate"])) {
        if (empty($_POST["BirthDate"])) {
            $arrayErrors["BirthDate"] = "Veuillez indiquer votre date de naissance";
        } // elseif (!preg_match($regexBirthDate, $_POST["BirthDate"])) {
        //     $arrayErrors["BirthDate"] = "Format invalide";
        // }
    }
    if (isset($_POST["Phone"])) {
        if (empty($_POST["Phone"])) {
            $arrayErrors["Phone"] = "Veuillez indiquer votre téléphone";
        } elseif (!preg_match($regexPhone, $_POST["Phone"])) {
            $arrayErrors["Phone"] = "Format invalide";
        } 
    }
    $patientMail = new Patients();
        if (isset($_POST["Mail"])) {
            if (empty($_POST["Mail"])) {
                $arrayErrors["Mail"] = "Veuillez indiquer votre mail";
            // Nous controlons que le mail respecte le filtre, s'il ne le respecte pas nous affichons un message d'erreur
             } elseif (!filter_var($_POST['Mail'], FILTER_VALIDATE_EMAIL)) {
            $arrayErrors["Mail"] = "le format de votre mail est invalide";
             } elseif (!$patientMail->checkFreeMail($_POST["Mail"])) {
                $arrayErrors["Mail"] = "Cette adresse mail est déjà utilisé";
            }
        }
    if (count ($arrayErrors) == 0 ){
        // strtolower en majuscule / ucwords = 1 ère lettre majuscule
        $lastName = htmlspecialchars(strtolower(Trim($_POST["lastName"])));
        $firstName = htmlspecialchars(ucwords(Trim($_POST["firstName"])));
        $BirthDate = htmlspecialchars($_POST["BirthDate"]);
        $Phone = htmlspecialchars($_POST["Phone"]);
        $Mail = htmlspecialchars($_POST["Mail"]);   
        $patientsObj = new Patients();
        $patientsObj->addPatient($lastName, $firstName, $BirthDate, $Phone, $Mail);
        $addPatientOk = true;
     }
}
?>
