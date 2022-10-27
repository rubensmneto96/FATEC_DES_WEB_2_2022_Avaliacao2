<?php
    
    session_start();

    if($_SESSION['usuario']) {
        $usuario = $_SESSION['usuario'];
        $idUsuario = $_SESSION['id_usuario'];
    } else {
        header('Location: index.php');
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Heróis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="text-center">
  
  <main class="form-signin w-100 m-auto container">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Bem vindo, <span style="color: #005FE8;"><?= $_SESSION['usuario'] ;?></span></h1>
        <br>
        <form action="cadastroHerois.php">
            <input type="hidden" name="id_usuario" value="<?= $idUsuario; ?>">
            <input type="hidden" name="usuario" value="<?= $usuario; ?>">
            <button type="submit" class="btn btn-lg btn-primary btn-block">Cadastrar Heróis</button>
        </form>
        <br>
        <a href="verHerois.php" class="btn btn-lg btn-success btn-block">Ver Heróis</a>
        <br>
        <br>
        <a href="logout.php" class="btn btn-lg btn-danger btn-block">Sair</a>
  </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
