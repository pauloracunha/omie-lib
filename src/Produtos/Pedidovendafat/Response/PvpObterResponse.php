<?php

namespace OmieLib\Produtos\Pedidovendafat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovendafat\ListaPedidosVenda;
use OmieLib\Produtos\Pedidovendafat\PedidoVendaFaturamentoJsonClient;
use OmieLib\Produtos\Pedidovendafat\Request\PvpAssociarCodIntRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpCancelarRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpDuplicarRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpFaturarRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpObterRequest;
use OmieLib\Produtos\Pedidovendafat\Request\PvpValidarRequest;

/**
 * Resposta da solicitação da listagem de Pedidos de Venda em etapa a Faturar
 *
 * @pw_element string $cEtapa Código de Etapa do Pedido de Venda de Produto.
 * @pw_element listaPedidosVendaArray $listaPedidosVenda Lista de Pedidos encontrados na etapa solicitada
 * @pw_complex pvpObterResponse
 */
class PvpObterResponse{
	/**
	 * Código de Etapa do Pedido de Venda de Produto.
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Lista de Pedidos encontrados na etapa solicitada
	 *
	 * @var ListaPedidosVenda[]
	 */
	public array $listaPedidosVenda;
}
