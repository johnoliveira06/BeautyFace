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
      <div class="all" style="
    display: flex;
    justify-content: space-between;">
    <div class="lista-produtos">

      <?php
      include_once('connect.php');
        $select = "SELECT * FROM `cart`";
        $result = mysqli_query($connection, $select);


        while($row = mysqli_fetch_assoc($result)){
          $product_id = $row['id'];
          $product_name=$row['nome'];
          $product_price=$row['preco'];
          $product_image=$row['imagem'];

          
          echo "<div class='produtos-item'>
          <form method='POST' action='removeItem.php'>
          <img
          src='./assets/images/$product_image'
          alt='Produto'
          />
          <input type='hidden' name='produtoid' value='$product_id'>
          <input id='nome' name='nome' type='hidden' value='$product_name'>
          <p>$product_name</p>
          <div class='produtos-preco'>R$ <span>$product_price</span></div>
          <input class='produtos-preco' id='preco' name='preco' type='hidden' value='$product_price'>
          <button type='submit' name='apagar' class='btn btn-outline-danger' >Remover do carrinho</button>
          </form>
        </div>";
      }
      ?>  
</div>
<div class="preco-final">
    <?php
    $select = "SELECT produtoId FROM `cart`";
    $result = mysqli_query($connection, $select);
    $total = mysqli_num_rows($result);

    $sql = "SELECT SUM(preco) AS totalPreco FROM `cart`";
    $final = mysqli_query($connection, $sql);
    $linhas = mysqli_num_rows($final);
    $linhas = mysqli_fetch_array($final);

    $precoTotal = $linhas['totalPreco'];

    echo "<ul class='list-group'>
    <form method='POST' action='finalizarCompra.php'>
      <li class='list-group-item d-flex justify-content-between align-items-center'>
        Quantidade de itens:
        <span><strong>$total</strong></span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Valor total:
        <input type='hidden' name='total' value='$precoTotal'>
        <span ><strong>R$ $precoTotal</strong></span>
      </li>
      <input type='submit' name='submit' class='btn btn-success' value='Finalizar compra'>
      </li>
      </form>          
      </ul>";
    ?>
</div>
</div>



</body>
</html>