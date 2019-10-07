
<?php

Interface Veiculo
{
	public function acelerar ($velocidade);
	public function frenar ($velocidade);
	public function trocarMarcha ($marcha);
}

abstract class Automovel implements Veiculo{


	public function acelerar($velocidade)
	{

	echo "O veiculo acelerou até " . $velocidade . "km/h";

	}

	public function frenar($velocidade)
	{
	
	echo "O veiculo frenou até" . $velocidade . "km/h";

	}


	public function trocarMarcha($marcha)
	{

	echo "O veiculo engatou a marcha " . $marcha ;

	}
}

class Onix extends automovel{

 public function empurrar()
 {


 }

}

$carro = new Onix();

$carro->acelerar(180);

?>