<?php
require_once('../Classes/veiculos.php');

$veiculos = new veiculos($servername, $username, $password,$dbname);

$veiculos->read();
unset($veiculos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Registro de veiculos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <title>Veiculos</title>
</head>
<body>


    <a href="index.php" class="btn btn-primary">Retornar</a>
</body>
</html>