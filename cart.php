<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">


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
              <a href="./cadastro.php"><img src="./assets/icons/login.svg" alt="Login" /></a>
            </li>
            <li>
              <a href="./cart.php"><img src="./assets/icons/cart.svg" alt="Cart" /></a>
            </li>
          </ul>
        </div>
      </header>
      <div class="lista-produtos">
      <div class="produtos-item">
          <img
            src="./assets/images/pharma-hemp-complex-yVAXSK6zFIM-unsplash.jpg"
            alt="Produto 1"
          />
          <a href="#" data-toggle="modal" data-target="#produto1">
          <p>Sabonete</p>
          <div>
            <label for="quantity"><strong>Quantidade:</strong></label>
            <input type="number" id="quantity" name="quantity" min="1" max="50" step="1" value="3">
          </div>
          <div class="produtos-preco">R$ <span>20, 00</span></div>
          </a>
        </div>

        <div class="produtos-item">
          <img
            src="./assets/images/nery-montenegro-SmEty_TVr80-unsplash.jpg"
            alt="Produto 5"
          />
          <a href="#" data-toggle="modal" data-target="#produto5">
          <p>Creme Facial</p>
          <div>
            <label for="quantity"><strong>Quantidade:</strong></label>
            <input type="number" id="quantity" name="quantity" min="1" max="50" step="1" value="1">
          </div>
          <div class="produtos-preco">R$ <span>25, 00</span></div>
        </a>
        </div>
        <div>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Quantidade de itens:
            <span><strong>4</strong></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Valor total:
            <span ><strong>R$ 85,00</strong></span>
          </li>
          <input type="submit" class="btn btn-success" value="Finalizar compra" onClick="final()">
          <?php
            echo"<script> 
            function final(){
              alert('Finalizado com sucesso!');
              window.location.href='index.php';
            }
            </script>";
            ?>
          </li>
        </ul>
        </div>
</div>

</body>
</html>