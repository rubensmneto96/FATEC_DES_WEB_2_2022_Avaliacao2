<?php
    
    require_once('usuario.php');

    $user = new Usuario();

    $user->insert($_POST);
    header('Location: index.php');
?>