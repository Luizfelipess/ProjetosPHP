<?php
session_star();
include("conexao.php");

$nome = mysql_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysql_real_escape_string ($conexao, $_POST['senha']);


$sql = "";

?>