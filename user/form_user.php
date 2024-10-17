<?php
    include_once("../connect-database/config.php"); 
    $conexao = conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../estilo.css">   

    <title>Form User</title>
    
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
  <a>CADASTRO</a>
</nav>
<center>
        
  <div class="tamanho">    
  <form action="post_user.php" method="POST">

  <input type="hidden" id="id" name="id"/>
    
    <br><br><br><br>
    <h1>CADASTRO DE USER</h1><br>

      <label>NOME:<br>
        <input autofocus placeholder="Digite seu Nome" type="text" name="nome" required>
      </label><br><br>
      
      <label>LOGIN:<br>
        <input placeholder="Digite seu Login" type="text" name="login" required>
      </label><br><br>
     
      <label>SENHA:<br>
        <input placeholder="Digite sua Senha" type="password" minlenght="8" maxlength="30" class="form-control" name="senha" required>
      </label><br><br>

      <div>
    
      <label>TIPO:</label><br>
        <select name="tipo" required>
          <option value="">Selecione o Tipo</option>
          <option value="Admin">Admin</option>
          <option value="Usuário">Usuário</option>
          <option value="Funcionário">Funcionário</option>
        </select><br><br>

    <a><button class="btnEnviar" type="submit">ENVIAR</button></a><br><br>
    <a><button class="btnLimpar" type="reset">LIMPAR</button></a>
</form>

<a href="../index.php">
<button class="btnHome" type="button">
HOME
</button></a><br> 

</center>
</div>
</body>
</html>