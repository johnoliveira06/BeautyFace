<?php
include_once ('connect.php');


$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO cart(nome, preco) VALUES ('$nome', '$preco')";
if ($result = mysqli_query($connection, $sql)) {
  echo"<script> alert('Produto inserido);
  window.location.href='index.php';
  </script>";
} else {
  echo"<script> alert('Não foi possível inserir');
  window.location.href='index.php';
  </script>";
}

?>