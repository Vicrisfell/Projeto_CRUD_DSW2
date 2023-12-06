<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    if($_POST['nome'] == 'fatec' && $_POST['senha'] == 'portaria'){ 
        $_SESSION['online'] = TRUE;  
        $_SESSION['username'] = 'Portaria Fatec';
        header("location: index.php"); 
        exit;
    } else {
        $_SESSION['online'] = FALSE; 
    }
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles/estilo-login.css">
    <link rel="shortcut icon" type="imagex/png" href="./imgs/Logo-cps.ico">
</head>

<body>
    <div class="wrapper">
        <div class="signup-box">
            <div class="left-box">
          <h2 class="left-box-text">Acessar</h2>
         <p class="form-text">Favor inserir login e senha.</p>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label class="form-text">Nome</label>
                <input type="text" name="nome" class="form-control" value="fatec">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label class="form-text">Senha</label>
                <input type="password" name="senha" class="form-control" value="portaria">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Acessar<span>&#x279D;</span></button>
            </div>
         </form>
            </div>
            <div class="right-box">
            <p class="right-box-text">Oferecido por: </p>
            <img src="imgs/Logo-cps.png" class="cps-logo">
            <img src="imgs/Logo-fatec-araras.png" class="fatec-logo">
            <h1 class="welcome">Faça seu login para usar o sistema.</h1>
        </div>
    </div>
    <a href="https://github.com/Vicrisfell/Projeto_CRUD_DSW2"><img class="rodape-icons" src="imgs/github-icon.svg" lin></img></a>
    
    </div>    

</body>
</html>
