<?php
    session_start();
    include_once("../connect-database/config.php"); 
    $conexao = conectar();

    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    

    if($login != '' and $senha != ''){
        $sql = "SELECT * FROM tb_usuario
                WHERE login = '$login' AND senha = '$senha'";

        $res = mysqli_query($conexao, $sql);
        $linha = mysqli_num_rows($res);
        if($linha > 0){
            //DEU CERTO O LOGIN
            $_SESSION['login'] = $_POST['login'];
            //redireciona home
            echo "<script language='javascript'>
            alert('Usuário Logado com Sucesso!')
            window.location.href='../index.php'
            </script>";
        }else{
            //nao deu certo, redireciona
            echo "<script language='javascript'>
            alert('Usuário ou senha incorretos.')
            window.location.href='./login_user.php'
            </script>";
        }
    }
        else{
            echo "<script language='javascript'>
            alert('Usuário ou senha devem ser preenchidos.')
            window.location.href='./login_user.php'
            </script>";
        } 
?>