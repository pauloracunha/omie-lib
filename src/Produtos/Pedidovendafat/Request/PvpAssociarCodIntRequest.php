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
 * Solicitação de alteração do código de integração do Pedido de Venda de Produto.
 *
 * @pw_element string $cCodIntPed Código de Integração do Pedido de Venda de Produto.
 * @pw_element integer $nCodPed Código do Pedido de Venda
 * @pw_complex pvpAssociarCodIntRequest
 */
class PvpAssociarCodIntRequest{
	/**
	 * Código de Integração do Pedido de Venda de Produto.
	 *
	 * @var string
	 */
	public string $cCodIntPed;
	/**
	 * Código do Pedido de Venda
	 *
	 * @var integer
	 */
	public int $nCodPed;
}
