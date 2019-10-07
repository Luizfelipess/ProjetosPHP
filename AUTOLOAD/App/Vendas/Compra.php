<?php
namespace App\Vendas;

class Compra
{
    public $id , $produtos , $usuario; 

    public function cadastrar (array $produtos , Cliente $usuario)
    {
        $this->id = rand(0 , 1000);
        $this->produtos = $produtos;
        $this->usuario = $usuario;
    }

    public function imprimir()
    {
        $r = 'Codigo da compra' . $this->id . '<br/>' ;
        $r .= 'Produtos: ' . '<br/>';

        foreach ($this->produtos as $produto)
        {
           $r.= $produto->imprimir();
         
        }

        $r.= '<hr>';
        $r.= $this->usuario->imprimir();

        return $r;
        
       
    }
}











?>
