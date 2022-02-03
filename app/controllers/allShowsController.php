<?php
require_once '../../models/Shows.php';
if (isset($_GET['results'])){
    $showsObj = new Shows();
    $showsArray = $showsObj->allShows();
    }
?>