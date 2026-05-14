<?php

namespace OmieLib\Financas\Mf;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Mf\Request\MfListarRequest;
use OmieLib\Financas\Mf\Response\MfListarResponse;

/**
 * Distribuição por Categorias.
 *
 * @pw_element string $cCodCateg Código da Categoria.
 * @pw_element decimal $nDistrPercentual Percentual da distribuição.
 * @pw_element decimal $nDistrValor Valor da distribuição.
 * @pw_element string $nValorFixo Indica que o valor foi fixado na distribuição (S/N).
 * @pw_complex categorias
 */
class Categorias{
	/**
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Percentual da distribuição.
	 *
	 * @var decimal
	 */
	public float $nDistrPercentual;
	/**
	 * Valor da distribuição.
	 *
	 * @var decimal
	 */
	public float $nDistrValor;
	/**
	 * Indica que o valor foi fixado na distribuição (S/N).
	 *
	 * @var string
	 */
	public string $nValorFixo;
}
