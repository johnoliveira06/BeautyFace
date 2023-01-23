<?php
include_once ('connect.php');

if(isset($_POST['submit'])){
$id = $_POST['produtoid'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$image = $_POST['image'];

$sql = "INSERT INTO cart(produtoId,nome,preco,imagem) VALUES ('$id', '$nome', '$preco', '$image')";
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
