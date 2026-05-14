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
 * IPI.
 *
 * @pw_element string $cod_sit_trib_ipi Código da situação tributária do IPI
 * @pw_element string $tipo_calculo_ipi Tipo de cálculo para obtenção do valor do IPI
 * @pw_element string $enquadramento_ipi Enquadramento do IPI
 * @pw_element decimal $base_ipi Base de Cálculo do IPI
 * @pw_element decimal $aliq_ipi Alíquota do IPI
 * @pw_element decimal $qtde_unid_trib_ipi Quantidade de Unidades Tributáveis do IPI
 * @pw_element decimal $valor_unid_trib_ipi Valor do IPI por Unidade Tributável
 * @pw_element decimal $valor_ipi Valor do IPI
 * @pw_complex ipi
 */
class Ipi{
	/**
	 * Código da situação tributária do IPI
	 *
	 * @var string
	 */
	public string $cod_sit_trib_ipi;
	/**
	 * Tipo de cálculo para obtenção do valor do IPI
	 *
	 * @var string
	 */
	public string $tipo_calculo_ipi;
	/**
	 * Enquadramento do IPI
	 *
	 * @var string
	 */
	public string $enquadramento_ipi;
	/**
	 * Base de Cálculo do IPI
	 *
	 * @var decimal
	 */
	public float $base_ipi;
	/**
	 * Alíquota do IPI
	 *
	 * @var decimal
	 */
	public float $aliq_ipi;
	/**
	 * Quantidade de Unidades Tributáveis do IPI
	 *
	 * @var decimal
	 */
	public float $qtde_unid_trib_ipi;
	/**
	 * Valor do IPI por Unidade Tributável
	 *
	 * @var decimal
	 */
	public float $valor_unid_trib_ipi;
	/**
	 * Valor do IPI
	 *
	 * @var decimal
	 */
	public float $valor_ipi;
}
