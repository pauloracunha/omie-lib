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
 * Unidade, Quantidade, Valor e EAN tributáveis do item do pedido.
 *
 * @pw_element string $cUnidTrib Unidade tributável do Item.
 * @pw_element decimal $nQuantTrib Quantidade tributável do item.
 * @pw_element decimal $nValorTrib Valor tributável do item.
 * @pw_element string $cEanTrib código EAN tributável do item.
 * @pw_complex tributavel
 */
class Tributavel{
	/**
	 * Unidade tributável do Item.
	 *
	 * @var string
	 */
	public string $cUnidTrib;
	/**
	 * Quantidade tributável do item.
	 *
	 * @var decimal
	 */
	public float $nQuantTrib;
	/**
	 * Valor tributável do item.
	 *
	 * @var decimal
	 */
	public float $nValorTrib;
	/**
	 * código EAN tributável do item.
	 *
	 * @var string
	 */
	public string $cEanTrib;
}
