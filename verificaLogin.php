<?php
session_start();

if ((isset($_SESSION['nome'])) && (isset($_SESSION['email'])) && (isset($_SESSION['senha'])) ) {
  $logado = $_SESSION['nome'];
  echo "Olá, ".$logado;
  echo "[
    <a href='logout.php'>sair</a>
  ]";
}
?>