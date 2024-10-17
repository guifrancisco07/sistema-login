<?php
    include_once("../connect-database/config.php"); 
    $conexao = conectar();

  $id = isset($_GET['id']) ? $_GET['id'] : 0;  

  $nome = '';
  $login = '';
  $senha = '';
  $tipo = '';

  $sql = "SELECT * FROM tb_usuario WHERE id = $id;";
  $query = mysqli_query($conexao,$sql);

while($row = mysqli_fetch_assoc($query)){
  $nome   = $row['nome'];
  $login  = $row['login'];
  $senha  = $row['senha'];
  $tipo   = $row['tipo'];
  }
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
  <a>EDITAR CADASTRO</a>
</nav>
<center>
        
  <div class="tamanho">    
  <form action="post_user.php" method="POST">

  <input type="hidden" id="id" name="id" value="<?=$id?>"/>
    
    <br><br><br><br>
    <a style="font-size: 25px; line-height: 25px;">
      EDIÇÃO DE</a><br>
    
    <a style="font-size: 30px; line-height: 25px;">
      CADASTRO</a><br>
    
    <a style="font-size: 25px; line-height: 25px;">
      DE USER</a><br><br>

      <label>NOME:<br>
        <input autofocus placeholder="Digite seu Nome" type="text" name="nome" value="<?=$nome?>" required>
      </label><br><br>
      
      <label>LOGIN:<br>
        <input placeholder="Digite seu Login" type="text" name="login" value="<?=$login?>" required>
      </label><br><br>
     
      <label>SENHA:<br>
        <input placeholder="Digite a Nova Senha" type="password" minlenght="8" maxlength="30" class="form-control" name="senha" required>
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