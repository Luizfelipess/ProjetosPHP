<?php
namespace App\Vendas;
class Usuaurio
{
    public $nome , $idade;

    public function cadastrar($nome , $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;

    }

    public function imprimir()
    {
        $r = 'Nome: ' .$this->nome . '<br/>';
        $r .= 'Idade: ' .$this->idade  . '<br/>';

        return $r;
    }
}

    




?>