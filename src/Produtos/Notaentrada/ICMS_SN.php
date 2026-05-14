<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Informações do ICMS-Simples Nacional.
 *
 * @pw_element string $cSitTribSN Situação Tributária do ICMS
 * @pw_element string $cOrigem Origem
 * @pw_element decimal $nAliqCredSN Alíq. de Cálculo de Crédito (%)
 * @pw_element decimal $nCredSN Crédito do ICMS Aproveitado
 * @pw_element decimal $nBCSNST Base de Cálculo do ICMS Retido
 * @pw_element decimal $nValorSNST Valor do ICMS Retido por ST
 * @pw_element string $cModBCSN Modalidade da BC do ICMS
 * @pw_element decimal $nAliqRedBCSN Redução da BC do ICMS (%)
 * @pw_element decimal $nBCSN Base de Cálculo do ICMS
 * @pw_element decimal $nAliqSN Alíquota do ICMS (%)
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
	public float $nAliqCredSN;
	/**
	 * Crédito do ICMS Aproveitado
	 *
	 * @var decimal
	 */
	public float $nCredSN;
	/**
	 * Base de Cálculo do ICMS Retido
	 *
	 * @var decimal
	 */
	public float $nBCSNST;
	/**
	 * Valor do ICMS Retido por ST
	 *
	 * @var decimal
	 */
	public float $nValorSNST;
	/**
	 * Modalidade da BC do ICMS
	 *
	 * @var string
	 */
	public string $cModBCSN;
	/**
	 * Redução da BC do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqRedBCSN;
	/**
	 * Base de Cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $nBCSN;
	/**
	 * Alíquota do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqSN;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $nValorSN;
}
