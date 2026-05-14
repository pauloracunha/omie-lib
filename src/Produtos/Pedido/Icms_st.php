<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * ICMS - Substituição Tributária.
 *
 * @pw_element string $cod_sit_trib_icms_st NFe - Situação Tributária
 * @pw_element string $modalidade_icms_st NFe - Código da Modalidade de determinação da Base de Cálculo do ICMS ST
 * @pw_element decimal $perc_red_base_icms_st Percentual de redução da base de cálculo do ICMS
 * @pw_element decimal $base_icms_st Base de cálculo do ICMS Substituição Tributária
 * @pw_element decimal $aliq_icms_st Alíquota do ICMS Substituição Tributária
 * @pw_element decimal $margem_icms_st Percentual da margem do valor adicionado da base de cálculo do ICMS ST
 * @pw_element decimal $valor_icms_st Valor do ICMS Substituição Tributária
 * @pw_element decimal $aliq_icms_opprop Alíquota de ICMS Operação Própria.
 * @pw_element decimal $perc_red_base_icms_op Percentual de redução de base de cálculo de Icms Operação Própria.
 * @pw_element string $cest CEST - Código Especificador da Substituíção Tributária.<BR>Preenchimento Opcional
 * @pw_element decimal $perc_fcp_icms_st Percentual do FCP - Fundo de Combate a Pobreza do ICMS ST.
 * @pw_element decimal $base_fcp_icms_st Base de Cálculo do FCP - Fundo de Combate a Pobreza do ICMS ST.
 * @pw_element decimal $valor_fcp_icms_st Valor do FCP - Fundo de Combate a Pobreza do ICMS ST.
 * @pw_complex icms_st
 */
class Icms_st{
	/**
	 * NFe - Situação Tributária
	 *
	 * @var string
	 */
	public string $cod_sit_trib_icms_st;
	/**
	 * NFe - Código da Modalidade de determinação da Base de Cálculo do ICMS ST
	 *
	 * @var string
	 */
	public string $modalidade_icms_st;
	/**
	 * Percentual de redução da base de cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $perc_red_base_icms_st;
	/**
	 * Base de cálculo do ICMS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $base_icms_st;
	/**
	 * Alíquota do ICMS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $aliq_icms_st;
	/**
	 * Percentual da margem do valor adicionado da base de cálculo do ICMS ST
	 *
	 * @var decimal
	 */
	public float $margem_icms_st;
	/**
	 * Valor do ICMS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $valor_icms_st;
	/**
	 * Alíquota de ICMS Operação Própria.
	 *
	 * @var decimal
	 */
	public float $aliq_icms_opprop;
	/**
	 * Percentual de redução de base de cálculo de Icms Operação Própria.
	 *
	 * @var decimal
	 */
	public float $perc_red_base_icms_op;
	/**
	 * CEST - Código Especificador da Substituíção Tributária.<BR>Preenchimento Opcional
	 *
	 * @var string
	 */
	public string $cest;
	/**
	 * Percentual do FCP - Fundo de Combate a Pobreza do ICMS ST.
	 *
	 * @var decimal
	 */
	public float $perc_fcp_icms_st;
	/**
	 * Base de Cálculo do FCP - Fundo de Combate a Pobreza do ICMS ST.
	 *
	 * @var decimal
	 */
	public float $base_fcp_icms_st;
	/**
	 * Valor do FCP - Fundo de Combate a Pobreza do ICMS ST.
	 *
	 * @var decimal
	 */
	public float $valor_fcp_icms_st;
}
