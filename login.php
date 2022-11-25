<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">

    <style>
      #submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 17px;
    cursor: pointer;
    border-radius: 10px;
}
    </style>

</head>
<body>
<header class="header">
        <nav class="navbar navbar-light header-logo">
          <a class="navbar-brand" href="./index.php">
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

      <form class="login-form" method="POST" action="loginValidate.php">
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
  </div>
  <input id="submit" type="submit" name="submit" value="Login">
</form>

</body>
</html>