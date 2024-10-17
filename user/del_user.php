<style>
        .tamanhoE{
            /*tamanho*/
            border: 0px;        /*borda*/
            border-radius: 5px; /*arredondamento*/
            width: 50%;         /*largura*/
            padding: 25%;      /*altura*/
        }
</style>
<link rel="stylesheet" href="../estilo.css">  
<body><center>
    <div class="tamanhoE">
<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("../connect-database/config.php"); 
    $conexao = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM tb_usuario WHERE id = $id";
$execute = mysqli_query($conexao,$sql);
    
        if ($execute){
            echo '
            <b><h1>Excluído Com<br>Sucesso!</h1></b>
            '; } //<li> cria um tópico
    
        else{
            echo '
            <b><h1>Erro Ao Excluir</h1></b>
            '; } //<li> cria um tópico

?>
<!--BOTÕES-->

<a href="list_user.php">
<button class="btnCads" type="button">
LISTA
</button></a>
<a href="../index.php">
<button class="btnHome" type="button">
HOME
</button></a><br>    
</div>
</body>