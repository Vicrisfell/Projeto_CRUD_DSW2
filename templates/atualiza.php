<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro</title>
</head>
<div>
<form action="atualiza.php" method="post">
    <label for="aluno_atualizar">Novo Nome do Aluno:</label><br>
    <input type="text" id="aluno_atualizar" name="aluno_atualizar" required><br><br>
    
    <label for="veiculos_id">ID do Veículo a ser Atualizado:</label><br>
    <input type="text" id="veiculos_id" name="veiculos_idr" required><br><br>

    <label for="id_atualizar">ID :</label><br>
    <input type="text" id="id_atualizar" name="id_atualizar"><br>

    <label for="placa">Placa:</label><br>
    <input type="text" id="placa" name="placa"><br>

    <label for="data_hora_atualizar">Data e Hora:</label><br>
    <input type="text" id="data_hora_atualizar" name="data_hora_atualizar"><br><br>
   
    <input type="submit" value="Atualizar Registro">
    <a href="index.php" class="btn btn-primary">voltar</a>
</form>

<?php

require_once('../classes/DBConnectVeiculos.php');
require_once('../classes/DBConnect.php');
$objetoVeiculos = new DBConnectVeiculos();
$objeto1 = new DBConnect();

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_atualizar = isset($_POST['id_atualizar']) ? $_POST['id_atualizar'] : '';
    $aluno_atualizar = isset($_POST['aluno_atualizar']) ? $_POST['aluno_atualizar'] : '';
    $placa = isset($_POST['placa'] )? $_POST['placa'] :'';

    // Verifique se o ID e o nome não estão vazios
    if (!empty($id_atualizar) && !empty($aluno_atualizar)) {
        $objetoVeiculos->atualiza($aluno_atualizar, $id_atualizar);
    } else {
        echo "ID do veículo ou nome do aluno não fornecido";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_atualizar = isset($_POST['id_atualizar']) ? $_POST['id_atualizar'] : '';
    $veiculos_id = isset($_POST['veiculos_id']) ? $_POST['veiculos_id'] : '';
    $data_hora_atualizar = isset($_POST['data_hora_atualizar']) ? $_POST['data_hora_atualizar'] : '';

    if (!empty($id_atualizar) && !empty($aluno_atualizar) && !empty($data_hora_atualizar)) {
        $objeto1->atualiza($aluno_atualizar, $data_hora_atualizar,  $veiculos_id );
    } else {
        echo "ID do veículo, nome do aluno ou data e hora não fornecidos";
    }
}
unset($objetoVeiculos);
unset($objeto1);

?>
 
</body>
</html>




