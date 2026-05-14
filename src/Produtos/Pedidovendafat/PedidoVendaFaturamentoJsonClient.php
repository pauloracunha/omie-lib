<?php

namespace OmieLib\Produtos\Pedidovendafat;

use OmieLib\Common\AbstractOmieJsonClient;
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
 * @service PedidoVendaFaturamentoJsonClient
 * @author omie
 */
class PedidoVendaFaturamentoJsonClient extends AbstractOmieJsonClient {
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;
	/**
	 * The endpoint URI
	 *
	 * @var string
	 */
	public static $_EndPoint='produtos/pedidovendafat/';

	/**
	 * Fatura um pedido de venda de produto.
	 *
	 * @param PvpFaturarRequest $pvpFaturarRequest Solicitação de faturamento da Pedido de Venda de Produto.
	 * @return PvpFaturarResponse Resposta da solicitação de faturamento do Pedido de Venda de Produto.
	 */
	public function FaturarPedidoVenda(PvpFaturarRequest $pvpFaturarRequest): ?PvpFaturarResponse {
		$res = $this->_Call('FaturarPedidoVenda',Array(
			$pvpFaturarRequest
		));
		return $this->_Cast($res, PvpFaturarResponse::class);
	}

	/**
	 * Valida um pedido de venda de produto para faturamento.
	 *
	 * @param PvpValidarRequest $pvpValidarRequest Solicitação de validação da Pedido de Venda de Produto.
	 * @return PvpValidarResponse Resposta da solicitação de validação do Pedido de Venda de Produto.
	 */
	public function ValidarPedidoVenda(PvpValidarRequest $pvpValidarRequest): ?PvpValidarResponse {
		$res = $this->_Call('ValidarPedidoVenda',Array(
			$pvpValidarRequest
		));
		return $this->_Cast($res, PvpValidarResponse::class);
	}

	/**
	 * Cancela um pedido de venda de produto.
	 *
	 * @param PvpCancelarRequest $pvpCancelarRequest Solicitação de cancelamento da Pedido de Venda de Produto.
	 * @return PvpCancelarResponse Resposta da solicitação de cancelamento do Pedido de Venda de Produto.
	 */
	public function CancelarPedidoVenda(PvpCancelarRequest $pvpCancelarRequest): ?PvpCancelarResponse {
		$res = $this->_Call('CancelarPedidoVenda',Array(
			$pvpCancelarRequest
		));
		return $this->_Cast($res, PvpCancelarResponse::class);
	}

	/**
	 * Duplica um pedido de venda de produto.
	 *
	 * @param PvpDuplicarRequest $pvpDuplicarRequest Solicitação de cópia do Pedido de Venda de Produto.
	 * @return PvpDuplicarResponse Resposta da solicitação de cópia do Pedido de Venda de Produto.
	 */
	public function DuplicarPedidoVenda(PvpDuplicarRequest $pvpDuplicarRequest): ?PvpDuplicarResponse {
		$res = $this->_Call('DuplicarPedidoVenda',Array(
			$pvpDuplicarRequest
		));
		return $this->_Cast($res, PvpDuplicarResponse::class);
	}

	/**
	 * Associar código de integração do Pedido de Venda
	 *
	 * @param PvpAssociarCodIntRequest $pvpAssociarCodIntRequest Solicitação de alteração do código de integração do Pedido de Venda de Produto.
	 * @return PvpAssociarCodIntResponse Resposta da solicitação de alteração do código de integração do Pedido de Venda de Produto.
	 */
	public function AssociarCodIntPedidoVenda(PvpAssociarCodIntRequest $pvpAssociarCodIntRequest): ?PvpAssociarCodIntResponse {
		$res = $this->_Call('AssociarCodIntPedidoVenda',Array(
			$pvpAssociarCodIntRequest
		));
		return $this->_Cast($res, PvpAssociarCodIntResponse::class);
	}

	/**
	 * Retorna a lista de pedidos de venda a serem faturados.
	 *
	 * @param PvpObterRequest $pvpObterRequest Solicitação da obtenção de Pedidos de Venda em etapa a Faturar
	 * @return PvpObterResponse Resposta da solicitação da listagem de Pedidos de Venda em etapa a Faturar
	 */
	public function ObterPedidosVenda(PvpObterRequest $pvpObterRequest): ?PvpObterResponse {
		$res = $this->_Call('ObterPedidosVenda',Array(
			$pvpObterRequest
		));
		return $this->_Cast($res, PvpObterResponse::class);
	}
}
