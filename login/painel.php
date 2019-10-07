<?php
 session_start();
include('verifica.php');

?>
Bem vindo ao painel,
<?php 


echo($_SESSION['nome']);

?>
<h2><a href="logout.php">Sair</a></h2>