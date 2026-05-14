<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Rateio do Pedido de Compra por departamento
 *
 * @pw_element string $cCodDepto Código do Departamento
 * @pw_element decimal $nPerc Percentual de rateio
 * @pw_complex departamentos_alterar
 */
class Departamentos_alterar{
	/**
	 * Código do Departamento
	 *
	 * @var string
	 */
	public string $cCodDepto;
	/**
	 * Percentual de rateio
	 *
	 * @var decimal
	 */
	public float $nPerc;
}
