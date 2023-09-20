<?php 

if(isset($_POST['submit'])){
    //print_r('Nome: '.$_POST['nome']);
    //print_r('<br>');
    //print_r('Email: '.$_POST['email']);
    //print_r('<br>');
    //print_r('Senha: '.$_POST['senha']);
    //print_r('<br>');

    include_once 'config.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO dbTable (nome, email, senha) VALUES ('$nome', '$email', '$senha') ");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/video_1179069.ico" type="image/x-icon"> 
    <title>SITE | NP</title>
</head>
<style>
    html {
    height: 100%;
    }
    body {
        margin:0;
        padding:0;
        background: linear-gradient(#141e30, #243b55);
    }
    .cadastro-box {
        font-family: 'Montserrat';
        color: white;
        position: absolute;
        text-align: left;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }
    .cadastro-box h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 15pt;
    }
    .cadastro-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        transition: .5s;
        margin-top: 40px;
        margin-left: 10px;
        letter-spacing: 4px;
        text-decoration: none;
        
    }
    .cadastro-box .input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #ffffff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #ffffff;
        outline:0;
        background: transparent;
        cursor: text;
    }
    
    .page .voltar {
        border: none;
        background: #141e30;
        text-decoration: none;
        color: #03e9f4;
        font-family: 'Montserrat';
        font-size: 11pt;
        text-transform: uppercase;
        padding-top: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        padding-left: 15px;
        transition: .5s;
        
    }

    .page .voltar:hover{
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 100px #03e9f4;
    }

    .submit {
        text-decoration: none;
        padding-top: 15px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        transition: .5s;
        background: #141e30;
        font-family: 'Montserrat';
        color: #03e9f4;
        font-size: 13pt;
        border: none;
        text-align: right;
        text-transform: uppercase;
    }

    .submit:hover{
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 100px #03e9f4;
    }

    header {
        margin-top: 20px;
        margin-left: 10px;
    }
    
</style>

<body>
    <header>
        <div class="page">
            <a class="voltar" href="index.php">Página anterior</a>
        </div>
    </header>
    <div class="cadastro-box">
        <form action="cadastro.php" method="POST">
            <h2>Cadastro</h2>
            <div>
                <label for="nome"><br>Nome Completo</label>
                <input type="text" name="nome" id="nome" class="input" required>
            </div>
            <div>
                <label for="email"><br>Email</label>
                <input type="text" name="email" id="email" class="input" required>
            </div>
            <div >
                <label for="senha"><br>Senha</label>
                <input type="password" name="senha" id="senha" class="input" required>
            </div>
            <a href="">
                <input class="submit" type="submit" value="Cadastrar" name="submit" id="submit">
            </a>
        </form>
    </div>
        
</body>
</html>