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
 * Resposta da solicitação de cópia do Pedido de Venda de Produto.
 *
 * @pw_element string $cCodIntPed Código de Integração do Pedido de Venda de Produto.
 * @pw_element integer $nCodPed Código do Pedido de Venda
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex pvpDuplicarResponse
 */
class PvpDuplicarResponse{
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
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
