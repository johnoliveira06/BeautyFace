<?php
include_once 'connect.php';

$statusMsg = '';

// File upload path
$targetDir = 'uploads/';
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST['botao_submit']) && !empty($_FILES['file']['name'])) {
    // Allow certain file formats
    $allowTypes = ['jpg', 'png', 'jpeg', 'gif', 'pdf'];
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            // Insert image file name into database
            $insert = $connection->query(
                "INSERT INTO product (imagem) VALUES('$fileName', NOW())"
            );
            if ($insert) {
                $statusMsg =
                    'O arquivo ' . $fileName . ' foi gravado com sucesso.';
            } else {
                $statusMsg = 'Falha ao gravar o arquivo, tente mais tarde.';
            }
        } else {
            $statusMsg = 'Desculpe, ocorreu um erro ao subir o arquivo.' . $fileName;
        }
    } else {
        $statusMsg =
            'Desculpe, somente arquivo do tipo JPG, JPEG, PNG, GIF, & PDF são permitidos.';
    }
} else {
    $statusMsg = 'Por favor, selecione uma arquivo para enviar.';
}

// Display status message
echo $statusMsg;

echo "<br><br><a href='upload.php'>Voltar</a>";
?>