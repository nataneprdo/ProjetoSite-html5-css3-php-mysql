<?php 
//sempre que tiver uma sessão deve-se abrir uma session_start
session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['senha'])){
        //ACESSA
        include_once 'config.php';
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: '.$email);
        //print_r('<br>');
        //print_r('Senha : '.$senha);
        $sql = "SELECT * FROM dbTable WHERE email = '$email' and '$senha' = senha";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1){

            //destroi os dados 
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else {
            //se identificar o email e senha 
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else {
        //NAO ACESSA
        header('Location: login.php');
    }


    

?>