<?php

use App\Vendas\Usuario;
use App\Vendas\Compra;
use App\Vendas\Produtos;
use App\Estoque\Estoque;
use App\Estoque\Produto;

require_once 'vendor/autoload.php';

    $cli = new Usuario();
    $cli->cadastrar('Luiz Felipe','24');

    $prod1 = new Produtos();
    $prod2 = new Produtos();

    $prod1->cadastrar('1' , 'Produto 1');
    $prod2->cadastrar('2' , 'Produto 2');

    $compra = new Compra();

    $compra->cadastrar(
        array(
            'p1'=>$prod1,
            'p2'=>$prod2

        ) , $cli
    );

    echo $compra->imprimir();

    $estoque = new Estoque();

    echo $estoque->getTotal();








?>