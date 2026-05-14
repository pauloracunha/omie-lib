<?php

namespace OmieLib\Produtos\Pedidovendafat;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovendafat\Request\PvpAssociarCodIntRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpCancelarRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpDuplicarRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpFaturarRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpObterRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpValidarRequest;
use OmieLib\Produtos\Pedidovendafat\Response\PvpAssociarCodIntResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpCancelarResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpDuplicarResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpFaturarResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpObterResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpValidarResponse;

/**
 * Lista de Pedidos encontrados na etapa solicitada
 *
 * @pw_element integer $nIdPed Código do Pedido de Venda
 * @pw_element string $cNumPedido Número do Pedido de Venda<BR>
 * @pw_complex listaPedidosVenda
 */
class ListaPedidosVenda{
	/**
	 * Código do Pedido de Venda
	 *
	 * @var integer
	 */
	public int $nIdPed;
	/**
	 * Número do Pedido de Venda<BR>
	 *
	 * @var string
	 */
	public string $cNumPedido;
}
