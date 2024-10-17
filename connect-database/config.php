<?php

function conectar(){
  $servidor = "localhost";
  $user = "root";
  $passwd = "";
  $database = "bdUser353";
  $conexao = mysqli_connect($servidor, $user, $passwd, $database);
  return $conexao;
}
?>