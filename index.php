<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Beauty Face</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-light header-logo">
        <a class="navbar-brand" href="#">
          <img src="./assets/icons/star.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          <a href="#">Beauty Face</a>
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
    <section class="banner">
      <?php   include_once 'verificaLogin.php'; ?>
      <img src="./assets/images/banner.jpg" alt="Banner" />
    </section>
    <section class="produtos">
      <div class="produtos-header">
        <div class="produtos-info">
          <h2>PROMOÇÃO</h2>
          <p>9 produtos</p>
        </div>
      </div>
      <div class="lista-produtos">
        <?php

        include_once('connect.php');
        $select = "SELECT * FROM `produtos`";
        $result = mysqli_query($connection, $select);
        while($row = mysqli_fetch_assoc($result)){
          $product_id = $row['id'];
          $product_name=$row['nome'];
          $product_price=$row['preco'];
          $product_image=$row['imagem'];
          
          echo "<div class='produtos-item'>
          <form method='POST' action='insert_cart.php'>
          <input type='hidden' name='produtoid' value='$product_id'>
          <img
          src='./assets/images/$product_image'
          alt='Produto'
          />
          <input type='hidden' name='image' value='$product_image'>
          <p>$product_name</p>
          <input id='nome' name='nome' type='hidden' value='$product_name'>
          <div class='produtos-preco'>R$ <span>$product_price</span></div>
          <input class='produtos-preco' id='preco' name='preco' type='hidden' value='$product_price'>
          <button type='submit' name='submit' class='btn btn-outline-primary' >Adicionar ao carrinho</button>
          </form>
        </div>";
      }
        ?>
    </section>
    <section class="newsletter">
      <div class="newsletter-conteudo">
        <div class="newsletter-links">
          <ul>
            <li><a href="./contato.php">Contato</a></li>
            <li><a href="#">Termos de serviço</a></li>
            <li><a href="#">Política de privacidade</a></li>
            <li><a href="#">Cancelamento, troca e reembolso</a></li>
          </ul>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="social">
        <ul>
          <li>
            <a href="#"><img src="./assets/icons/instagram.svg" alt="Instagram" /></a>
          </li>
          <li>
            <a href="#"><img src="./assets/icons/facebook.svg" alt="Facebook" /></a>
          </li>
        </ul>
      </div>
      <div class="pagamento">
        <ul>
          <li>
            <a href="#"><img src="./assets/icons/mastercard.svg" alt="Mastercard" /></a>
          </li>
          <li>
            <a href="#"><img src="./assets/icons/paypal.svg" alt="Paypal" /></a>
          </li>
          <li>
            <a href="#"><img src="./assets/icons/visa.svg" alt="Visa" /></a>
          </li>
        </ul>
      </div>
    </footer>

  </body>
</html>