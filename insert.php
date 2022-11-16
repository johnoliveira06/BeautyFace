<?php
include_once 'connect.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO users(nome,senha,email,cidade) VALUES ('$nome', '$senha', '$email', '$cidade')";

if ($result = mysqli_query($connection, $sql)) {
    echo "Espaço cadastrado com sucesso.
    <a href='index.php'>Voltar</a>
  ";
} else {
    echo "Erro ao cadastrar espaço.
    <a href='index.php'>Voltar</a>
  ";
}
?>