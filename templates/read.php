<?php
require_once('../classes/DBConnectveiculos.php');
require_once('../classes/DBconnect.php');
require_once('../classes/Conexao.php');




try {
    $conexao = new Conexao(); // Instancia a classe Conexao

    $conn = $conexao->getConexao(); // Obtém a conexão PDO

    $query ="SELECT * FROM registro INNER JOIN veiculos ON registro.veiculos_id = veiculos.id";

    $resultado = $conn->query($query);

    $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles/estilo-relatorio.css">
    <title>Tabela de Dados</title>
   
</head>
<body>

<div class="wrapper">
<div class="content-box">
    <div class="left-box">
<h2 class="page-text">Dados</h2>

<table>
    <thead>
        <tr class="left-box-text">
            <th >ID</th>
            <th>Data e Hora</th>
            <th>ID do Veículo</th>
            <th>Aluno</th>
            <th>Placa</th>
        </tr>
    </thead>
    <tbody class="list-content">
        <?php foreach ($dados as $item): ?>
            <tr class="left-box-text">
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['data_hora']; ?></td>
                <td><?php echo $item['veiculos_id']; ?></td>
                <td><?php echo $item['aluno']; ?></td>
                <td><?php echo $item['placa']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>

<a href="index.php"type="button" class="btn">Voltar</a>
<img src="imgs/Logo-cps2.png" class="cps-logo">
        
</div>
</div>
<a href="https://github.com/Vicrisfell/Projeto_CRUD_DSW2"><img class="rodape-icons" src="imgs/github-icon.svg" lin></img></a>
</div>

</body>
</html>

