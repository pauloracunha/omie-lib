<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Detalhamento específico para cadastro de medicamentos
 *
 * @pw_element string $cod_anvisa Código de produto Anvisa
 * @pw_element decimal $preco_max_cons Preço máximo consumidor
 * @pw_complex medicamento
 */
class Medicamento{
	/**
	 * Código de produto Anvisa
	 *
	 * @var string
	 */
	public string $cod_anvisa;
	/**
	 * Preço máximo consumidor
	 *
	 * @var decimal
	 */
	public float $preco_max_cons;
}
