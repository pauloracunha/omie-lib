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
 * ICMS Interestadual.
 *
 * @pw_element decimal $base_icms_uf_destino BC do ICMS na UF de Destino
 * @pw_element decimal $aliq_icms_FCP Percentual do ICMS relativo ao Fundo de Combate à Pobreza (FCP) na UF de Destino
 * @pw_element decimal $aliq_interna_uf_destino Alíquota Interna da UF de Destino
 * @pw_element decimal $aliq_interestadual Alíquota Interestadual das UFs Envolvidas
 * @pw_element decimal $aliq_partilha_icms Percentual Provisório de Partilha do ICMS Interestadual
 * @pw_element decimal $valor_fcp_icms_inter Valor do fundo de combate a pobreza.
 * @pw_element decimal $valor_icms_uf_dest Valor do ICMS - UF Destino
 * @pw_element decimal $valor_icms_uf_remet Valor do ICMS - UF Remetente
 * @pw_complex icms_ie
 */
class Icms_ie{
	/**
	 * BC do ICMS na UF de Destino
	 *
	 * @var decimal
	 */
	public float $base_icms_uf_destino;
	/**
	 * Percentual do ICMS relativo ao Fundo de Combate à Pobreza (FCP) na UF de Destino
	 *
	 * @var decimal
	 */
	public float $aliq_icms_FCP;
	/**
	 * Alíquota Interna da UF de Destino
	 *
	 * @var decimal
	 */
	public float $aliq_interna_uf_destino;
	/**
	 * Alíquota Interestadual das UFs Envolvidas
	 *
	 * @var decimal
	 */
	public float $aliq_interestadual;
	/**
	 * Percentual Provisório de Partilha do ICMS Interestadual
	 *
	 * @var decimal
	 */
	public float $aliq_partilha_icms;
	/**
	 * Valor do fundo de combate a pobreza.
	 *
	 * @var decimal
	 */
	public float $valor_fcp_icms_inter;
	/**
	 * Valor do ICMS - UF Destino
	 *
	 * @var decimal
	 */
	public float $valor_icms_uf_dest;
	/**
	 * Valor do ICMS - UF Remetente
	 *
	 * @var decimal
	 */
	public float $valor_icms_uf_remet;
}
