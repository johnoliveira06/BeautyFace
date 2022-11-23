<?php
include_once ('connect.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
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
}else {
  $sql = "INSERT INTO users(nome,senha,email,cidade) VALUES ('$nome', '$senha', '$email', '$cidade')";
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
// else{
//   $query_consulta = "SELECT id FROM users WHERE email=:email LIMIT 1";
//   $result_consulta = $conn->prepare($query_consulta);
//   $result_consulta->bindParam(':email', $dados['email'], PDO::PARAM_STR);
//   $result_consulta->execute();

//   if(($result_consulta) and ($result_consulta->rowCount() !=0)){
//       echo"<script> alert('E-mail já cadastrado, tente outro!');
//       window.location.href='cadastro.php';
//       </script>";
//   }



?>