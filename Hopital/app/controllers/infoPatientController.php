<?php
require_once '../../models/Config.php';
require_once '../../models/DataBase.php';
require_once '../../models/Patients.php';
$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/";
$regexPseudo = "/^[0123456789a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]{2,30}$/";
$regexMail = "/^([a-z.-]+)@([a-z]+).([a-z]){2,4}$/";
$regexDate = "/^[0-9\-]+$/";
$regexPhone = "/^(?:(?:\+|00)33[\s.-]{0,3}(?:(0)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/";
$arrayError = [];
// creer une variable pour cacher ou montrer ton formulaire
$modifyPatientOk = false;
if (isset($_POST["idPatient"])) {
    $id = htmlspecialchars(trim($_POST["idPatient"]));
    $patientObj = new Patients();
    $patientInfo = $patientObj->viewOnePatients($id);
}
if (isset($_POST['updateBtn'])) {
    if (isset($_POST["lastName"])) {
        if (empty($_POST["lastName"])) {
            $arrayError["lastName"] = "Veuillez saisir votre nom";
        } elseif (!preg_match($regexNom, $_POST["lastName"])) {
            $arrayError["lastName"] = "Format invalide";
        }
    }
    if (isset($_POST["firstName"])) {
        if (empty($_POST["firstName"])) {
            $arrayError["firstName"] = "Veuillez saisir votre prénom";
        } elseif (!preg_match($regexNom, $_POST["firstName"])) {
            $arrayError["firstName"] = "Format invalide";
        }
    }

    if (isset($_POST["birthDate"])) {
        if (empty($_POST["birthDate"])) {
            $arrayError["birthDate"] = "Veuillez saisir la date de naissance";
        } elseif (!preg_match($regexDate, $_POST["birthDate"])) {
            $arrayError["birthDate"] = "Format invalide";
        }
    }
    if (isset($_POST["Phone"])) {
        if (empty($_POST["Phone"])) {
            $arrayError["Phone"] = "Veuillez saisir votre numéro de telephone";
        } elseif (!preg_match($regexPhone, $_POST["Phone"])) {
            $arrayError["Phone"] = "Format invalide";
        }
    }
    $patientMail = new Patients();
    if (isset($_POST["Mail"])) {
        if (empty($_POST["Mail"])) {
            $arrayError["Mail"] = "Veuillez saisir votre Mail";
        } elseif (!filter_var($_POST["Mail"], FILTER_VALIDATE_EMAIL)) {
            $arrayError["Mail"] = "Le format de votre mail est invalide";
        } 
        // elseif (!$patientMail->checkFreeMail($_POST['Mail'])) {
        //     $arrayError["Mail"] = "Cette adresse mail est déjà utilisée";
        // }
    }
    if (count($arrayError) == 0) {
        // strtoupper = en majuscule / ucwords = 1ere lettre en majuscule
        $lastName = htmlspecialchars(strtoupper(trim($_POST['lastName'])));
        $firstName = htmlspecialchars(ucwords(trim($_POST['firstName'])));
        $birthDate = htmlspecialchars(trim($_POST['birthDate']));
        $Phone = htmlspecialchars(trim($_POST['Phone']));
        $Mail = htmlspecialchars(trim($_POST['Mail']));
        $id = htmlspecialchars(trim($_POST['idPatient']));

        $patient = new Patients();
        $patient->modifyPatient($id, $lastName, $firstName, $Mail, $Phone, $birthDate);
        $patientInfo = $patientObj->viewOnePatients($id);
        $modifyPatientOk = true;
    }
      if (isset($_POST["modifyBtn"])) {
        $id = htmlspecialchars(trim($_POST["idPatient"]));
        $patientObj = new Patients();
        $patientInfo = $patientObj->viewOnePatients($id);
    }
}
