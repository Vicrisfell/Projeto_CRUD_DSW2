# Projeto de Avaliação 2 - Implementação de CRUD em PHP

Integrantes:
Giovani Ruzzon de Jesus Ortega <br>
Vitor Cristiano Felizatti 
<br>Carla Cristina Justino Pereira da Silva
<br>Fernando Augusto Saldanha
<br>Vitor de Carvalho

Este projeto consiste na implementação de um CRUD (Create, Read, Update, Delete) em PHP, orientado a objetos, para as tabelas de veículos e registros conforme os requisitos da Avaliação 2 do curso.

## Funcionalidades Implementadas

- **DBconnectVeiculo**: Representa a tabela de veículos no banco de dados. Oferece métodos para criar, ler, atualizar e deletar registros de veículos.

- **DBconnect**: Representa a tabela de registros no banco de dados. Oferece métodos para operações CRUD relacionadas aos registros dos veículos.

## Como Usar

1. **Criando uma Instância de Veiculo**:

    ```php
    // Exemplo de criação de um veículo
    $objetoVeiculos = new DBConnectVeiculos();
    $aluno = isset($_POST['aluno']) ? $_POST['aluno'] : '';
    $placa = isset($_POST['placa']) ? $_POST['placa'] : '';
   $objetoVeiculos->inserir_veiculo($aluno, $placa);
    ```

2. **Realizando Operações de CRUD com Veiculo**:

    ```php
    // Exemplo de leitura de um veículo pelo ID
     $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);

    // Exemplo de atualização de um veículo
    $id_atualizar = isset($_POST['id_atualizar']) ? $_POST['id_atualizar'] : '';
    $aluno_atualizar = isset($_POST['aluno_atualizar']) ? $_POST['aluno_atualizar'] : '';
    $placa = isset($_POST['placa'] )? $_POST['placa'] :'';
    $objetoVeiculos->atualiza($aluno_atualizar, $id_atualizar);

    // Exemplo de exclusão de um veículo
     $objetoVeiculos->deletar_veiculo($id_deletar);
    ```

3. **Trabalhando com a Classe Registro**:

    ```php
    // Exemplo de criação de um registro relacionado a um veículo
    $data_hora= isset($_POST['data_hora']) ? $_POST['data_hora'] : '';
    $veiculos_id = isset($_POST['veiculos_id']) ? $_POST['veiculos_id'] : '';
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $objeto1->inserir_registro($data_hora, $veiculos_id, $id);
    
    // Exemplo de leitura de um registro pelo ID
    $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);

    // Exemplo de atualização de um registro
    $id_atualizar = isset($_POST['id_atualizar']) ? $_POST['id_atualizar'] : '';
    $veiculos_id = isset($_POST['veiculos_id']) ? $_POST['veiculos_id'] : '';
    $data_hora_atualizar = isset($_POST['data_hora_atualizar']) ? $_POST['data_hora_atualizar'] : '';
    $objeto1->atualiza($aluno_atualizar, $data_hora_atualizar,  $veiculos_id );
    
    // Exemplo de exclusão de um registro
   $objeto1->deletar_registro($id_deletar);
    ```

## Requisitos

- PHP 7.x ou superior
- Banco de dados compatível com PHP (MySQL, PostgreSQL, SQLite, etc.)
- Extensões PHP necessárias para a conexão com o banco de dados (por exemplo, mysqli, pdo, etc.)

## Observações

Certifique-se de ter as permissões adequadas e as configurações de conexão com o banco de dados corretas configuradas no arquivo de conexão (`connection.php` ou similar) antes de utilizar estas classes para interagir com o banco de dados.

Para mais informações sobre a estrutura do projeto, consulte os códigos fonte das classes.

