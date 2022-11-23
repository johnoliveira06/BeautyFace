<?php
include_once ('connect.php');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];

// echo "valores:";
// print_r($_POST['nome']);

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


// if(empty($dados['nome'])){
//   echo "<script>alert('Nome não pode ser vazio!')
//   window.location.href = 'cadastro.php'
//   </script>";
// }
// elseif(empty($dados['email'])){
//   echo"<script> alert('E-mail não pode ser vazio!');
//   window.location.href='cadastro.php';
//   </script>";
// }
// elseif(empty($dados['senha'])){
//   echo"<script> alert('Senha não pode ser vazio!');
//   window.location.href='cadastro.php';
//   </script>";
// }
// elseif(empty($dados['cidade'])){
//   echo"<script> alert('Cidade não pode ser vazio!');
//   window.location.href='cadastro.php';
//   </script>";
// }
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

  // $sql = "INSERT INTO users(nome,email,senha,cidade) VALUES (:nome, :email, :senha, :cidade)";

  // $cadastro = $connection->prepare($sql);

  // $cadastro->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
  // $cadastro->bindParam(':email', $dados['email'], PDO::PARAM_STR);
  // $cadastro->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
  // $cadastro->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
  // $cadastro->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);

  // $cadastro->execute();

  // if($cadastro->rowCount()){
  //   echo"<script> alert('Usuário cadastrado com sucesso!');
  //   window.location.href='cadastro.php';
  //   </script>";
  //   }else{
  //       echo"<script> alert('Não foi possivél realizar o cadastro');
  //   window.location.href='cadastro.php';
  //   </script>";
  //   }

?>

<!-- <html>
<head>


// ?> -->