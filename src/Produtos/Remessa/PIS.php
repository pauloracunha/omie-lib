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
 * PIS
 *
 * @pw_element string $cSitTribPIS Situação Tributária doPIS
 * @pw_element string $cTpCalcPIS Tipo de Cálculo para obter o PIS
 * @pw_element decimal $nBCPIS Base de Cálculo do PIS
 * @pw_element decimal $nAliqPIS Alíquota do PIS (%)
 * @pw_element decimal $nQtdUTPIS Qtd Unidades Tributáveis
 * @pw_element decimal $nValPISUT Valor do PIS por Unid. Tributável
 * @pw_element decimal $nValPIS Valor do PIS
 * @pw_complex PIS
 */
class PIS{
	/**
	 * Situação Tributária doPIS
	 *
	 * @var string
	 */
	public string $cSitTribPIS;
	/**
	 * Tipo de Cálculo para obter o PIS
	 *
	 * @var string
	 */
	public string $cTpCalcPIS;
	/**
	 * Base de Cálculo do PIS
	 *
	 * @var decimal
	 */
	public float $nBCPIS;
	/**
	 * Alíquota do PIS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqPIS;
	/**
	 * Qtd Unidades Tributáveis
	 *
	 * @var decimal
	 */
	public float $nQtdUTPIS;
	/**
	 * Valor do PIS por Unid. Tributável
	 *
	 * @var decimal
	 */
	public float $nValPISUT;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $nValPIS;
}
