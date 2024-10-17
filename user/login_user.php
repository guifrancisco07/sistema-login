<?php
include_once("../connect-database/config.php"); 
    $conexao = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Login de Usuário</title>
</head>
<style>
        .tamanho{
          max-width: 600px;
          position: absolute;
          top: 40%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
</style>
<body>
<nav><br>
  <a>LOGIN</a>
</nav>
<center>

  <div class="tamanho">    
  <form action="verifica_usuario.php" method="POST">

  <input type="hidden" id="id" name="id" value="<?=$id?>"/>
    
    <br><br><br><br>
    <h1>LOGIN DE USER</h1><br>
      
      <label>LOGIN:<br>
        <input placeholder="Digite seu Login" type="text" name="login">
      </label><br><br>
     
      <label>SENHA:<br>
        <input placeholder="Digite sua Senha" type="password" class="form-control" name="senha">
      </label><br><br>

      <div>

    <a href="form_user.php">Cadastrar Agora</a>
    <br><br>
    <a><button class="btnEnviar" type="submit">ENVIAR</button></a><br><br>
    <a><button class="btnLimpar" type="reset">LIMPAR</button></a>
</form>

<a href="../index.php">
<button class="btnHome" type="button">
HOME
</button></a><br>

</form>
</center>
</body>
</html>