<?php
include_once('connect.php');
if(isset($_POST['submit'])){

  $userId = $_POST;

$sql = "INSERT INTO `compras`(`userId`, `produtoId`, `total`) SELECT * FROM users, produtos VALUES ('id','id','SUM(preco)')";
// SELECT SUM(preco) AS totalPreco FROM `cart`;

$delete = "DELETE FROM `cart`";
$noRows = mysqli_query($connection, $delete);

echo"<script> 
  alert('Finalizado com sucesso!');
  window.location.href='index.php';
</script>";
}
?>