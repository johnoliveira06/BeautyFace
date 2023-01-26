<?php

session_start();
include_once('connect.php');

if (isset($_POST['submit']) && (isset($_SESSION['nome']))) {

    
$nome=$_SESSION['nome'];
$total = $_POST['total'];
$sql = "SELECT * FROM users WHERE nome='$nome'";
$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];

    $shop = "INSERT INTO `compras`( `userId`, `total`) VALUES ('$id', '$total')";
    $resultado = mysqli_query($connection, $shop);
    echo"<script> 
    alert('Finalizado com sucesso!');
    window.location.href='cart.php';
  </script>";
  $delete = "DELETE FROM `cart`";
  $deletado = mysqli_query($connection, $delete);
}
}else {
  echo"<script> 
  alert('Você não está logado!');
  window.location.href='index.php';
</script>";
}

?>