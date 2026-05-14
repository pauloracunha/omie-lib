<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Cadastro de Distribuição por Departamento
 *
 * @pw_element string $codigo_tipo_credito Código do Tipo do Crédito, conforme Tabela 4.3.6.
 * @pw_element string $conta_financeira Conta Financeira
 * @pw_element string $codigo_base_calculo Código da Base de Cálculo do Crédito
 * @pw_element integer $cst_cofins Código da Situação Tributária do COFINS
 * @pw_element integer $cst_pis Código da Situação Tributária do PIS
 * @pw_element string $job Job
 * @pw_element decimal $percentual_rateio Percentual do rateio
 * @pw_element string $codigo_departamento Código do Departamento
 * @pw_element decimal $valor Valor do rateio
 * @pw_element string $valor_fixado Indica que o valor foi fixado na distribuição do rateio
 * @pw_element string $codigo_contribuicao_social Código da contribuição social apurada no período, conforme a Tabela 4.3.5.
 * @pw_element integer $chave_lancamento Chave do Lançamento na PAGREC
 * @pw_complex rateio_cadastro
 */
class Rateio_cadastro{
	/**
	 * Código do Tipo do Crédito, conforme Tabela 4.3.6.
	 *
	 * @var string
	 */
	public string $codigo_tipo_credito;
	/**
	 * Conta Financeira
	 *
	 * @var string
	 */
	public string $conta_financeira;
	/**
	 * Código da Base de Cálculo do Crédito
	 *
	 * @var string
	 */
	public string $codigo_base_calculo;
	/**
	 * Código da Situação Tributária do COFINS
	 *
	 * @var integer
	 */
	public int $cst_cofins;
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var integer
	 */
	public int $cst_pis;
	/**
	 * Job
	 *
	 * @var string
	 */
	public string $job;
	/**
	 * Percentual do rateio
	 *
	 * @var decimal
	 */
	public float $percentual_rateio;
	/**
	 * Código do Departamento
	 *
	 * @var string
	 */
	public string $codigo_departamento;
	/**
	 * Valor do rateio
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Indica que o valor foi fixado na distribuição do rateio
	 *
	 * @var string
	 */
	public string $valor_fixado;
	/**
	 * Código da contribuição social apurada no período, conforme a Tabela 4.3.5.
	 *
	 * @var string
	 */
	public string $codigo_contribuicao_social;
	/**
	 * Chave do Lançamento na PAGREC
	 *
	 * @var integer
	 */
	public int $chave_lancamento;
}
