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
 * Valores totais do pedido.
 *
 * @pw_element decimal $base_calculo_icms Base de Cálculo do ICMS.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $base_calculo_st Base de cálculo da substituição tributária.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_pis Valor do PIS.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_cofins Valor do cofins.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_csll Valor da CSLL.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_icms Valor total do ICMS.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_st Valor total da ST.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_inss Valor do INSS.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_IPI Valor do IPI.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_ir Valor do IR.<BR>.Preenchimento automático - Não informar.
 * @pw_element decimal $valor_iss Valor do ISS.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_deducoes Valor das deduções.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_descontos Valor dos descontos.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_mercadorias valor das mercadorias.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_total_pedido Valor total do pedido.<BR>Preenchimento automático - Não informar.
 * @pw_element decimal $base_ibs_cbs Valor total da base de cálculo do IBS e da CBS.<BR><BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_dif_ibs_uf Valor total do diferimento do IBS UF.<BR><BR>Preenchimento automático - Não informar.<BR>
 * @pw_element decimal $valor_ibs_uf Valor total do IBS da UF.<BR><BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_dif_ibs_mu Valor total do diferimento do IBS do município.<BR><BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_ibs_mu Valor total do IBS do município.<BR><BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_ibs Valor total do IBS.<BR><BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_dif_cbs Valor total do diferimento da CBS.<BR><BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_cbs Valor total da CBS.<BR><BR>Preenchimento automático - Não informar.
 * @pw_element decimal $valor_tot_ibs_cbs_is Total da NF-e com IBS/CBS/IS.<BR><BR>Preenchimento automático - Não informar.
 * @pw_complex total_pedido
 */
class Total_pedido{
	/**
	 * Base de Cálculo do ICMS.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $base_calculo_icms;
	/**
	 * Base de cálculo da substituição tributária.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $base_calculo_st;
	/**
	 * Valor do PIS.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_pis;
	/**
	 * Valor do cofins.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_cofins;
	/**
	 * Valor da CSLL.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_csll;
	/**
	 * Valor total do ICMS.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_icms;
	/**
	 * Valor total da ST.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_st;
	/**
	 * Valor do INSS.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_inss;
	/**
	 * Valor do IPI.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_IPI;
	/**
	 * Valor do IR.<BR>.Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_ir;
	/**
	 * Valor do ISS.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_iss;
	/**
	 * Valor das deduções.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_deducoes;
	/**
	 * Valor dos descontos.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_descontos;
	/**
	 * valor das mercadorias.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_mercadorias;
	/**
	 * Valor total do pedido.<BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_total_pedido;
	/**
	 * Valor total da base de cálculo do IBS e da CBS.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $base_ibs_cbs;
	/**
	 * Valor total do diferimento do IBS UF.<BR><BR>Preenchimento automático - Não informar.<BR>
	 *
	 * @var decimal
	 */
	public float $valor_dif_ibs_uf;
	/**
	 * Valor total do IBS da UF.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_ibs_uf;
	/**
	 * Valor total do diferimento do IBS do município.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_dif_ibs_mu;
	/**
	 * Valor total do IBS do município.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_ibs_mu;
	/**
	 * Valor total do IBS.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_ibs;
	/**
	 * Valor total do diferimento da CBS.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_dif_cbs;
	/**
	 * Valor total da CBS.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_cbs;
	/**
	 * Total da NF-e com IBS/CBS/IS.<BR><BR>Preenchimento automático - Não informar.
	 *
	 * @var decimal
	 */
	public float $valor_tot_ibs_cbs_is;
}
