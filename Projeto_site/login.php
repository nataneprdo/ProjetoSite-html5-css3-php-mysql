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
    .login-box {
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
    .login-box h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 20pt;
    }
    .login-box p {
        font-family: 'Montserrat';
        font-size: 10pt;
        text-align: center;
    }

    .login-box .input {
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
    <div class="login-box">
        <form action="testeLogin.php" method="POST">
            <h2>Login</h2>
            <p>Entre e confira o vídeo</p>
            <div>
                <label for="email"><br>Email</label>
                <input type="text" name="email" id="email" class="input" required>
            </div>
            <div >
                <label for="senha"><br>Senha</label>
                <input type="password" name="senha" id="senha" class="input" required>
            </div>
            <a href="">
                <input class="submit" type="submit" value="entrar" name="submit" id="submit">
            </a>
        </form>
    </div>
</body>
</html>