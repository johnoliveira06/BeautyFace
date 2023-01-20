<?php
include_once('connect.php');
if(isset($_POST['submit'])){

$delete = "DELETE FROM `cart`";
$noRows = mysqli_query($connection, $delete);

echo"<script> 
  alert('Finalizado com sucesso!');
  window.location.href='index.php';
</script>";
}
?>