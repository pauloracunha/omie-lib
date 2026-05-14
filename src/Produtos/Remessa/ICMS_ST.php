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
 * Informações do ICMS-ST.
 *
 * @pw_element string $cModBCST Modalidade da Base de Cálculo do ICMS Substituição Tributária
 * @pw_element decimal $nMargVrAd Margem de Valor Adicionado (%)
 * @pw_element decimal $nRedBCST Redução da BC do ICMS ST (%)
 * @pw_element decimal $nBCST Base de Cálculo do ICMS ST
 * @pw_element decimal $nAliqST Alíquota do ICMS ST (%)
 * @pw_element decimal $nAliqOP Alíq. do ICMS Oper. Própria (%)
 * @pw_element decimal $nValorST Valor do ICMS ST
 * @pw_complex ICMS_ST
 */
class ICMS_ST{
	/**
	 * Modalidade da Base de Cálculo do ICMS Substituição Tributária
	 *
	 * @var string
	 */
	public string $cModBCST;
	/**
	 * Margem de Valor Adicionado (%)
	 *
	 * @var decimal
	 */
	public float $nMargVrAd;
	/**
	 * Redução da BC do ICMS ST (%)
	 *
	 * @var decimal
	 */
	public float $nRedBCST;
	/**
	 * Base de Cálculo do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nBCST;
	/**
	 * Alíquota do ICMS ST (%)
	 *
	 * @var decimal
	 */
	public float $nAliqST;
	/**
	 * Alíq. do ICMS Oper. Própria (%)
	 *
	 * @var decimal
	 */
	public float $nAliqOP;
	/**
	 * Valor do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nValorST;
}
