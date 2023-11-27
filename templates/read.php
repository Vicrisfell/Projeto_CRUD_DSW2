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
    <title>Tabela de Dados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Dados</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Data e Hora</th>
            <th>ID do Veículo</th>
            <th>Aluno</th>
            <th>Placa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dados as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['data_hora']; ?></td>
                <td><?php echo $item['veiculos_id']; ?></td>
                <td><?php echo $item['aluno']; ?></td>
                <td><?php echo $item['placa']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <a href="login.php"><input type="button" value="voltar"></a>
        <br><br>
</table>

</body>
</html>

