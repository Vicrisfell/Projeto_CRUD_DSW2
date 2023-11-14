<?php
require_once('../Classes/veiculos.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    //Declarando as variaveis
    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $placa = $_POST['placa'];

    $veiculos = new veiculos($servername, $username, $password, $dbname);
    $veiculos->insert($nome, $cpf, $telefone, $placa);
    unset($veiculos);
    header('location: index.php');
}
?>
