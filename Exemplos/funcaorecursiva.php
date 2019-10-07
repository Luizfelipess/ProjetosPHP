<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio Gerente de vendas
					array(
						'nome_cargo'=>'gerente de Vendas'
					)
					//termino: Gerente de Vendas
				)
			),
			//termino: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//inicio: Gererente de Contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//Inicio:Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//Termino Supervisor de Pagamentos
						)
					),
					//Termino: Gerente de Contas a Pagar
					//Incio: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
							)
							//Termino: Supervisor de Suprimentos
						)
					)
				)
			)
			//Termino; Diretor Financeiro
		)
	)
);
function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
	

		$html .= "<li>";

			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ){

				$html .= exibe($cargo['subordinados']);
			}

		$html .= "</li>";
	}

	$html .='</ul>';

	return $html;
	
}
	echo exibe($hierarquia);

?>