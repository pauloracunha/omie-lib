<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Rateio de Categoria
 *
 * @pw_element string $codigo_categoria Código da Categoria
 * @pw_element decimal $valor Valor do Rateio
 * @pw_element decimal $percentual Percentual da categoria
 * @pw_complex categorias
 */
class Categorias{
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $codigo_categoria;
	/**
	 * Valor do Rateio
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Percentual da categoria
	 *
	 * @var decimal
	 */
	public float $percentual;
}
