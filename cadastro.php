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
    <form class="form-signin" action="processa_cadastro.php" method="post">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Cadastrar</h1>
        <label for="usuario" class="sr-only">Usuário</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="" autofocus="">
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required="">
        <label for="senha2" class="sr-only">Senha novamente</label>
        <input type="password" id="senha2" name="senha2" class="form-control" placeholder="Senha" required="">
       <br>
        <div class="container">
        <button class="btn btn-lg btn-success btn-block" type="submit">Cadastrar</button>
        <a href="index.php" class="btn btn-lg btn-primary btn-block">Voltar</a>
       </div>
      </form>
  </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
