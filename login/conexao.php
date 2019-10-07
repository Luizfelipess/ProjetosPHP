<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'luizsilva');
define('SENHA', 'abc123');
define('DB', 'login');
/*
*  este foi o primeiro sistema que fiz, por isso eu coloquei com o define.
**/
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar!');
?>
