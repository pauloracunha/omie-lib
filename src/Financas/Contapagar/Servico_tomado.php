<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Informações da aba de Serviço Tomado da Ordem de Serviço.
 *
 * @pw_element string $numero_nf Número da Nota Fiscal.
 * @pw_element string $serie_nf Série da Nota Fiscal.
 * @pw_element string $codigo_servico Código do serviço (LC116).
 * @pw_element decimal $valor_nf Valor total da Nota Fiscal.
 * @pw_element string $cst_pis CST do PIS (Código da Situação Tributária).
 * @pw_element decimal $base_pis Base de cálculo do PIS.
 * @pw_element decimal $aliquota_pis Alíquota do PIS (%).
 * @pw_element decimal $valor_pis Valor do PIS.
 * @pw_element string $cst_cofins CST do COFINS (Código da Situação Tributária).
 * @pw_element decimal $base_cofins Base de cálculo do COFINS.
 * @pw_element decimal $aliquota_cofins Alíquota do COFINS (%).
 * @pw_element decimal $valor_cofins Valor do PIS.
 * @pw_complex servico_tomado
 */
class Servico_tomado{
	/**
	 * Número da Nota Fiscal.
	 *
	 * @var string
	 */
	public string $numero_nf;
	/**
	 * Série da Nota Fiscal.
	 *
	 * @var string
	 */
	public string $serie_nf;
	/**
	 * Código do serviço (LC116).
	 *
	 * @var string
	 */
	public string $codigo_servico;
	/**
	 * Valor total da Nota Fiscal.
	 *
	 * @var decimal
	 */
	public float $valor_nf;
	/**
	 * CST do PIS (Código da Situação Tributária).
	 *
	 * @var string
	 */
	public string $cst_pis;
	/**
	 * Base de cálculo do PIS.
	 *
	 * @var decimal
	 */
	public float $base_pis;
	/**
	 * Alíquota do PIS (%).
	 *
	 * @var decimal
	 */
	public float $aliquota_pis;
	/**
	 * Valor do PIS.
	 *
	 * @var decimal
	 */
	public float $valor_pis;
	/**
	 * CST do COFINS (Código da Situação Tributária).
	 *
	 * @var string
	 */
	public string $cst_cofins;
	/**
	 * Base de cálculo do COFINS.
	 *
	 * @var decimal
	 */
	public float $base_cofins;
	/**
	 * Alíquota do COFINS (%).
	 *
	 * @var decimal
	 */
	public float $aliquota_cofins;
	/**
	 * Valor do PIS.
	 *
	 * @var decimal
	 */
	public float $valor_cofins;
}
