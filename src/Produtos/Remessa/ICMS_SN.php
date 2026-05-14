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
 * Informações do ICMS-Simples Nacional.
 *
 * @pw_element string $cSitTribSN Situação Tributária do ICMS
 * @pw_element string $cOrigem Origem
 * @pw_element decimal $nAliqSN Alíq. de Cálculo de Crédito (%)
 * @pw_element decimal $nCredSN Crédito do ICMS Aproveitado
 * @pw_element decimal $nBCSN Base de Calculo do ICMS
 * @pw_element decimal $nValorSN Valor do ICMS
 * @pw_complex ICMS_SN
 */
class ICMS_SN{
	/**
	 * Situação Tributária do ICMS
	 *
	 * @var string
	 */
	public string $cSitTribSN;
	/**
	 * Origem
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Alíq. de Cálculo de Crédito (%)
	 *
	 * @var decimal
	 */
	public float $nAliqSN;
	/**
	 * Crédito do ICMS Aproveitado
	 *
	 * @var decimal
	 */
	public float $nCredSN;
	/**
	 * Base de Calculo do ICMS
	 *
	 * @var decimal
	 */
	public float $nBCSN;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $nValorSN;
}
