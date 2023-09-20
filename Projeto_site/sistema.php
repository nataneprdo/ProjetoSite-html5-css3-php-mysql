<?php 
    session_start();
    //print_r($_SESSION);
    //se nao existe uma var email true e senha true, ele redirecionada para login
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

        //senao tiver ele alem de voltar pro login, ele do=estroi qualquer dado
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: http://localhost/cursophp/Projeto-cadastro/login.php');
    }
    //se existir ele vai jogar a var email
    $logado = $_SESSION['email'];
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
    .sistema-box {
        font-family: 'Montserrat';
        color: white;
        position: absolute;
        text-align: left;
        top: 50%;
        left: 50%;
        width: 650px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }

    .sistema-box h1 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 20pt;
    }
    .sistema-box p {
        font-family: 'Montserrat';
        font-size: 10pt;
        text-align: center;
    }

    .btn-sair {
        text-decoration: none;
        color: #03e9f4;
        font-family: 'Montserrat';
        font-size: 10pt;
        text-transform: uppercase;
    }
    .sub {
        margin-top: 50px;
        text-decoration: none;
        padding-top: 15px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        transition: .5s;
        background: #141e30;
        font-family: 'Montserrat';
        color: #03e9f4;
        font-size: 12pt;
        border: none;
        text-align: right;
        text-transform: uppercase;
    }

    .sub:hover{
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 100px #03e9f4;
    }

    .video {
        margin-top: 50px;
        margin-left: 5px;
        align-items: center;
        border-radius: 10px;
    }

</style>
<body>
    <div class="sistema-box">
        <h1>Confira o vídeo</h1>
        <p>Olá, <?=$logado?></p>
        <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/3hng-hmSv2Y?si=N2QPFGkiVO_-sBg6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="btn-sair">
                <a href="index.php">
                <input class="sub" type="submit" value="sair" name="sair" id="sair">
                </a>
            </div>
            
    </div>

    
</body>
</html>