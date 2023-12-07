<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro aluno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles/estilo-cadastro.css">
    <link rel="shortcut icon" type="imagex/png" href="./imgs/favicon.ico">

</head>


<body>
    <div class="wrapper">
        <div class="content-box">
            <div class ="left-box">
        <h1 class="left-box-text"><strong>Cadastro de Usuário:</strong></h1>
        
        <div class="box-content">
        <form action="create.php" method="post" class="signup-form">
            <label class="form-text" for="aluno">Aluno:</label>
            <input type="text" class="form-control" id="aluno" name="aluno" required>

            <label class="form-text" for="data_hora">Data/Hora:</label>
            <input type="text" class="form-control" id="data_hora" name="data_hora" required>

            <label class="form-text" for="veiculos_id">ID do Veículo:</label>
            <input type="text" class="form-control" id="veiculos_id" name="veiculos_id" required>
            
            <label class="form-text" for="placa">placa do veiculo:</label>
            <input type="text" class="form-control" id="placa" name="placa" required>

            <label class="form-text" for="id">id do aluno:</label>
            <input type="text" class="form-control" id="id" name="id" required>
            
            <div class="button-container">
            <input type="submit" value="Cadastrar" class="btn">
            
            <a href="index.php"type="button" class="btn">Voltar</a>
            
            </div>
            
        </form>
        </div>
        <img src="imgs/Logo-cps2.png" class="cps-logo">
    </div>
    
    
    
        </div>
        <a href="https://github.com/Vicrisfell/Projeto_CRUD_DSW2"><img class="rodape-icons" src="imgs/github-icon.svg" lin></img></a>
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

