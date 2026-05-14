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
 * ICMS - Simples Nacional.
 *
 * @pw_element string $cod_sit_trib_icms_sn Código da situação tributária pelo Simples
 * @pw_element string $origem_icms_sn NFe - Origem
 * @pw_element decimal $aliq_icms_sn Alíquota aplicável de cálculo do crédito de ICMS no Simples Nacional
 * @pw_element decimal $valor_credito_icms_sn Valor do crédito de ICMS no Simples Nacional
 * @pw_element decimal $base_icms_sn Base de Cálculo da UF Remetente.<BR><BR>Base de Cálculo do ICMS retido anteriormente por Substituição Tributária.
 * @pw_element decimal $valor_icms_sn Valor do ICMS retido anteriormente por Substituição Tributária
 * @pw_complex icms_sn
 */
class Icms_sn{
	/**
	 * Código da situação tributária pelo Simples
	 *
	 * @var string
	 */
	public string $cod_sit_trib_icms_sn;
	/**
	 * NFe - Origem
	 *
	 * @var string
	 */
	public string $origem_icms_sn;
	/**
	 * Alíquota aplicável de cálculo do crédito de ICMS no Simples Nacional
	 *
	 * @var decimal
	 */
	public float $aliq_icms_sn;
	/**
	 * Valor do crédito de ICMS no Simples Nacional
	 *
	 * @var decimal
	 */
	public float $valor_credito_icms_sn;
	/**
	 * Base de Cálculo da UF Remetente.<BR><BR>Base de Cálculo do ICMS retido anteriormente por Substituição Tributária.
	 *
	 * @var decimal
	 */
	public float $base_icms_sn;
	/**
	 * Valor do ICMS retido anteriormente por Substituição Tributária
	 *
	 * @var decimal
	 */
	public float $valor_icms_sn;
}
