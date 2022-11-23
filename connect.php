<?php
  
$server = "localhost";
$username = "root";
$password = "";
$dbname = "beautyface";
 

try {
    $connection = new PDO("mysql:host=$server;dbname=" . $dbname, $username, $password);

    // echo "CONECTADO!!";
} catch (PDOException $erro) {
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerando " . $erro->getMessage();
}
// $connection = mysqli_connect($server, $username, $password, $database);
  
// if ($connection->connect_errno) {
//     echo 'Falha ao conectar ao MySQL: (' .
//         $connection->connect_errno .
//         ') ' .
//         $connection->connect_errno;
// }

// mysqli_set_charset($connection, 'utf8');
?>
