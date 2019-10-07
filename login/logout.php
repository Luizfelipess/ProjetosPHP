<?php
//inicia a sessao
session_start();

//destroi todas as funcoes , uma somente , voce destroi com unsset.
session_destroy();
header ('Location: index.php');


?>