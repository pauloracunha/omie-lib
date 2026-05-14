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
 * PIS.
 *
 * @pw_element string $cod_sit_trib_pis Código da Situação Tributária do PIS
 * @pw_element string $tipo_calculo_pis Tipo de cálculo para obtenção do valor do PIS
 * @pw_element decimal $base_pis Base de Cálculo do PIS
 * @pw_element decimal $aliq_pis Alíquota do PIS
 * @pw_element decimal $qtde_unid_trib_pis Quantidade de Unidades Tributáveis do PIS
 * @pw_element decimal $valor_unid_trib_pis Valor do PIS por Unidade Tributável
 * @pw_element decimal $valor_pis Valor do PIS
 * @pw_complex pis_padrao
 */
class Pis_padrao{
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public string $cod_sit_trib_pis;
	/**
	 * Tipo de cálculo para obtenção do valor do PIS
	 *
	 * @var string
	 */
	public string $tipo_calculo_pis;
	/**
	 * Base de Cálculo do PIS
	 *
	 * @var decimal
	 */
	public float $base_pis;
	/**
	 * Alíquota do PIS
	 *
	 * @var decimal
	 */
	public float $aliq_pis;
	/**
	 * Quantidade de Unidades Tributáveis do PIS
	 *
	 * @var decimal
	 */
	public float $qtde_unid_trib_pis;
	/**
	 * Valor do PIS por Unidade Tributável
	 *
	 * @var decimal
	 */
	public float $valor_unid_trib_pis;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $valor_pis;
}
