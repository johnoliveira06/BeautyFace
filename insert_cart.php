<?php
include_once ('connect.php');

if(isset($_POST['submit'])){
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO cart(nome,preco) VALUES ('$nome', '$preco')";
if ($result = mysqli_query($connection, $sql)) {
  echo"<script> alert('Produto adicionado com sucesso!');
  window.location.href='index.php';
  </script>";
} else {
  echo"<script> alert('Não foi possível adicionar o produto!');
  window.location.href='index.php';
  </script>";
}
}
?>
