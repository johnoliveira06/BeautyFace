<?php
include_once ('connect.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$hash_senha =password_hash($senha, PASSWORD_DEFAULT);
$cidade = $_POST['cidade'];

if(empty($nome)){
  echo "<script>alert('Todos os dados devem ser preenchidos!')
  window.location.href = 'cadastro.php'
  </script>";
}
if(empty($email)){
  echo"<script> alert('Todos os dados devem ser preenchidos!');
  window.location.href='cadastro.php';
  </script>";
}
elseif(empty($senha)){
  echo"<script> alert('Todos os dados devem ser preenchidos!');
  window.location.href='cadastro.php';
  </script>";
}
elseif(empty($cidade)){
  echo"<script> alert('Todos os dados devem ser preenchidos!');
  window.location.href='cadastro.php';
  </script>";
}else{
  $consulta = "SELECT * FROM `users` WHERE email='$email'";
  $result = mysqli_query($connection, $consulta);
  $rows_count = mysqli_num_rows($result);
  if ($rows_count > 0) {
   echo "<script>alert('Este email já está cadastrado')
   window.location.href = 'cadastro.php'
   </script>";
  }else{
    $sql = "INSERT INTO users(nome,senha,email,cidade) VALUES ('$nome', '$hash_senha', '$email', '$cidade')";
    if ($result = mysqli_query($connection, $sql)) {
      echo"<script> alert('Usuário cadastrado com sucesso!');
      window.location.href='cadastro.php';
      </script>";
    } else {
      echo"<script> alert('Não foi possivél realizar o cadastro');
      window.location.href='cadastro.php';
      </script>";
    }
  }
}
?>