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
 * COFINS.
 *
 * @pw_element string $cod_sit_trib_cofins Código da Situação Tributária do COFINS
 * @pw_element string $tipo_calculo_cofins Tipo de cálculo para obtenção do valor do PIS
 * @pw_element decimal $base_cofins Base de Cálculo do COFINS
 * @pw_element decimal $aliq_cofins Alíquota do COFINS
 * @pw_element decimal $qtde_unid_trib_cofins Quantidade de Unidades Tributáveis do COFINS
 * @pw_element decimal $valor_unid_trib_cofins Valor do COFINS por Unidade Tributável
 * @pw_element decimal $valor_cofins Valor do COFINS
 * @pw_complex cofins_padrao
 */
class Cofins_padrao{
	/**
	 * Código da Situação Tributária do COFINS
	 *
	 * @var string
	 */
	public string $cod_sit_trib_cofins;
	/**
	 * Tipo de cálculo para obtenção do valor do PIS
	 *
	 * @var string
	 */
	public string $tipo_calculo_cofins;
	/**
	 * Base de Cálculo do COFINS
	 *
	 * @var decimal
	 */
	public float $base_cofins;
	/**
	 * Alíquota do COFINS
	 *
	 * @var decimal
	 */
	public float $aliq_cofins;
	/**
	 * Quantidade de Unidades Tributáveis do COFINS
	 *
	 * @var decimal
	 */
	public float $qtde_unid_trib_cofins;
	/**
	 * Valor do COFINS por Unidade Tributável
	 *
	 * @var decimal
	 */
	public float $valor_unid_trib_cofins;
	/**
	 * Valor do COFINS
	 *
	 * @var decimal
	 */
	public float $valor_cofins;
}
