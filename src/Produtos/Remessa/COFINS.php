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
 * COFINS
 *
 * @pw_element string $cSitTribCOFINS Situação Tributária do COFINS
 * @pw_element string $cTpCalcCOFINS Tipo de Cálculo para obter o COFINS
 * @pw_element decimal $nBCCOFINS Base de Cálculo do COFINS
 * @pw_element decimal $nAliqCOFINS Alíquota do COFINS (%)
 * @pw_element decimal $nQtdUTCOFINS Qtd Unidades Tributáveis
 * @pw_element decimal $nVaCOFINSSUT Valor do COFINS Unid. Tributável
 * @pw_element decimal $nValCOFINS Valor do COFINS
 * @pw_complex COFINS
 */
class COFINS{
	/**
	 * Situação Tributária do COFINS
	 *
	 * @var string
	 */
	public string $cSitTribCOFINS;
	/**
	 * Tipo de Cálculo para obter o COFINS
	 *
	 * @var string
	 */
	public string $cTpCalcCOFINS;
	/**
	 * Base de Cálculo do COFINS
	 *
	 * @var decimal
	 */
	public float $nBCCOFINS;
	/**
	 * Alíquota do COFINS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqCOFINS;
	/**
	 * Qtd Unidades Tributáveis
	 *
	 * @var decimal
	 */
	public float $nQtdUTCOFINS;
	/**
	 * Valor do COFINS Unid. Tributável
	 *
	 * @var decimal
	 */
	public float $nVaCOFINSSUT;
	/**
	 * Valor do COFINS
	 *
	 * @var decimal
	 */
	public float $nValCOFINS;
}
