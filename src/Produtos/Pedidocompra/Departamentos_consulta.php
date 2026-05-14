<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Departamentos do Pedido de Compras
 *
 * @pw_element string $cCodDepto Código do Departamento
 * @pw_element decimal $nPerc Percentual de rateio
 * @pw_element decimal $nValor Valor do rateio
 * @pw_complex departamentos_consulta
 */
class Departamentos_consulta{
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
	/**
	 * Valor do rateio
	 *
	 * @var decimal
	 */
	public float $nValor;
}
