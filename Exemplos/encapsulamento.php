<?php

class Pessoa
{
	public $nome ="Luiz Felipe"; //Todo mundo vê.
	protected $idade = 24; //Somente a mesma classe e classe estendida.
	private $senha = "010203";//Só a mesma classe.

	public function verDados()
	{

		echo $this->nome .  "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}
}

class Programador extends Pessoa
{

	public function verDados()
	{
		echo get_class($this)."<br>";

		echo $this->nome  .	"<br>";
		echo $this->idade .	"<br>";
		echo $this->senha .	"<br>"; //ao colocar senha como private, essa linha apresentara erro.

	}
}


$objeto = new Programador();

//echo $objeto->idade . "<br/>";

$objeto->verDados();



?>