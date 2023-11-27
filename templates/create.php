<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro aluno</title>
</head>
<body>
    <div>
        <h1><strong>Cadastro de Usuário:</strong></h1>
        <br><br>
        <form action="create.php" method="post">
            <label for="aluno">Aluno:</label>
            <input type="text" id="aluno" name="aluno" required><br><br>

            <label for="nome">Data/Hora:</label>
            <input type="text" id="data_hora" name="data_hora" required><br><br>

            <label for="veiculos_id">ID do Veículo:</label>
            <input type="text" id="veiculos_id" name="veiculos_id" required><br><br>
            
            <label for="placa">placa do veiculo:</label>
            <input type="text" id="placa" name="placa" required><br><br>

            <label for="id">id do aluno:</label>
            <input type="text" id="id" name="id" required><br><br>

            <input type="submit" value="Cadastrar">
            <br><br>
            <a href="login.php"><input type="button" value="voltar"></a>
            <br><br>
        </form>
    </div>
    
</body>
</html>
<?php

require_once('../classes/DBConnectVeiculos.php');
require_once('../classes/DBconnect.php');

$objetoVeiculos = new DBConnectVeiculos();
$objeto1 = new DBConnect();

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno = isset($_POST['aluno']) ? $_POST['aluno'] : '';
    $placa = isset($_POST['placa']) ? $_POST['placa'] : '';

    // Verifique se os campos não estão vazios
    if (!empty($aluno) && !empty($placa)) {
        $objetoVeiculos->inserir_veiculo($aluno, $placa);
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
}if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_hora= isset($_POST['data_hora']) ? $_POST['data_hora'] : '';
    $veiculos_id = isset($_POST['veiculos_id']) ? $_POST['veiculos_id'] : '';
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    // Verifique se os campos não estão vazios
    if (!empty($data_hora) && !empty($placa)) {
        $objeto1->inserir_registro($data_hora, $veiculos_id, $id);
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
}
unset($objetoVeiculos);
unset($objeto1);
?>

</body>
</html>

