<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles/estilo-deleta.css">
    <link rel="shortcut icon" type="imagex/png" href="./imgs/Logo-cps.ico">
</head>
<body>
<div class="wrapper">
    <div class="content-box">
        <div class="left-box">
        <h1 class="page-text"><strong>Digite o id para deletar</strong><b>
        <br><br>
        <form action="delete.php" method="post">
        <label class="form-text" for="id">ID a ser deletado:</label>
        <input class="form-control" type="text" id="id_deletar" name="id_deletar">
        <input class="btn" type="submit" value="Deletar">
        <a href="index.php" class="btn">voltar</a>
    </form>
    <img src="imgs/Logo-cps.png" class="cps-logo">
    </div>
    
    </div>
<a href="https://github.com/Vicrisfell/Projeto_CRUD_DSW2"><img class="rodape-icons" src="imgs/github-icon.svg" lin></img></a>

</div>    
</body>
</html>