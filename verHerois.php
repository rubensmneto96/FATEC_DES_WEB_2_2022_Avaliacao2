<?php

session_start();

if($_SESSION['usuario']) {
    $usuario = $_SESSION['usuario'];
    $idUsuario = $_SESSION['id_usuario'];
} else {
    header('Location: index.php');
}

    include('heroi.php');
    $hero = new Heroi();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Heróis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;">Heróis Cadastrados</h1>
    <div class="container">
        <table class="table">
            <tbody>
                <?php
                    $hero->selectHerois();      
                ?>
            </tbody>
    </table>
    </div>
    <div class="container">
    <a href="bemvindo.php" class="btn btn-primary">Voltar</a>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>