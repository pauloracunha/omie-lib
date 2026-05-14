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
 * COFINS - Substituição Tributária.
 *
 * @pw_element string $cod_sit_trib_cofins_st Código da Situação Tributária do COFINS
 * @pw_element string $tipo_calculo_cofins_st Tipo de cálculo para obtenção do valor do PIS Substituição Tributária
 * @pw_element decimal $base_cofins_st Base de Cálculo do COFINS Substituição Tributária
 * @pw_element decimal $aliq_cofins_st Alíquota do COFINS Substituição Tributária
 * @pw_element decimal $qtde_unid_trib_cofins_st Quantidade de Unidades Tributáveis do PIS Substituição Tributária
 * @pw_element decimal $valor_unid_trib_cofins_st Valor do PIS Substituição Tributária por Unidade Tributável
 * @pw_element decimal $margem_cofins_st Margem de valor adicional para obter a base de cálculo do COFINS Substituição Tributária
 * @pw_element decimal $valor_cofins_st Valor do PIS Substituição Tributária
 * @pw_complex cofins_st
 */
class Cofins_st{
	/**
	 * Código da Situação Tributária do COFINS
	 *
	 * @var string
	 */
	public string $cod_sit_trib_cofins_st;
	/**
	 * Tipo de cálculo para obtenção do valor do PIS Substituição Tributária
	 *
	 * @var string
	 */
	public string $tipo_calculo_cofins_st;
	/**
	 * Base de Cálculo do COFINS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $base_cofins_st;
	/**
	 * Alíquota do COFINS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $aliq_cofins_st;
	/**
	 * Quantidade de Unidades Tributáveis do PIS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $qtde_unid_trib_cofins_st;
	/**
	 * Valor do PIS Substituição Tributária por Unidade Tributável
	 *
	 * @var decimal
	 */
	public float $valor_unid_trib_cofins_st;
	/**
	 * Margem de valor adicional para obter a base de cálculo do COFINS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $margem_cofins_st;
	/**
	 * Valor do PIS Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $valor_cofins_st;
}
