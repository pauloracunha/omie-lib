<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Grupo de Retenções de Tributos
 *
 * @pw_element decimal $vRetPIS Valor Retido de PIS
 * @pw_element decimal $vRetCOFINS Valor Retido de COFINS
 * @pw_element decimal $vRetCSLL Valor Retido de CSLL
 * @pw_element decimal $vBCIRRF Base de Cálculo do IRRF
 * @pw_element decimal $vIRRF Valor Retido do IRRF
 * @pw_element decimal $vBCRetPrev Base de Cálculo da Retenção da Previdência Social
 * @pw_element decimal $vRetPrev Valor da Retenção da Previdência Social
 * @pw_complex retTrib
 */
class RetTrib{
	/**
	 * Valor Retido de PIS
	 *
	 * @var decimal
	 */
	public float $vRetPIS;
	/**
	 * Valor Retido de COFINS
	 *
	 * @var decimal
	 */
	public float $vRetCOFINS;
	/**
	 * Valor Retido de CSLL
	 *
	 * @var decimal
	 */
	public float $vRetCSLL;
	/**
	 * Base de Cálculo do IRRF
	 *
	 * @var decimal
	 */
	public float $vBCIRRF;
	/**
	 * Valor Retido do IRRF
	 *
	 * @var decimal
	 */
	public float $vIRRF;
	/**
	 * Base de Cálculo da Retenção da Previdência Social
	 *
	 * @var decimal
	 */
	public float $vBCRetPrev;
	/**
	 * Valor da Retenção da Previdência Social
	 *
	 * @var decimal
	 */
	public float $vRetPrev;
}
