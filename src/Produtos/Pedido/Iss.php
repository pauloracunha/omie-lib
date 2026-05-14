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
 * ISS.
 *
 * @pw_element decimal $base_iss Base de cálculo do ISS
 * @pw_element decimal $aliq_iss Alíquota do ISS
 * @pw_element decimal $valor_iss Valor do ISS
 * @pw_element string $retem_iss Indica que o valor do ISS será retido pelo tomador do serviço
 * @pw_complex iss
 */
class Iss{
	/**
	 * Base de cálculo do ISS
	 *
	 * @var decimal
	 */
	public float $base_iss;
	/**
	 * Alíquota do ISS
	 *
	 * @var decimal
	 */
	public float $aliq_iss;
	/**
	 * Valor do ISS
	 *
	 * @var decimal
	 */
	public float $valor_iss;
	/**
	 * Indica que o valor do ISS será retido pelo tomador do serviço
	 *
	 * @var string
	 */
	public string $retem_iss;
}
