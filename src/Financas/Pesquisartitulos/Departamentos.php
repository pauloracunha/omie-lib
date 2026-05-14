<?php

namespace OmieLib\Financas\Pesquisartitulos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\Request\LtLinkBoletoRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtListarExcluidosRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtPesquisarRequest;
use OmieLib\Financas\Pesquisartitulos\Response\LtLinkBoletoResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtListarExcluidosResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtPesquisarResponse;

/**
 * Distribuição por departamentos.
 *
 * @pw_element string $cCodDepartamento Código do Departamento.
 * @pw_element decimal $nDistrPercentual Percentual da distribuição.
 * @pw_element decimal $nDistrValor Valor da distribuição.
 * @pw_element string $nValorFixo Indica que o valor foi fixado na distribuição (S/N).
 * @pw_complex departamentos
 */
class Departamentos{
	/**
	 * Código do Departamento.
	 *
	 * @var string
	 */
	public string $cCodDepartamento;
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
