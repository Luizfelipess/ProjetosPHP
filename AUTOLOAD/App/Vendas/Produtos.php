<?php
namespace App\Vendas;

class Produtos
{
    public $id , $descricao;

    public function cadastrar ($id , $descricao)
    {
        $this->id = $id;
        $this->descricao = $descricao;
    }

    public function imprimir()
    {
        $r = 'Codigo do produto: ' . $this->id . ' | ';
        $r .= 'Descrição: ' . $this->descricao . '<br/>' ;

        return $r;
    }



}




?>