<?php
session_start();
include_once('connect.php');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['email'])){
    echo"<script> alert('Preencha o campo de email!');
    window.location.href='login.php';
    </script>";
}elseif(empty($dados['senha'])){
    echo"<script> alert('Preencha o campo de senha!');
    window.location.href='login.php';
    </script>";
}else{
    
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $hash =hash('sha256', $senha);

        $sql_query = "SELECT * FROM `users` WHERE email='$email' AND senha='$hash'";
         $result=mysqli_query($connection, $sql_query);
         $row_count=mysqli_num_rows($result);
         if($row_count>0){
             echo "<script>alert('Conectado')
             window.location.href='index.php'</script>";
             $_SESSION['id'] = $row_count['id'];
             $_SESSION['email'] = $row_count['nome'];
        }else{
        echo "<script>alert('Login inválido')
        window.location.href='login.php'
        </script>";
    }
}

}

?>