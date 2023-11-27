<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar cadastro</title>
</head>
<body>

<?php
require_once('../classes/DBconnect.php');
require_once('../classes/DBConnectVeiculos.php');
$objetoVeiculos = new DBConnectVeiculos();
$objeto1 = new DBConnect();

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_deletar = isset($_POST['id_deletar']) ? $_POST['id_deletar'] : '';

    // Verifique se o ID não está vazio
    if (!empty($id_deletar)) {
        $objetoVeiculos->deletar_veiculo($id_deletar);
    } else {
        echo "ID do veículo não fornecido";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_deletar = isset($_POST['id_deletar']) ? $_POST['id_deletar'] : '';

    // Verifique se o ID não está vazio
    if (!empty($id_deletar)) {
        $objeto1->deletar_registro($id_deletar);
    } else {
        echo "ID do veículo não fornecido";
    }
}

unset($objetoVeiculos);
unset($objeto1);
?>
 
</body>
</html>



