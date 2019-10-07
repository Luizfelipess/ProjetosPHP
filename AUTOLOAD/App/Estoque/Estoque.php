<?php
namespace App\Estoque;

class Estoque{
 
    private $total;
    
    
    public function __constructor()
    {
        $this->total = rand(0,5000);
    }

    public function getTotal()
    {
		return $this->total;
	}

	public function setTotal ($total) {
		$this->total = total;
	}






}






?>