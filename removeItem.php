<?php
include_once('connect.php');
if(isset($_POST['apagar'])){

  $id = $_POST['produtoid'];
  $sql = "DELETE FROM `cart` WHERE id=$id";
  $query = mysqli_query($connection,$sql);
  echo"<script> 
    alert('Produto removido com sucesso!');
    window.location.href='cart.php';
  </script>";
}

?>