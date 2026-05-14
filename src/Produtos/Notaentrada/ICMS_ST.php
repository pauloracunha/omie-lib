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
 * Informações do ICMS-ST
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
