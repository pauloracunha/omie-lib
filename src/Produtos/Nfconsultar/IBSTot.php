<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Grupo de Valores Totais referentes ao IBS.
 *
 * @pw_element decimal $vIbsUf Valor total do IBS da UF.
 * @pw_element decimal $vIbsMunDif Valor total do diferimento do IBS do município.
 * @pw_element decimal $vIbsMun Valor total do IBS do município.
 * @pw_element decimal $vIbsCred Valor total do crédito presumido.
 * @pw_element decimal $vBCIbs Valor total da base de cálculo do IBS.
 * @pw_element decimal $vIbsUfDif Valor total do diferimento do IBS UF.
 * @pw_element decimal $vIbs Valor total do IBS.
 * @pw_complex IBSTot
 */
class IBSTot{
	/**
	 * Valor total do IBS da UF.
	 *
	 * @var decimal
	 */
	public float $vIbsUf;
	/**
	 * Valor total do diferimento do IBS do município.
	 *
	 * @var decimal
	 */
	public float $vIbsMunDif;
	/**
	 * Valor total do IBS do município.
	 *
	 * @var decimal
	 */
	public float $vIbsMun;
	/**
	 * Valor total do crédito presumido.
	 *
	 * @var decimal
	 */
	public float $vIbsCred;
	/**
	 * Valor total da base de cálculo do IBS.
	 *
	 * @var decimal
	 */
	public float $vBCIbs;
	/**
	 * Valor total do diferimento do IBS UF.
	 *
	 * @var decimal
	 */
	public float $vIbsUfDif;
	/**
	 * Valor total do IBS.
	 *
	 * @var decimal
	 */
	public float $vIbs;
}
