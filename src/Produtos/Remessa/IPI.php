<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * IPI
 *
 * @pw_element string $cSitTribIPI Situação Tributária do IPI
 * @pw_element string $cTpCalcIPI Tipo de Cálculo para obter o IPI
 * @pw_element decimal $nBCIPI Base de Cálculo do IPI
 * @pw_element string $cEnqIPI Enquadramento do IPI
 * @pw_element decimal $nAliqIPI Alíquota do IPI (%)
 * @pw_element decimal $nQtdUTIPI Qtd Unidades Tributáveis
 * @pw_element decimal $nValIPIUT Valor do IPI por Unid. Tributável
 * @pw_element decimal $nValIPI Valor do IPI
 * @pw_complex IPI
 */
class IPI{
	/**
	 * Situação Tributária do IPI
	 *
	 * @var string
	 */
	public string $cSitTribIPI;
	/**
	 * Tipo de Cálculo para obter o IPI
	 *
	 * @var string
	 */
	public string $cTpCalcIPI;
	/**
	 * Base de Cálculo do IPI
	 *
	 * @var decimal
	 */
	public float $nBCIPI;
	/**
	 * Enquadramento do IPI
	 *
	 * @var string
	 */
	public string $cEnqIPI;
	/**
	 * Alíquota do IPI (%)
	 *
	 * @var decimal
	 */
	public float $nAliqIPI;
	/**
	 * Qtd Unidades Tributáveis
	 *
	 * @var decimal
	 */
	public float $nQtdUTIPI;
	/**
	 * Valor do IPI por Unid. Tributável
	 *
	 * @var decimal
	 */
	public float $nValIPIUT;
	/**
	 * Valor do IPI
	 *
	 * @var decimal
	 */
	public float $nValIPI;
}
