<?php
require_once('../Classes/veiculos.php');
// Verificando se a requisicao de dados acontece via metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Instancia objeto veiculos para conectar ao banco de dados
$veiculos = new veiculos($servername, $username, $password,$dbname);


// Recebe cpf via POST
$placa = $_POST['placa'];
// Chama o metodo Deletar de veiculos
$veiculos->delete($placa);
// Destroi o objeto e encerra a conexao com o banco de dados
unset($veiculos);

header('location:index.php');

}

?>