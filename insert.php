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
}else{
  $consulta = "SELECT * FROM `users` WHERE email='$email'";
  $result = mysqli_query($connection, $consulta);
  $rows_count = mysqli_num_rows($result);
  if ($rows_count > 0) {
   echo "<script>alert('Este email já está cadastrado')
   window.location.href = 'cadastro.php'
   </script>";
  }else{
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
}



  


//  while ($reg = mysql_fetch_array($result)){
//  echo "<script>alert($reg[nome]  $reg[email]  $reg[senha]   $reg[cidade])</script>";
//  echo "Número de linhas retornadas: ".mysql_num_rows($result);
//  }
 

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