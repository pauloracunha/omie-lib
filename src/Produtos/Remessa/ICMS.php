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
 * Informações do ICMS.
 *
 * @pw_element string $cSitTrib Situação Tributária do ICMS
 * @pw_element string $cOrigem Origem
 * @pw_element string $cModBC Modalidade da Base de Cálculo do ICMS Substituição Tributária
 * @pw_element decimal $nRedBC Redução da BC do ICMS (%)
 * @pw_element decimal $nBC Base de Calculo do ICMS
 * @pw_element decimal $nAliq Alíquota de ICMS
 * @pw_element decimal $nValor Valor do ICMS
 * @pw_complex ICMS
 */
class ICMS{
	/**
	 * Situação Tributária do ICMS
	 *
	 * @var string
	 */
	public string $cSitTrib;
	/**
	 * Origem
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Modalidade da Base de Cálculo do ICMS Substituição Tributária
	 *
	 * @var string
	 */
	public string $cModBC;
	/**
	 * Redução da BC do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nRedBC;
	/**
	 * Base de Calculo do ICMS
	 *
	 * @var decimal
	 */
	public float $nBC;
	/**
	 * Alíquota de ICMS
	 *
	 * @var decimal
	 */
	public float $nAliq;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $nValor;
}
