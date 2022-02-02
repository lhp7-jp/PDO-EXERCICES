<?php
if (session_status() == PHP_SESSION_NONE) session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['loginName']) && !empty($_POST['passWord'])) {
        $login = $_POST['loginName'];
        $password = $_POST['passWord'];
        setcookie('myLogin', $login);
        setcookie('myPassword', $password);
        header("Location: my-config.php");
    } else {
        setcookie('myLogin', '', time() - 3600);
        setcookie('myPassword', '', time() - 3600);
        setcookie('PHPSESSID', '', time() - 3600);
        setcookie('myQuota', '', time() - 3600);
        setcookie('myFormule', '', time() - 3600);
        echo "le login ou/et le password n'est pas renseigné.";
    }
}
