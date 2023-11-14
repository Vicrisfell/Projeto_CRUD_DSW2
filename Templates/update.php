<?php
require_once('../Classes/veiculos.php');
// Criando objeto veiculos
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $veiculos = new veiculos($servername, $username, $password,$dbname);
// Declarando variaveis via POST
    $aluno = $_POST['name'];
    //$cpf = $_POST['cpf'];
   // $telefone = $_POST['telefone'];
    $placa = $_POST['checkbox'];
    $veiculos->update($aluno, $cpf, $telefone,$placa);

    unset($veiculos);
    header('location:index.php');

}


?>
