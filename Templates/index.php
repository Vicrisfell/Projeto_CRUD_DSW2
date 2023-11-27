<?php
    require_once('header.php');
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Portaria Fatec</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>
            <?php echo $_SESSION["username"]; ?>
            <br>
        </h1>
    </div>

    
    <p>
        <a href="create.php"><input type="button" value=" Cadastros"></a>
        <br><br>
        <a href="read.php"><input type="button" value="Relatório de Cadastros"></a>
        <br><br>
        <a href="deletar.php"><input type="button" value="Deletar Cadastro"></a>
        <br><br>
        <a href="atualiza.php"><input type="button" value="Atualizar Cadastro"></a>
        <br><br>
        <a href="login.php"><input type="button" value="voltar"></a>
        <br><br>
    </p>   
</body>
</html>
