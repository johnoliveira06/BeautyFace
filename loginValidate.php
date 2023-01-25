<?php
session_start();
include_once('connect.php');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['nome'])){
    echo"<script> alert('Preencha o campo de nome!');
    window.location.href='login.php';
    </script>";
}elseif(empty($dados['email'])){
    echo"<script> alert('Preencha o campo de email!');
    window.location.href='login.php';
    </script>";
}elseif(empty($dados['senha'])){
    echo"<script> alert('Preencha o campo de senha!');
    window.location.href='login.php';
    </script>";
}else{
    
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $hash =hash('sha256', $senha);

        $sql_query = "SELECT * FROM `users` WHERE email='$email' AND senha='$hash' AND nome='$nome'";
         $result=mysqli_query($connection, $sql_query);
         $row_count=mysqli_num_rows($result);
         if($row_count>0){
             $_SESSION['nome'] = $nome;
             $_SESSION['email'] = $email;
             $_SESSION['senha'] = $senha;
             echo "<script>alert('Conectado')</script>";
             header('location:index.php');
        }else{
        echo "<script>alert('Login inválido')
        window.location.href='login.php'
        </script>";
    }
}

}

?>