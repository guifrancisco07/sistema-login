<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("../connect-database/config.php"); 
    $conexao = conectar();

    if(!$conexao /*== true*/){ 
        echo 'Não foi possível Conectar no Banco de Dados';
        exit; }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">    
    <title>Lista</title>
</head>

<body><center>

<h1>LISTA DE CADASTROS</h1>
<br>
<table width="80%">
    <thead>
        <tr>
           <!-- <th> ID </th> -->
                <th> NOME </th>
                <th> LOGIN </th>
                <th> SENHA </th>
                <th> TIPO </th>
        </tr>
    </thead>
    <tbody> 
        <?php
        $sql = "SELECT * FROM tb_usuario;";
        $query = mysqli_query($conexao,$sql);
        while ($row = mysqli_fetch_assoc($query)){ // comando que era da linha 43 = <td>'.$row['id'].'</td>
            echo '
                <tr>
                    <td>'.$row['nome'].'</td>
                    <td>'.$row['login'].'</td>
                    <td>Senha Protegida</td>
                    <td>'.$row['tipo'].'</td>
                    
                    <td>
                    <a href="edit_form.php?id='.$row['id'].'">
                    <button class="btnEditar" type="button">
                    <img class="formatImg" src="../img/icones/edit.png">
                    </button></a></td>

                    <td>
                    <a href="del_user.php?id='.$row['id'].'">
                    <button class="btnExcluir" type="button">
                    <img class="formatImg" src="../img/icones/excluir.png">
                    </button></a></td>
                </tr>
            '; }
        ?>
    </tbody>
    </table>
<br>
<!--BOTÕES-->
<a href="form_user.php">
<button class="btnCads" type="button">
CADASTRAR
</button></a>
<br><br>
<a href="../index.php">
<button class="btnHome" type="button">
HOME
</button></a><br>
</body>