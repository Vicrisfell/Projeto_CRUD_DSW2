<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar cadastro</title>
</head>
<body>
<div>
        <h1><strong>Selecione o id para deletar: </strong><b>
        <br><br>
        <form action="delete.php" method="post">
        <label for="id">ID a ser deletado:</label>
        <input type="text" id="id_deletar" name="id_deletar"><br><br>
        <input type="submit" value="Deletar">
        <a href="index.php" class="btn btn-primary">voltar</a>
    </form>
    </div>
    
</body>
</html>