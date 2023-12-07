<?php
    require_once('header.php');
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Portaria Fatec</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles/estilo-Menu.css">
    <link rel="shortcut icon" type="imagex/png" href="./imgs/favicon.ico">
</head>
<body>
    <div class="wrapper">
        <div class="signup-box">
         <div class="left-box">
        <p>
        <h2 class="left-box-text">Opções</h2>
        <a href="create.php" type="button" class="btn">Cadastros<span> &#x270F;</span></a>
        <a href="read.php" type="button" class="btn">Relatório<span> &#x2631;</span></a>
        <a href="deletar.php" type="button" class="btn">Deletar Cadastro<span> &#x2715;</span></a>
        <a href="atualiza.php" type="button" class="btn">Atualizar Cadastro<span> &#x270E;</span></a>
        <a href="login.php" type="button" class="btn">Voltar<span>&#x261A;</span></a>
    </p>   
         </div>
<div class="right-box">

<h4>● Para melhorar a organização.</h4>
    <h1 class="welcome">Bem vindo ao sistema de estacionamento, <?php echo $_SESSION["username"]; ?>.</h1>

    <h3 class="text1">Esse sistema foi feito com o intuito de, cadastrar e armazenar o nome dos alunos e a placa de seus respectivos veiculos.</h3>
    <h3 class="text2">existe a possibilidade de adicionar, remover e editar os dados dos alunos cadastrados no estacionamento da faculdade. 
        Além de ter uma visualização completa de todos os dados cadastrados</h3>
    <div></div>
           </div>
           <img src="imgs/Logo-cps2.png" class="cps-logo">
        </div>


    <a href="https://github.com/Vicrisfell/Projeto_CRUD_DSW2"><img class="rodape-icons" src="imgs/github-icon.svg" lin></img></a>
      
    
    
</body>
</html>
