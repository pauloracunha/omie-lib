<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Informações do boleto.
 *
 * @pw_element string $cGerado Gerou boleto (S/N)?
 * @pw_element string $dDtEmBol Data de emissão do boleto.
 * @pw_element string $cNumBoleto Número do boleto.
 * @pw_element string $cNumBancario Número bancário do boleto.
 * @pw_element decimal $nPerJuros Percentual de juros.
 * @pw_element decimal $nPerMulta Percentual de multa.
 * @pw_complex boleto
 */
class Boleto{
	/**
	 * Gerou boleto (S/N)?
	 *
	 * @var string
	 */
	public string $cGerado;
	/**
	 * Data de emissão do boleto.
	 *
	 * @var string
	 */
	public string $dDtEmBol;
	/**
	 * Número do boleto.
	 *
	 * @var string
	 */
	public string $cNumBoleto;
	/**
	 * Número bancário do boleto.
	 *
	 * @var string
	 */
	public string $cNumBancario;
	/**
	 * Percentual de juros.
	 *
	 * @var decimal
	 */
	public float $nPerJuros;
	/**
	 * Percentual de multa.
	 *
	 * @var decimal
	 */
	public float $nPerMulta;
}
