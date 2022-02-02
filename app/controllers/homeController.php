<?php
if (empty($_COOKIE['myLogin'])) {
  setcookie('myLogin', '', time() - 3600);
  header("Location: no-allowed.php");
} elseif (session_status() == PHP_SESSION_NONE) {
  setcookie('myPassword', '', time() - 3600);
  session_start();

  $msgErrors = [
    'notupload' => "Votre fichier n'a pas été uploadé. ", 'type' => "Votre fichier n'est pas une image. (mime) ",
    'type1' => "Votre fichier n'est pas une image. (ext) ", 'size' => "Désolé, votre fichier doit faire moins de 5mo. ",
    'Existe' => "Désolé, le fichier existe déjà."
  ];
  // on déclare un tableau qui contiendra le nom des fichiers de nos images
  $userPictures = array();
  $userPictureSize = array();
  // on ouvre notre dossier contenant les images
  $fullNameFolder = './assets/img/' . $_COOKIE['myLogin'] . '/';
  $dossier = opendir($fullNameFolder);
  $tempCounter = 0;
  while ($fichier = readdir($dossier)) {
    if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
      // on stocke le nom des fichiers des images dans userPictures et $_SESSION
      $userPictures[] = $fichier;
      $fullNameKeySession = 'nameFile'.$tempCounter;
      $_SESSION[$fullNameKeySession] = $fichier;
      $tempCounter++;
      }
  }
  // autre facon pour avoir la liste des fichiers d'un répertoire = login
  // $listByLogin = scandir('./assets/img/'.$_COOKIE['myLogin'].'/');
  // var_dump($listByLogin);

  // on compte le nombre de images
  $nbpics = count($userPictures);
  $tmpNbimg = 0;
  $cpt = 0;
  //? je créer un nouveau tableau contenant la taille des img de user j'utilise la fonction array_map pour appliqué fileSize à toutes les valeurs de userPicture
  //  foreach ($userPictures as $value) {
  //   $fullNameimage = $dossier.$userPicture[];
  //   var_dump($fullNameimage);
  // //   $userPictureSize = filesize($fullNameimage);
  //    $tmpNbimg++;
  //    $cpt++;
  //  }
  $_SESSION['nbpics'] = $nbpics;
  // var_dump($userPictureSize);
  // $quota = 0;
  // //? a l'aide d'une boucle foreach j'additionne tout les valeurs du tableau dans quota
  // foreach ($userPictureSize as $value) {
  //     $quota += $value;
  // }
  // closedir($dossier);
  // //? nous avons arrondie quota au 100eme
  // $quota = round($quota / (1024 * 1024), 2);
  // var_dump($quota);
  // var_dump($userPictureSize);
  $nberror = 0;
  // taille max du fichier à uploader
  $myMaxSizeImg = $_COOKIE['myQuota'] * 1024 * 1024;
  // extension autorisée
  $validExtImg = array('jpg', 'png', 'webp');
  $fullValidExtImg = array('image/jpg', 'image/png', 'image/webp');
  // chemin ou se trouve les fichiers à télécharger
  $pathImg = "C:/Users/jp196/Documents/#Formation La Manu Le Havre/#PHP/phpFilesV2/assets/img/" . $_COOKIE['myLogin'] . "/";
  if (!(empty($_FILES))) {
    // Vérifie la format du fichier à télécharger par mime
    if (!(in_array(mime_content_type($_FILES['fileToUpload']['tmp_name']), $fullValidExtImg))) {
      echo $msgErrors['type'];
      $nberror++;

      // Vérifie l'extension du fichier à télécharger
    } elseif (!(in_array(strtolower(pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION)), $validExtImg))) {
      echo $msgErrors['type1'];
      $nberror++;

      // Vérifie la taille du fichier à télécharger
    } elseif ($_FILES['fileToUpload']['size'] > $myMaxSizeImg) {
      echo $msgErrors['size'];
      $nberror++;
    } else {
      $extension = mime_content_type($_FILES['fileToUpload']['name'])[1];
      $newNameImg = $pathImg . uniqid() . $extension;
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newNameImg);
      echo "Le fichier " . uniqid() . $extension . " a été uploadé.";
    }
  }
}
