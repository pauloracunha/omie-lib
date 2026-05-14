<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Grupo de Valores Totais referentes ao CBS.
 *
 * @pw_element decimal $vCbs Valor total da CBS.
 * @pw_element decimal $vCbsDif Valor total do diferimento da CBS
 * @pw_element decimal $vCbsCred Valor total do crédito presumido.
 * @pw_element decimal $vCBCbs Valor total da base de cálculo do IBS.
 * @pw_complex CBSTot
 */
class CBSTot{
	/**
	 * Valor total da CBS.
	 *
	 * @var decimal
	 */
	public float $vCbs;
	/**
	 * Valor total do diferimento da CBS
	 *
	 * @var decimal
	 */
	public float $vCbsDif;
	/**
	 * Valor total do crédito presumido.
	 *
	 * @var decimal
	 */
	public float $vCbsCred;
	/**
	 * Valor total da base de cálculo do IBS.
	 *
	 * @var decimal
	 */
	public float $vCBCbs;
}
