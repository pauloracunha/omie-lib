<?php

namespace OmieLib\Produtos\Pedidovendafat\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovendafat\ListaPedidosVenda;
use OmieLib\Produtos\Pedidovendafat\PedidoVendaFaturamentoJsonClient;
use OmieLib\Produtos\Pedidovendafat\Response\PvpAssociarCodIntResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpCancelarResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpDuplicarResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpFaturarResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpObterResponse;
use OmieLib\Produtos\Pedidovendafat\Response\PvpValidarResponse;

/**
 * Solicitação da obtenção de Pedidos de Venda em etapa a Faturar
 *
 * @pw_element string $cEtapa Código de Etapa do Pedido de Venda de Produto.
 * @pw_complex pvpObterRequest
 */
class PvpObterRequest{
	/**
	 * Código de Etapa do Pedido de Venda de Produto.
	 *
	 * @var string
	 */
	public string $cEtapa;
}
