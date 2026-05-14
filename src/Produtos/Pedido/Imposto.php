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
 * Informações referentes aos impostos do Item do Pedido de Vendas.
 *
 * @pw_element icms_sn $icms_sn ICMS - Simples Nacional.<BR>Preenchimento Obrigatório quando optante pelo Simples Nacional.
 * @pw_element icms $icms ICMS<BR>Preenchimento Obrigatório.
 * @pw_element icms_st $icms_st ICMS - Substituição Tributária.<BR>Preenchimento Obrigatório.
 * @pw_element icms_ie $icms_ie ICMS Interestadual.<BR>Preenchimento Obrigatório.
 * @pw_element icms_efet $icms_efet ICMS efetivo.<BR>Não informar na Inclusão e Alteração.<BR>Utilizado somente na Consulta e Listagem
 * @pw_element ipi $ipi IPI.<BR>Preenchimento Obrigatório.
 * @pw_element pis_padrao $pis_padrao PIS.<BR>Preenchimento Obrigatório.
 * @pw_element pis_st $pis_st PIS - Substituíção Tributária.<BR>Preenchimento Obrigatório.
 * @pw_element cofins_padrao $cofins_padrao COFINS.<BR>Preenchimento Obrigatório.
 * @pw_element cofins_st $cofins_st COFINS - Substituição Tributária.<BR>Preenchimento Obrigatório.
 * @pw_element inss $inss INSS.<BR>Preenchimento Obrigatório.
 * @pw_element csll $csll CSLL.<BR>Preenchimento Obrigatório.
 * @pw_element irrf $irrf IRRF.<BR>Preenchimento Obrigatório.
 * @pw_element iss $iss ISS.<BR>Preenchimento Obrigatório.
 * @pw_element ibs_cbs $ibs_cbs Informações unificadas sobre o IBS e CBS.
 * @pw_element ibs $ibs Informações sobre o IBS.
 * @pw_element cbs $cbs Informações sobre o CBS.
 * @pw_element trib_reg $trib_reg Informações sobre a Tributação Regular do IBS e CBS.
 * @pw_complex imposto
 */
class Imposto{
	/**
	 * ICMS - Simples Nacional.<BR>Preenchimento Obrigatório quando optante pelo Simples Nacional.
	 *
	 * @var Icms_sn
	 */
	public Icms_sn $icms_sn;
	/**
	 * ICMS<BR>Preenchimento Obrigatório.
	 *
	 * @var Icms
	 */
	public Icms $icms;
	/**
	 * ICMS - Substituição Tributária.<BR>Preenchimento Obrigatório.
	 *
	 * @var Icms_st
	 */
	public Icms_st $icms_st;
	/**
	 * ICMS Interestadual.<BR>Preenchimento Obrigatório.
	 *
	 * @var Icms_ie
	 */
	public Icms_ie $icms_ie;
	/**
	 * ICMS efetivo.<BR>Não informar na Inclusão e Alteração.<BR>Utilizado somente na Consulta e Listagem
	 *
	 * @var Icms_efet
	 */
	public Icms_efet $icms_efet;
	/**
	 * IPI.<BR>Preenchimento Obrigatório.
	 *
	 * @var Ipi
	 */
	public Ipi $ipi;
	/**
	 * PIS.<BR>Preenchimento Obrigatório.
	 *
	 * @var Pis_padrao
	 */
	public Pis_padrao $pis_padrao;
	/**
	 * PIS - Substituíção Tributária.<BR>Preenchimento Obrigatório.
	 *
	 * @var Pis_st
	 */
	public Pis_st $pis_st;
	/**
	 * COFINS.<BR>Preenchimento Obrigatório.
	 *
	 * @var Cofins_padrao
	 */
	public Cofins_padrao $cofins_padrao;
	/**
	 * COFINS - Substituição Tributária.<BR>Preenchimento Obrigatório.
	 *
	 * @var Cofins_st
	 */
	public Cofins_st $cofins_st;
	/**
	 * INSS.<BR>Preenchimento Obrigatório.
	 *
	 * @var Inss
	 */
	public Inss $inss;
	/**
	 * CSLL.<BR>Preenchimento Obrigatório.
	 *
	 * @var Csll
	 */
	public Csll $csll;
	/**
	 * IRRF.<BR>Preenchimento Obrigatório.
	 *
	 * @var Irrf
	 */
	public Irrf $irrf;
	/**
	 * ISS.<BR>Preenchimento Obrigatório.
	 *
	 * @var Iss
	 */
	public Iss $iss;
	/**
	 * Informações unificadas sobre o IBS e CBS.
	 *
	 * @var Ibs_cbs
	 */
	public Ibs_cbs $ibs_cbs;
	/**
	 * Informações sobre o IBS.
	 *
	 * @var Ibs
	 */
	public Ibs $ibs;
	/**
	 * Informações sobre o CBS.
	 *
	 * @var Cbs
	 */
	public Cbs $cbs;
	/**
	 * Informações sobre a Tributação Regular do IBS e CBS.
	 *
	 * @var Trib_reg
	 */
	public Trib_reg $trib_reg;
}
