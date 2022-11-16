<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>

    <style>
              #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>

</head>
<body>
    <header class="header">
        <nav class="navbar navbar-light header-logo">
          <a class="navbar-brand" href="./index.html">
            <img src="./assets/icons/star.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <a href="./index.php">Beauty Face</a>
          </a>
        </nav>
        <div class="header-nav">
          <ul>
            <li>
              <a href="#"><img src="./assets/icons/search.svg" alt="Search" /></a>
            </li>
            <li>
              <a href="#"><img src="./assets/icons/login.svg" alt="Login" /></a>
            </li>
            <li>
              <a href="#"><img src="./assets/icons/cart.svg" alt="Cart" /></a>
            </li>
          </ul>
        </div>
      </header>
    <div class="cadastro-form">
        <form method="POST" action="insert.php">
          <fieldset>
            <div class="form-group">
                <label >Nome Completo</label>
                <input id="nome" name="nome" type="text" class="form-control">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label>Senha</label>
                <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha">
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cidade</label>
                <input id="cidade" name="cidade" type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Data de nascimento</label>
                <input type="text" name="datanasc" class="form-control">
            </div>
            </div>
            <!-- <button id="submite" name="submite" type="submite" class="btn btn-primary">Cadastrar</button> -->
            <input id="submit" class="envio" type="submit" name="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>
