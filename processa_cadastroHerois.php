<?php
    
    print_r($_POST);

    require_once('heroi.php');

    $hero = new Heroi();

    $hero->insert($_POST);
    header('Location: verHerois.php');
?>