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
    .home-box {
        font-family: 'Montserrat';
        color: white;
        position: absolute;
        text-align: center;
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
    .home-p {
        font-size: 10pt;
        margin-top: 50px;
    }
    .home-h2 {
        font-size: 15pt;
    }
    .home-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        margin-left: 10px;
        letter-spacing: 4px;
        text-decoration: none;
    }


    .home-box a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
    }

    .home-box a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent,#03e9f4);
    animation: btn-anim1 1s linear infinite;
  }
</style>

<body>
    <div class="home-box">
        <h2 class="home-h2">Olá! <br> Acesse o meu site e confira o vídeo </h2>
        <p class="home-p">Faça login e vejo o vídeo. Caso não tenha se cadastrado, cadastre-se logo abaixo.</p>
        <form>
            <a href="login.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
            </a>
            <a href="cadastro.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Cadastro
            </a>
        </form>
    </div>
    
</body>
</html>