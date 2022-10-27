<?php
    include('usuario.php');
    $user = new Usuario();
    $user->login($_POST);
?>