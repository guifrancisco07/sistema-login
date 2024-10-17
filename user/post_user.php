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
    include_once("../connect-database/config.php"); 
    $conexao = conectar();

    if(!$conexao){ 
        echo 'Não foi possível Conectar no Banco de Dados';
        exit; 
    }

    // Escapando e lendo as variáveis
    $id = (int)$_POST['id'];
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $login = mysqli_real_escape_string($conexao, strtolower($_POST['login']));
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $tipo = mysqli_real_escape_string($conexao, $_POST['tipo']);

    // Verificação de campos vazios
    if (empty($nome) || empty($login) || empty($senha) || empty($tipo)) {
        echo "Preencha todos os campos!";
        exit;
    }

    // Instrução SQL
    if ($id == 0){
        $sql = "
            INSERT INTO tb_usuario (nome, login, senha, tipo) 
            VALUES ('$nome','$login','".md5($senha)."','$tipo');
        ";
    } else {
        $sql = "
            UPDATE tb_usuario SET 
                nome  = '$nome',
                login = '$login',
                senha = '".md5($senha)."',
                tipo  = '$tipo'
            WHERE id = $id;
        ";
    }

    $execute = mysqli_query($conexao, $sql);
    
    if ($execute){
        echo "<b><h1>Cadastrado com Sucesso!</h1></b>"; 
    } else {
        echo "<b><h1>Erro ao Cadastrar: " . mysqli_error($conexao) . "</h1></b>";  // Melhor debug
    }
?>
<br>
<!--BOTÕES-->
<a href="../index.php">
<button class="btnHome" type="button">
HOME
</button></a><br>
</div></center>
</body>