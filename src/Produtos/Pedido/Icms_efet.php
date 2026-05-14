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
 * ICMS efetivo.
 *
 * @pw_element string $cod_sit_trib_icms_efet NFe - Situação Tributária
 * @pw_element string $origem_icms_efet NFe - Origem
 * @pw_element string $modalidade_icms_efet NFe - Modalidade para determinação da Base de Cálculo do ICMs
 * @pw_element decimal $perc_red_base_icms_efet Percentual de redução da base de cálculo do ICMS
 * @pw_element decimal $base_icms_efet Base de cálculo do ICMS
 * @pw_element decimal $aliq_icms_efet Alíquota do ICMS
 * @pw_element decimal $valor_icms_efet Valor do ICMS
 * @pw_complex icms_efet
 */
class Icms_efet{
	/**
	 * NFe - Situação Tributária
	 *
	 * @var string
	 */
	public string $cod_sit_trib_icms_efet;
	/**
	 * NFe - Origem
	 *
	 * @var string
	 */
	public string $origem_icms_efet;
	/**
	 * NFe - Modalidade para determinação da Base de Cálculo do ICMs
	 *
	 * @var string
	 */
	public string $modalidade_icms_efet;
	/**
	 * Percentual de redução da base de cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $perc_red_base_icms_efet;
	/**
	 * Base de cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $base_icms_efet;
	/**
	 * Alíquota do ICMS
	 *
	 * @var decimal
	 */
	public float $aliq_icms_efet;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $valor_icms_efet;
}
